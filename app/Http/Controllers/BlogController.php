<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
class BlogController extends Controller
{

	 public function index(){
<<<<<<< HEAD
    	$blogs = Blog::paginate(20);
=======
    	$blogs = Blog::paginate(6);
>>>>>>> 5cb4db9ea7c6f4b75fea4cbbdc36a0cb0f1acd81
    	// dd($blogs);
    	return view('index',['blogs'=>$blogs]);
    }

     public function detail($id){

      	$blogs = Blog::detail($id);
    	return view('detail',['blogs'=>$blogs]);

    }
     public function destroy($id){
         Blog::destroy($id);
        return redirect()->back();
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){

        $data= $request->all();
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image');
            $data['image'] = $path;
        }
        Blog::store($data);
        return redirect()->route('blogs.index');
    }

    public function edit($id){
        $users = Users::all();
        $blog = Blog::getBlogById($id);
        return view('edit',[
            'blog'  => $blog,
            'users' => $users
            ]);
    }

    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        unset($data['method']);
        $update = Blog::UpdateBlogById($id,$data);
        return redirect()->route('blogs.index');

    }
}
