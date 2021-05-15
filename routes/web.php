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


Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'as' => 'admin.'], function () {
    Route::view('home', 'home')->name('home');
    Route::resource('posts', PostController::class);
});

Route::group(['as' => 'public.'], function () {
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('/', [PublicPostController::class, 'index'])->name('index');
        Route::get('{post:slug}', [PublicPostController::class, 'show'])->name('show');
    });
});


