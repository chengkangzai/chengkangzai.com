<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicPostCommentController;
use App\Http\Controllers\PublicPostController;
use App\Http\Controllers\PublicWorkController;
use App\Http\Controllers\WorksController;
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

Route::group(['as' => 'public.'], function () {

    Route::view('/', 'welcome')->name('index');
    Route::view('about', 'public.about')->name('about');
    Route::get('work', [PublicWorkController::class, 'index'])->name('work');
});


Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web'], 'as' => 'admin.'], function () {
    Route::view('home', 'home')->name('home');
    Route::resource('posts', PostController::class);
    Route::resource('works', WorksController::class);
});

Route::group(['as' => 'public.'], function () {
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('/', [PublicPostController::class, 'index'])->name('index');
        Route::get('{post:slug}', [PublicPostController::class, 'show'])->name('show');
    });
    Route::resource('posts.comments', PublicPostCommentController::class)->only(['store']);
});



