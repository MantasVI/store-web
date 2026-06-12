<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Macbook extends Model
{
    protected $fillable =[
    'name','image','kategorija','screenSize','screenType','cpu','gpu','ram','storage','color','price','arYra',


    ];

     public static function getAll()
    {
        return self::all();
    }
     public static function getName($name)
    {
        return self::where('name',$name)->first();
    }
    public static function getId($id)
    {
        return self::where('id',$id)->first();
    }
    public static function getRandom()
    {
        return self::inRandomOrder()->limit(8)->get();
    }
     public static function getSingle()
    {
        return self::inRandomOrder()->first();
    }
  
}
