<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StatusController;


Route::get('/',[StatusController::class,'index'])->name('index');
Route::get('/{slug}',[StatusController::class,'single_cat']);

//AuthController
Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'doLogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard']);
});
