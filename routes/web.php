<?php

use Illuminate\Support\Facades\Route;
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


Route::get('/',[AuthController::class,'index']);
Route::get('/show',[AuthController::class,'show'])->name('show');
Route::post('/create',[AuthController::class,'create'])->name('create');
Route::post('/edit/{id}',[AuthController::class,'edit'])->name('edit');
Route::get('/delete/{id}',[AuthController::class,'delete'])->name('delete');