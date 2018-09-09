<?php

namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;


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
            //echo '<pre>';print_r($_POST);die();
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'pass' => 'required',
                ]);
                if ($validator->fails()) {
                    return redirect('/')
                                ->withErrors($validator)
                                ->withInput();
                }
                return redirect('/');

                $User = new user;
                $User->email = $request->email;
                $User->password = $request->pass;
                $User->save();
           // echo '<pre>';print_r($_POST);die();
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
                        ]);
                        if ($validator->fails()) {
                            return redirect('/reg')
                                        ->withErrors($validator)
                                        ->withInput();
                        }
                        return redirect('/reg');
        
                        $User = new user;
                        $User->first_name = $request->fname;
                        $User->last_name = $request->lname;
                        $User->address = $request->address;
                        $User->city = $request->city;
                        $User->zip = $request->zip;
                        $User->father_name = $request->father;
                        $User->mother_name = $request->mother;
                        $User->phone = $request->phone;
                        $User->email = $request->email;
                        
                        $User->save();
                   // echo '<pre>';print_r($_POST);die();
              }
                return view('registration');
            }
}