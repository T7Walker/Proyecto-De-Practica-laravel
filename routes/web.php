<?php

use App\Http\Controllers\OperadoresController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProviderController;

// la ruta de create
Route::get('/providersPage/create', [ProviderController::class, 'create'])->name('providersPage.create');
// la ruta de store
Route::post('/providersPage', [ProviderController::class, 'store'])->name('providersPage.store');
// la ruta de list
Route::get('/providersPage/list', [ProviderController::class,'list'])->name('providersPage.list');
// la ruta de show
Route::get('/providersPage/{id}', [ProviderController::class, 'show'])->name('providersPage.show');
// la ruta de edit
Route::get('/providersPage/{id}/edit', [ProviderController::class, 'edit'])->name('providersPage.edit');
// la ruta de delete
Route::delete('/providersPage/{id}', [ProviderController::class, 'delete'])->name('providersPage.delete');
// la ruta de update
Route::put('/providersPage/{id}', [ProviderController::class, 'update'])->name('providersPage.update');
