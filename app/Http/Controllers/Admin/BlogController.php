<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
use App\User;
use App\Tag;
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
        $tags = Tag::get();
    	return view('admin.CreateBlogAdmin',[ 'users' => $users, 'tags' => $tags]);
    }
    public function store(Request $request){
    	$data = $request->all();
        // dd($data['tag_id']);
        $rules = [
            'title' => 'required',
            'image' => 'required',
            'description' => 'required',
            'content' => 'required|min:200',
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
        
    	Blog::store($data);        
        if (Blog::store($data)) {
            $request->session()->flash('message.level','<script>toastr.success("Thêm mới thành công");</script>');
        }

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
