<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/Mac', function () {
    return view('Mac');
});

Route::get('/Iphone', function () {
    return view('Iphone');
});