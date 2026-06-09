<?php

namespace App\Http\Controllers;

use App\Models\Iphone;
use App\Models\Macbook;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $iphone = Iphone::getRandom();
        $macbook = Macbook::getRandom();
        $big = Macbook::getId('4');
        $small1 = Iphone::getId('5');
        $small2 = Macbook::getId('42');
        $small3 = Iphone::getId('24');
        $small4 = Macbook::getId('32');
        $small5 = Iphone::getId('13');
        $small6 = Macbook::getId('17');
        return view('home',['macbook' => $macbook , 'iphones' => $iphone,'big'  => $big,'small1' => $small1,
    'small2' => $small2, 'small3' => $small3, 'small4' => $small4,'small5' => $small5,'small6' => $small6, ]);
    
   
   
    
    
    }
}
