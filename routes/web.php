<?php

use App\Http\Controllers\OperadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

//  Route::get('/saludo',[OperadoresAritmeticosController::class,'saludo']);


Route::get('/sumar/{num1}/{num2}',[OperadoresController::class,'suma']);