<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
class LoginController extends Controller
{
    protected $redirectTo = 'admin/';
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin() {
    	return view('admin/login');
    }
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
