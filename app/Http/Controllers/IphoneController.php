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

    public function add(Request $request)
    {
       
        $cart = session()->get('cart', []);
        $cart[]= $request->id;
        
        session()->put('cart', $cart);

        return redirect('/iphone');
    }
}
