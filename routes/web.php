<?php

use App\Http\Controllers\AuthController;
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

Route::get('/signup',[AuthController::class,'signup']);

Route::post('/signup',[AuthController::class,'insertas']);


Route::get('/login',[AuthController::class,'loginas']);

Route::post('/login',[AuthController::class,'checkas']);
