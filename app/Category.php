<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table= 'categoryes';
     protected $fillable = [
        'name',
        'description'
    ];
    public static function getall(){
        return DB::table('categoryes')->pagiante(5);
    }
    public static function getCategoryById($id){
   		return Category::find($id);
	}
	public static function store($data){
      Category::create($data);
      return true;
   }
   public static function detail($id){
   		return DB::table('categoryes')->where('id',$id)->first();
   }
   public static function UpDateCategoryById($id,$data){
      return Category::find($id)->update($data);
   }
   public static function destroy($id){
   	 DB::table('categoryes')->where('id',$id)->delete();
   		return true;
   }
}
