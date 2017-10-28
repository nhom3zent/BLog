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
        return redirect()->back();
    }

    public function create(){
        return view('admin.tags/create');
    }

    public function store(Request $request){

        $data= $request->all();
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('image');
        //     $data['image'] = $path;
        // }
        Tag::store($data);
        return redirect()->route('tags.index');
    }

    public function edit($id){
        $tag = Tag::all();
        $tag = Tag::getTagsById($id);
        return view('admin.tags/edit',[
            'tag'  => $tag,
            // 'profiles' => $profiles
            ]);
    }

    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        unset($data['method']);
        $update = Tag::UpDateTagsById($id,$data);
        return redirect()->route('tags.index');
        // return redirect()->back();

    }

}
