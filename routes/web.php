<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\JokesController;

//Public Routes
Route::get('/',[StatusController::class,'index'])->name('index');
Route::get('/status/{slug}',[StatusController::class,'single_cat']);
Route::get('/jokes',[JokesController::class,'index']);
Route::get('/jokes/{slug}',[JokesController::class,'single_cat']);

//other
Route::get('/about',function(){
    return view('other.about');
});
Route::get('/contact',function(){
    return view('other.contact');
});

//AuthController
Route::get('/admin/login',[AuthController::class,'login']);
Route::post('/admin/login',[AuthController::class,'doLogin']);
Route::get('/admin/logout',[AuthController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard',[DashboardController::class,'dashboard'])->name('dashboard');

    //Add Status
    Route::post('/admin/add-status',[StatusController::class,'addStatus']);

});
