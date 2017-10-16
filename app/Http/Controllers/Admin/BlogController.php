<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
class BlogController extends Controller
{
    public function index(){
    	$blogs = Blog::paginate(5);
    	return view('admin.AdminBlog',['blogs' => $blogs]);
    }
    public function store(){
    	
    }
}
