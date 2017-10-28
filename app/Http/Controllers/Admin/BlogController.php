<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
use App\Tag;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
    	$blogs = Blog::orderBy('id','desc')->paginate(5);
    	return view('admin.blogs.AdminBlog',['blogs' => $blogs]);
    }
    public function show($id){
    	$blog = Blog::find($id);
    	$users = User::get();
    	return view('admin.blogs.ShowBlogAdmin',[
    		'blog' => $blog,
    		'users' => $users,
    	]);
    }
    public function create(){
    	$users = User::get();
        $tags = Tag::get();
    	return view('admin.blogs.CreateBlogAdmin',[ 'users' => $users, 'tags' => $tags]);
    }
    public function store(Request $request){
    	$data = $request->all();
// $blog = Blog::find(1);
// dd($blog);
        // dd($blog);
        // dd($data['tag_id']);
        // dd($data);
        
        $rules = [
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'content' => 'required|min:2',
        ];
        $messages = [
            'title.required' => 'Không được bỏ trống!',
            'image.required' => 'Không được bỏ trống!',
            'description.required' => 'Không được bỏ trống!',
            'content.required' => 'Không được bỏ trống!',
            'content.min' => 'Cần điền ít nhất 200 ký tự!',
        ];
        $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }
    	if($request->hasFile('image')){
            $path = $request->file('image')->store('image');
            $data['image'] = $path;
        };
        $data['slug'] = str_slug($data['title']);
        
    	$blog = Blog::create($data);        
        if ($blog) {
            $request->session()->flash('message.level','<script>toastr.success("Thêm mới thành công");</script>');
        }
        $blog->blog_tag()->attach($data['tag_id']);
    	return redirect()->route('blog.index');
    }
    public function edit($id){
    	$blog = Blog::find($id);
    	$users = User::get();
    	return view('admin.blogs.UpdateBlogAdmin',['blog' => $blog, 'users' => $users]);
    }
    public function update(Request $request, $id){
    	$data = $request->all();
    	// dd($data);
        
        $rules = [
            'title' => 'required',
            // 'image' => 'required',
            'description' => 'required',
            'content' => 'required',
        ];
        $messages = [
            'title.required' => 'Không được bỏ trống',
            // 'image.required' => 'Không được bỏ trống',
            'description.required' => 'Không được bỏ trống',
            'content.required' => 'Không được bỏ trống',
        ];
        $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('image');
            $data['image'] = $path;
        }
        $data['slug'] = str_slug($data['title']);
    	Blog::find($id)->update($data);
        if (Blog::find($id)->update($data)) {
            $request->session()->flash('message.level1','<script>toastr.success("Sửa thông tin thành công");</script>');
        }
    	return redirect()->route('blog.index');    	
    }
    public function delete($id){
    	Blog::find($id)->delete();
    	return response()->json([
            'error' => false,
            'message' => 'Xóa thành công',
        ]);
    }

}
