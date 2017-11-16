<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Tag extends Model
{
  protected $table = 'tags';
	protected $fillable = [
        'name', 
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
    return Tag::find($id);
 }
     public static function store($data){
       $tag = Tag::create($data);
      return true;
   }
   public static function UpDateTagsById($id,$data){
      return Tag::find($id)->update($data);
   }

   public static function destroy($id){
     DB::table('tags')->where('id',$id)->delete();
        return true;
   }
}
