<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;

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

Route::get('/',[AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/login',[AuthController::class,'login'])->middleware('alreadyLoggedIn');
Route::get('/register',[AuthController::class,'registration'])->middleware('alreadyLoggedIn');
Route::post('/reg-user',[AuthController::class,'reguser'])->name('reg-user');
Route::post('/login-user',[AuthController::class,'loginuser'])->name('login-user');
Route::get('/logout',[AuthController::class,'logout']);


Route::get('/dashboard',[AuthController::class,'dash'])->middleware('isLoggedIn');

Route::post('/upload',[HomeController::class,'upload']);
Route::get('/view',[HomeController::class,'view']);
Route::get('/delete/{id}',[HomeController::class,'delete']);
Route::get('/search',[HomeController::class,'search']);
Route::get('/update/{id}',[HomeController::class,'update']);
Route::post('/update/{id}',[HomeController::class,'update_view']);