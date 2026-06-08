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

        return view('home',['macbook' => $macbook , 'iphones' => $iphone]);
    }
}
