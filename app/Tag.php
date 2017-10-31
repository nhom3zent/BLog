<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tag extends Model
{
  protected $table = 'tags';
	protected $fillable = [
        'name', 'blog_id'
    ];

    public function blogs(){
        return $this->belongsToMany('App\Blog', 'blog_tags', 'tag_id', 'blog_id');
    }
    
    public static function getall(){
        return DB::table('tags')->get();
    }
     public static function show($id){
        return DB::table('tags')->where('id',$id)->first();
   }

    public static function getTagsById($id){
    return DB::table('tags')->where('id',$id)->first();
 }
     public static function store($data){
      Tags::create($data);
      return true;
   }
   public static function UpDateTagsById($id,$data){
      return Tags::find($id)->update($data);
   }

   public static function destroy($id){
     DB::table('tags')->where('id',$id)->delete();
        return true;
   }

  
}
