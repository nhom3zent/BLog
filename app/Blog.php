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
   }
}
