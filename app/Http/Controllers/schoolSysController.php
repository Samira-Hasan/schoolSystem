<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Mail;
use Session;
use Illuminate\Support\Facades\Hash;

class schoolSystemController extends Controller
{

    public function inbox( )
    {
        return view('school');
    }
    
    public function log(Request $request)
    { 
        if ($request->isMethod('post'))   
        {
           // echo '<pre>';print_r($_POST);die();
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect('/')
                                ->withErrors($validator)
                                ->withInput();
                }

                $credentials = $request->only('email', 'password');

                if (Auth::attempt($credentials)) {
            
                return redirect()->intended('/dashboard');
                //echo '<pre>';print_r($user);die();
                }
                
         
           
      }
           return view('login');
  } 

           public function regis(Request $request)
            {
                if ($request->isMethod('post'))   
                {
                    //echo '<pre>';print_r($_POST);die();
                    $validator = Validator::make($request->all(), [
                        'fname' => 'required',
                        'lname' => 'required',
                        'address' => 'required',
                        'city' => 'required',
                        'zip' => 'required',
                        'father' => 'required',
                        'mother' => 'required',
                        'phone' => 'required',
                        'email' => 'required',
                        'password' => 'required',
                        ]);
                        //echo '<pre>';print_r($validator->fails());die();
                        if ($validator->fails()) {
                            return redirect('/reg')
                                        ->withErrors($validator)
                                        ->withInput();
                        }
                       
        
                        $User = new User;
                        $User->first_name = $request->fname;
                        $User->last_name = $request->lname;
                        $User->address = $request->address;
                        $User->city = $request->city;
                        $User->zip = $request->zip;
                        $User->father_name = $request->father;
                        $User->mother_name = $request->mother;
                        $User->phone = $request->phone;
                        $User->password = Hash::make($request->password);
                        $User->email = $request->email;
                        
                        $User->save();

                        Session::flash('message', 'Info Saved Successfully!'); 
                        Session::flash('alert', 'alert-success'); 

                        Mail::send('emails.welcome', ['user'=> $User], function ($message) use ($request) {
                            $message->from('us@example.com', 'Laravel');
                            $message->to($request->email, $request->fname);
                        });
                    //echo '<pre>';print_r($User);die();

                    return redirect('/reg');
              }
                return view('registration');
            }

          
            public function email($id)
            {
                $User = User::find($id);
                $User->status = 1;
                
                $User->save();
                //return 'User '.$id;
               
                return redirect('/');
                
            }


}