<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Iphone;

class IphoneController extends Controller
{ 
     public function index()
    {
       $x = Iphone::getAll();
        return view('iphone',['iphones' => $x]);
    }
    public function single($name)
    {
        $x = Iphone::getName($name);
       
        return view('phoneview',['iphone'=>$x]);

    }
    public function cart()
    {
        return view('cart');
    }
    public function add(Request $request,$id)
    {   $y =  $request->kiekis;
        $x = Iphone::getID($id);
        $bendrasuma=  $x->price * $y;
        
       return view('cart',['item'=> $x, 'kiekis' => $y,'bendras' => $bendrasuma]);
    }
}
