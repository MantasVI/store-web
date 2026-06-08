<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MacController;
use App\Http\Controllers\IphoneController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class,'index']);

Route::get('/mac', [MacController::class,'index']);
Route::get('/iphone',[IphoneController::class,'index']);  

Route::get('/iphone/{name}',[IphoneController::class,'single']);  
Route::get('/mac/{name}',[MacController::class,'single']); 


Route::get('/cart',[CartController::class,'cart']);
Route::post('/cart/add/{type}/{id}',[CartController::class,'add']);
Route::delete('/cart/delete/{id}',[CartController::class,'remove']);
Route::get('/cart/edit/{id}',[CartController::class,'edit']);
Route::put('/cart/update/{id}',[CartController::class,'update']);


Route::get('/signup',[AuthController::class,'signup']);

Route::post('/signup',[AuthController::class,'insertas']);


Route::get('/login',[AuthController::class,'loginas']);

Route::post('/login',[AuthController::class,'checkas']);
