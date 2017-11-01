<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;

class TagsController extends Controller
{
    public function index(){
    	$tags = Tag::paginate(10);
    	// dd($blogs);
    	return view('admin.tags/index',['tags'=>$tags]);
    }
    public function show($id){
    	$tags = Tag::show($id);
    	return view('admin.tags/show',['tags'=>$tags]);
    }
    public function destroy($id){
         Tag::destroy($id);
       return response()->json([
            'error' => false,
            'message' => 'Xóa thành công',
        ]);
    }

    public function create(){
        return view('admin.tags/create');
    }

    public function store(Request $request){

        $data= $request->all();
        $rules = [
            'name' => 'required:max:100',
            'blog_id' => 'required',
        ];
         $messages = [
            'name.required' => 'Không được bỏ trống!',
            'blog_id.required' => 'Không được bỏ trống!',
        ];
         $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }
        $tag = Tag::create($data);        
        if ($tag) {
            $request->session()->flash('message.level','<script>toastr.success("Thêm mới thành công");</script>');
        }
        Tag::store($data);
        return redirect()->route('tags.index');
    }
        
  

    public function edit($id){
        $tag = Tag::find($id);
        return view('admin.tags/edit',[
            'tag'  => $tag,
            ]);
    }

    public function update(Request $request, $id){
        $data = $request->all();
         $rules = [
            'name' => 'required',
            'blog_id' => 'required',
        ];
         $messages = [
            'name.required' => 'Không được bỏ trống',
            'blog_id.required' => 'Không được bỏ trống',
        ];
        
        Tag::find($id)->update($data);
        if (Tag::find($id)->update($data)) {
            $request->session()->flash('message.level1','<script>toastr.success("Sửa thông tin thành công");</script>');
        }

        return redirect()->route('tags.index');
}
}