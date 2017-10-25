<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
<<<<<<< HEAD
    protected $redirectTo = '/blog';
=======
    protected $redirectTo = 'home';
>>>>>>> bf8926bbecacc81c42a3ffc6d444570726ef2fd1

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    // public function credentials($request)
    // {
    //     $data = $request->all();
    //     $result['password'] = $data['password'];
    //     $username = filter_var($data['username'],
    //         FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    //     $result[$username] = $data['username'];
    //     return $result;
    // }
    // public function username(){
    //     return 'username';
    // }
}
