<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/login',[AuthController::class,'login']);
Route::post('/login',[AuthController::class,'doLogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard',[DashboardController::class,'dashboard']);
});
