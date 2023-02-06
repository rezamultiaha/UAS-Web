<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrasiController;

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

Route::get('/', [PostController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

Route::get('/register', [RegistrasiController::class, 'index']);
Route::post('/register', [RegistrasiController::class, 'store']);

Route::get('/{post:slug}', [PostController::class, 'show']);
