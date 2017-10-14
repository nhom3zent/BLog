<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::paginate(10);
<<<<<<< HEAD
    	// dd($users);
=======
    	// dd($blogs);
>>>>>>> 5cb4db9ea7c6f4b75fea4cbbdc36a0cb0f1acd81
    	return view('admin/Admin',['users'=>$users]);
    	
    }

    public function show($id){
    	$users = User::show($id);
    	return view('detail',['users'=>$users]);

    }

}
