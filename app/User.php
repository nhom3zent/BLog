<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function getall(){
        return DB::table('users')->get();
    }
     public static function show($id){
        return DB::table('users')->where('id',$id)->first();
   }

    public static function getUserById($id){
    return DB::table('users')->where('id',$id)->first();
 }
     public static function store($data){
      User::create($data);
      return true;
   }
   public static function UpDateUserById($id,$data){
      return User::find($id)->update($data);
   }
   public static function destroy($id){
     DB::table('users')->where('id',$id)->delete();
        return true;
   }
}

