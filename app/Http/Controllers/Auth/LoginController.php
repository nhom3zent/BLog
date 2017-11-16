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
    protected $redirectTo = '/blogs';

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

    public function postLogin(Request $request) {
        $rules = [
            'email' =>'required|email',
            'password' => 'required|min:6'
        ];
        $messages = [
            'email.required' => 'Email là trường bắt buộc',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Mật khẩu là trường bắt buộc',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        } else {
            
            $email = $request->email;
            $password = $request->password;

            if( Auth::attempt(['email' => $email, 'password' =>$password, 'role' => 1]) ) {
                return redirect()->route('users.index');
            }
            if( Auth::attempt(['email' => $email, 'password' =>$password, 'role' => 0]) ) {
                return redirect()->route('blogs.indexRight');
            }

             else {
                $errors = new MessageBag(['errorlogin' => 'Email hoặc mật khẩu không đúng']);
                return redirect()->back()->withInput()->withErrors($errors);
            }
        }
    }
}
