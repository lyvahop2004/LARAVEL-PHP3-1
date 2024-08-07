<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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
    return view('welcome');
});

Route::get('/helo', [UserController::class, 'index']);
Route::get('/bang', [UserController::class, 'hienbang']);

Route::get('/product', [ProductController::class, 'index']);
Route::get('/search', [ProductController::class, 'search']);