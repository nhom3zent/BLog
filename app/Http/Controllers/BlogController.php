<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
class BlogController extends Controller
{

	 public function index(){
    	$blogs = Blog::getAll();
    	// dd($blogs);
    	return view('index',['blogs'=>$blogs]);
    }

     public function detail($id){
      	$blogs = Blog::detail($id);
    	return view('detail',['blogs'=>$blogs]);

    }
}
