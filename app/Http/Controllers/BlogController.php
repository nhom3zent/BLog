<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\User;
use App\Tag;
use App\Category;
class BlogController extends Controller
{

     public function indexRight(){
        $datas = Category::get();
        $blogs = Blog::paginate(5);
        return view('BlogMain',['blogs'=>$blogs, 'datas'=> $datas]);
    }

    public function category($category){
        $datas = Category::get();
        $id = Category::where('slug', '=', $category)->first()->id;
        // dd($id);
        $blogs = Category::orderBy('id','desc')->find($id)->blogs;
        // dd($blogs);
        return view('BlogCategory', [ 'blogs' => $blogs, 'datas'=> $datas]);
    }

     public function detail($slug)
     {
        // dd('a');
      	$blog = Blog::where('slug', '=', $slug)->first();
        // dd($blog);
    	return view('DetailBlog',['blog'=>$blog]);

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
