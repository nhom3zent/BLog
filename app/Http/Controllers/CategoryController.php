<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
class CategoryController extends Controller
{

    public function index()
    {
        $categories=Category::paginate(10);
        return view('admin.categories.index')->withCategories($categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();
        $rules = [
            'name' => 'required:max:100',
            'description' => 'required',
        ];
         $messages = [
            'name.required' => 'Không được bỏ trống!',
            'description.required' => 'Không được bỏ trống!',
        ];
         $validator = \Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator->errors())
                            ->withInput();
        }
        $categories = Category::create($data);        
        if ($categories) {
            $request->session()->flash('message.level','<script>toastr.success("Thêm mới thành công");</script>');
        }
        Category::store($data);
        return redirect()->route('categories.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categories = Category::detail($id);
        return view('admin.categories.show',['categories'=>$categories]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $categories=Category::getCategoryById($id);
        return view('admin.categories.edit',[
            'categories'  => $categories
            ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd('xxx');
        $data = $request->all();
        // unset($data['_token']);
        // unset($data['method']);
        $update = Category::UpDateCategoryById($id,$data);
        return redirect()->route('categories.index');
    }

    
    public static function UpDateCategoryById($id,$data){
      return Category::find($id)->update($data);
   }
    public function destroy($id)
    {
        Category::destroy($id);
       return response()->json([
            'error' => false,
            'message' => 'Xóa thành công',
        ]);
    }
}
