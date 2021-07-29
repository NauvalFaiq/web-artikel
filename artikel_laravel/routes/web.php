<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DataController;

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

Route::get('/', [HomeController::class, 'index']);
Route::post('/searchArtikel', [HomeController::class, 'searchArtikel']);
Route::get('/login', [LoginController::class, 'index']);
Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/processLogin', [LoginController::class, 'login']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/processRegister', [RegisterController::class, 'register']);

Route::get('/artikel', [ArtikelController::class, 'index']);
Route::post('/artikel/store', [ArtikelController::class, 'store']);
Route::post('/data/getDataArtikel', [DataController::class, 'getDataArtikel']);
Route::post('/artikel/updateArtikel', [ArtikelController::class, 'updateArtikel']);
Route::post('/artikel/deleteArtikel', [ArtikelController::class, 'deleteArtikel']);