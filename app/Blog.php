<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;


class Blog extends Model
{
    

    protected $fillable =[
   'title' , 'image' , 'description','content','user_id','blog_tag','created_at','updated_at', 'slug'   ];
   
   public function blog_category(){
        return $this->belongsToMany('App\Category', 'blog_categoryes', 'blog_id', 'categoryes_id')->withTimestamps();
    }
    public function user(){
      return $this->belongsTo('App\User');
    }

	 public static function getAll(){
   		return DB::table('blogs')->pagiante(5);
   }

    public static function detail($slug){
   		return DB::table('blogs')->where('slug', '=', $slug)->first();
   }


   public static function page(){
      $total = Blog::get()->count();
      return $total;
}
    public static function store($data){
      $blog = Blog::create($data);
      return $blog;
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
