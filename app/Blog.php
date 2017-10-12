<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Blog extends Model
{
    

    protected $fillable =[
   'title' , 'image' , 'description','content','user_id','created_at','updated_at'   ];
   
	 public static function getAll(){
   		return DB::table('blogs')->get();
   }

    public static function detail($id){
   		return DB::table('blogs')->where('id',$id)->first();
   }
}
