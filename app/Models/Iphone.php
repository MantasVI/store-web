<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Iphone extends Model
{

    protected $fillable = [
        'name',
        'image',
        'kategorija',
        'screenSize',
        'storage',
        'color',
        'price',
        'oldprice',
        'arYra',
    ];


    public static function getAll()
    {
        return self::all();
    }
     public static function getName($name)
    {
        return self::where('name', $name)->first();
    }
     public static function getId($id)
    {
        return self::where('id',$id)->first();
    }
    public function getKategorija($kategorija)
    {
        return self::find($kategorija);
    }
    public function getScreenSize($screenSize)
    {
        return self::find($screenSize);
    }
    public function getStorage($storage)
    {
        return self::find($storage);
    }
    public function getColor($color)
    {
        return self::find($color);
    }
    public function getPrice($price)
    {
        return self::find($price);
    }
    public function getOldPrice($oldprice)
    {
        return self::find($oldprice);
    }
    public function getArYra($arYra)
    {
        return self::find($arYra);
    }
   
}
