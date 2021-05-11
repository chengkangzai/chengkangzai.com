<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicPostController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::view('home', 'home');

Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'name' => 'admin',], function () {
    Route::resource('posts', PostController::class);
});

Route::group(['prefix' => 'posts'], function () {
    Route::get('/', [PublicPostController::class, 'index']);
    Route::get('{post:slug}', [PublicPostController::class, 'show']);
});


