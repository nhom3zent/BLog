<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tags;

class TagsController extends Controller
{
    public function index(){
    	$tags = Tags::paginate(10);
    	// dd($blogs);
    	return view('tags/index',['tags'=>$tags]);
    }
    public function show($id){
    	$tags = Tags::show($id);
    	return view('tags/show',['tags'=>$tags]);
    }
    public function destroy($id){
         Tags::destroy($id);
        return redirect()->back();
    }

    public function create(){
        return view('tags/create');
    }

    public function store(Request $request){

        $data= $request->all();
        // if ($request->hasFile('image')) {
        //     $path = $request->file('image')->store('image');
        //     $data['image'] = $path;
        // }
        Tags::store($data);
        return redirect()->route('tags.index');
    }

    public function edit($id){
        $tag = Tags::all();
        $tag = Tags::getTagsById($id);
        return view('tags/edit',[
            'tag'  => $tag,
            // 'profiles' => $profiles
            ]);
    }

    public function update(Request $request,$id){
        $data = $request->all();
        unset($data['_token']);
        unset($data['method']);
        $update = Tags::UpDateTagsById($id,$data);
        return redirect()->route('tags.index');
        // return redirect()->back();

    }

}
