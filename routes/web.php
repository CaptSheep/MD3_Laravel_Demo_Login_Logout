<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('checkAuth')->group(function (){
    Route::get('/',[CustomerController::class,'index'])->name('index');
    Route::get('/index/{id}/detail',[CustomerController::class,'show'])->name('show');
    Route::get('/create',[CustomerController::class,'create'])->name('create');
    Route::post('/create',[CustomerController::class,'store'])->name('store');
    Route::get('/index/{id}/edit',[CustomerController::class,'edit'])->name('edit');
    Route::post('/index/{id}/update',[CustomerController::class,'update'])->name('update');
    Route::get('/index/{id}/update',[CustomerController::class,'destroy'])->name('destroy');
});

Route::get('/login',[AuthController::class,'showFormLogin'])->name('showFormLogin');
Route::post('/login',[AuthController::class,'login'])->name('login');
Route::get('/register',[AuthController::class,'showFormRegister'])->name('showFormRegister');
Route::post('/register',[AuthController::class,'register'])->name('register');
