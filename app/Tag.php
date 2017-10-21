<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tag extends Model
{
	protected $fillable = [
        'name', 'blog_id'
    ];
    public static function getall(){
        return DB::table('tag')->get();
    }
     public static function show($id){
        return DB::table('tag')->where('id',$id)->first();
   }

    public static function getTagById($id){
    return DB::table('tag')->where('id',$id)->first();
 }
     public static function store($data){
      Tag::create($data);
      return true;
   }
   public static function UpDateTagById($id,$data){
      return Tag::find($id)->update($data);
   }

   public static function destroy($id){
     DB::table('tag')->where('id',$id)->delete();
        return true;
   }
}
