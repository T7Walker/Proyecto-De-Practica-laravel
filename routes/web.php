<?php

use App\Http\Controllers\OperadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;

//  Route::get('/saludo',[OperadoresAritmeticosController::class,'saludo']);
Route::get('/providersPage/list',[ProviderController::class,'list'])->name('providerPage.list');
Route::post('providersPage/show',[ProviderController::class,'show'])->name('providerPage.show');