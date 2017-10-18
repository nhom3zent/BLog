<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
class BlogController extends Controller
{
    public function index(){
    	$blogs = Blog::paginate(5);
    	return view('admin.AdminBlog',['blogs' => $blogs]);
    }
    public function show($id){
    	$blog = Blog::find($id);
    	$users = User::get();
    	return view('admin.ShowBlogAdmin',[
    		'blog' => $blog,
    		'users' => $users,
    	]);
    }
    public function create(){
    	$users = User::get();
    	return view('admin.CreateBlogAdmin',[ 'users' => $users]);
    }
    public function store(Request $request){
    	$data = $request->all();
    	if($request->hasFile('image')){
            $path = $request->file('image')->store('image');
            $data['image'] = $path;
        }
    	Blog::store($data);
    	return redirect()->route('blog.index');
    }
    public function edit($id){
    	$blog = Blog::find($id);
    	$users = User::get();
    	return view('admin.UpdateBlogAdmin',['blog' => $blog, 'users' => $users]);
    }
    public function update(Request $request, $id){
    	$data = $request->all();
    	// dd($data);
    	if ($request->hasFile('image')) {
    		$path = $request->file('image')->store('image');
    		$data['image'] = $path;
    	}
    	Blog::find($id)->update($data);

    	return redirect()->route('blog.index');    	
    }
    public function delete($id){
    	Blog::find($id)->delete();
    	return redirect()->route('blog.index');
    }
}
