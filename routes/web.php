<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\MSOauthController;
use App\Http\Controllers\PublicIndexController;
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
    Route::redirect('resume', 'resume.pdf')->name('resume');

    Route::get('unsubscribe/{email}', function ($email) {
        User::where('email', $email)->firstOrFail()->scheduleConfig()->firstOrFail()->updateOrFail(['is_subscribed' => false]);
        echo 'You have been successfully unsubscribe';
    })->name('unsubscribe')->middleware('signed');
});
