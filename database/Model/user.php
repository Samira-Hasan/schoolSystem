<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use DB;

class user extends Model
{

    protected $fillable = [
         'email', 'password',
    ];

   
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function setUser()
    {
        return DB::table('users')
            ->select('email', 'password')
            ->take(10)
            ->orderBy('users.id', 'Asc')
            ->get()->toArray();
    }
}