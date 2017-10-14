<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog extends Model
{
    

    protected $fillable =[
   'title' , 'image' , 'description','content','user_id','created_at','updated_at'   ];
   
	 public static function getAll(){
   		return DB::table('blogs')->pagiante(10);
   }

    public static function detail($id){
   		return DB::table('blogs')->where('id',$id)->first();
   }


   public static function page(){
   		$total = Blog::get()->count();
   		return $total;

    public static function store($data){
      Blog::create($data);
      return true;
   }

   public static function destroy($id){
   	 DB::table('blogs')->where('id',$id)->delete();
   		return true;
   }

   public static function getBlogById($id){
      return Blog::find($id);
   }

   public static function UpDateBlogById($id,$data){
      return Blog::find($id)->update($data);
   }
}
