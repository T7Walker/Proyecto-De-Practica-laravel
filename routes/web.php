<?php

use App\Http\Controllers\OperadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;

//  Route::get('/saludo',[OperadoresAritmeticosController::class,'saludo']);


Route::get('/sumar/{num1}/{num2}',[OperadoresController::class,'suma']);

Route::get('/providers',[ProviderController::class,'index']);
Route::get('/providers/create',[ProviderController::class,'create']);
Route::post('/providers/store',[ProviderController::class,'store'])->name('product.store');