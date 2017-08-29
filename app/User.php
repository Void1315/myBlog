<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function login($request)//登录逻辑
    {
        $email = $request->email;
        $password = $request->password;
        $remember = $request->remember;
        if(Auth::attempt(['email' => $email, 'password' => $password], $remember))
        {
            // dd('a');
            return true;
        }
        else
        {
            return false;
        }
    }
}
