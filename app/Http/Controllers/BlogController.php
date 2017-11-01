<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Tag;
class BlogController extends Controller
{

     public function indexRight(){
        $blogs = Blog::paginate(5);
        // dd($blogs);
        return view('BlogMain',['blogs'=>$blogs]);
    }

     public function detail($slug)
     {

        $tags = Tag::all();
      	$blog = Blog::where('slug', '=', $slug)->first();
        
    	return view('DetailBlog',
            ['blog'=>$blog,
            'tags'=>$tags]
            );

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
