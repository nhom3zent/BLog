<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
        
    {
        // $blogs = Blog::paginate(10);
        return view('auth.register');
        // return view('admin.blogs.AdminBlog',['blogs' => $blogs]);
    }
}
