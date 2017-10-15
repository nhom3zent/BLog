<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index(){
    	$users = User::paginate(10);
    	// dd($blogs);
    	return view('user/index',['users'=>$users]);
    }
    public function show($id){
    	$users = User::show($id);
    	return view('user/show',['users'=>$users]);
    }
    public function destroy($id){
         User::destroy($id);
        return redirect()->back();
    }

    public function create(){
        return view('user/create');
    }

    public function store(Request $request){

        $data= $request->all();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image');
            $data['image'] = $path;
        }
        User::store($data);
        return redirect()->route('users.index');
    }

    public function edit($id){
        $user = User::all();
        $user = User::getUserById($id);
        return view('user/edit',[
            'user'  => $user,
            // 'profiles' => $profiles
            ]);
    }

    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        unset($data['method']);
        $update = User::UpDateUserById($id,$data);
        return redirect()->route('users.index');
        // return redirect()->back();

    }

}
