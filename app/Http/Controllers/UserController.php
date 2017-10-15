<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::paginate(10);
    	// dd($blogs);
    	return view('admin/Admin',['users'=>$users]);
    }
    public function show($id){
    	$users = User::show($id);
    	return view('detail',['users'=>$users]);

    }

}
