<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\User;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
        $this->middleware('guest');
    }
    protected function login($request)//登录逻辑
    {
        $UserModel = new User();
        $this->validate($request,[
            'email'=>'required|email|max:50',
            'password'=>'required|max:20',
            'remember'=>'boolean'
            ]);
        if($UserModel->login($request))
            return redirect()->route('admin');
        else
            return redirect()->route('login')->with('errors','邮箱或密码错误');
    }
    public function index(Request $request)
    {
        if($request->method()=='POST')
        {
            return $this->login($request);
        }
        return view('auth/login');
    }
}
