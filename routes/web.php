<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MSOauthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PublicIndexController;
use App\Http\Controllers\PublicPandemicController;
use App\Http\Controllers\PublicPostCommentController;
use App\Http\Controllers\PublicPostController;
use App\Http\Controllers\ScheduleConfigController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorksController;
use App\Http\Livewire\Admin\PermissionCrud;
use App\Http\Livewire\Admin\RoleCrud;
use App\Http\Livewire\Admin\TagCRUD;
use App\Http\Livewire\Admin\UserCrud;
use App\Models\User;
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
    Route::group(['prefix' => 'posts', 'as' => 'posts.'], function () {
        Route::get('/', [PublicPostController::class, 'index'])->name('index');
        Route::get('{post:slug}', [PublicPostController::class, 'show'])->name('show');
    });
    Route::group(['prefix' => 'pandemic', 'as' => 'pandemic.'], function () {
        Route::get('/', [PublicPandemicController::class, 'index'])->name('index');
        Route::view('clusters', 'public.covid.cluster')->name('clusters');
        Route::get('state', [PublicPandemicController::class, 'state'])->name('state');
    });
    Route::resource('posts.comments', PublicPostCommentController::class)->only(['store']);

    Route::get('unsubscribe/{email}', function ($email) {
        User::where('email', $email)->firstOrFail()->scheduleConfig()->firstOrFail()->updateOrFail(['is_subscribed' => false]);
        echo "You have been successfully unsubscribe";
    })->name('unsubscribe')->middleware('signed');
});

/**
 * Admin Page
 */
Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'web'], 'as' => 'admin.'], function () {
    Route::post('image/store', [ImageController::class, 'store'])->name('image.store');
    Route::get('home', [DashboardController::class, 'index'])->name('home');
    Route::get('user/changePassword/{user}', [UserController::class, 'editPassword'])->name('user.editPassword');
    Route::post('user/changePassword/{user}', [UserController::class, 'changePassword'])->name('user.changePassword');

    Route::middleware('role:Super Admin')->group(function () {
        Route::get('posts/{postId}/restore', [PostController::class, 'restore'])->name('posts.restore');
        Route::resource('posts', PostController::class);

        Route::resource('works', WorksController::class);
        Route::get('tags', TagCRUD::class)->name('tags.index');
        Route::resource('comment', CommentController::class)->only('index', 'destroy');

        Route::get('users/{userId}/restore', [UserController::class, 'restore'])->name('users.restore');
        Route::get('users', UserCrud::class)->name('users.index');
        Route::get('permissions', PermissionCrud::class)->name('permissions.index');
        Route::get('roles', RoleCrud::class)->name('roles.index');
    });

    Route::group(['prefix' => 'schedule', 'as' => 'schedule.'], function () {
        Route::post('getGrouping', [ScheduleConfigController::class, 'getGrouping'])->name('getGrouping');
        Route::get('msOAuth', [MSOauthController::class, 'signin'])->name('msOAuth.signin');
        Route::get('syncNow', [ScheduleConfigController::class, 'syncNow'])->name('syncNow');
        Route::get('msOAuth/callback', [MSOauthController::class, 'callback'])->name('msOAuth.callback');
    });
    Route::resource('scheduleConfig', ScheduleConfigController::class);
});
