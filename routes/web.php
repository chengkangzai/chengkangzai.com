<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicIndexController;
use App\Http\Controllers\PublicPandemicController;
use App\Http\Controllers\PublicPostCommentController;
use App\Http\Controllers\PublicPostController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
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
/**
 * Public Page
 */
Route::group(['as' => 'public.'], function () {
    Route::get('/', [PublicIndexController::class, 'index'])->name('index');
    Route::get('/locale/{locale}', [LocaleController::class, 'changeLocale'])->name('setLocale');
    Route::redirect('resume', 'resume.pdf');
    Route::view('status', 'public.status.index')->name('status.index');
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('/', [PublicPostController::class, 'index'])->name('index');
        Route::get('{post:slug}', [PublicPostController::class, 'show'])->name('show');
    });
    Route::group(['prefix' => 'pandemic', 'as' => 'pandemic.'], function () {
        Route::get('/', [PublicPandemicController::class, 'index'])->name('index');
    });
    Route::resource('posts.comments', PublicPostCommentController::class)->only(['store']);
});

/**
 * Admin Page
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web'], 'as' => 'admin.'], function () {
    Route::post('image/store', [ImageController::class, 'store'])->name('image.store');
    Route::view('home', 'admin.home')->name('home');
    Route::post('user/changePassword/{user}', [UserController::class, 'changePassword'])->name('user.changePassword');
    Route::resource('user', UserController::class)->only(['edit']);

    Route::get('posts/{postId}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::resource('posts', PostController::class);

    Route::resource('works', WorksController::class);
    Route::resource('tags', TagController::class)->except(['show']);
    Route::resource('comment', CommentController::class)->only('index', 'destroy');
});

