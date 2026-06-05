<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Macbook;
class MacController extends Controller
{
    public function index()
    {
        $x = Macbook::getAll();
        return view('mac',['macbook' => $x]);
    }
    public function single($name)
     {
        $x = Macbook::getName($name);

        return view('laptopview',['macbook' => $x]);
     }
     public function add($id,Request $request)
     {
        $x = Macbook::getId($id);
        $kiekis = $request->kiekis;
        $bendras = $x->price * $kiekis;
        return view('cart',['item' => $x , 'kiekis' => $kiekis ,'bendras' => $bendras ]);


     }
}
