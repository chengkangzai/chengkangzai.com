<?php

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\PublicIndexController;
use Illuminate\Support\Facades\Route;

Route::group(['as' => 'public.'], function () {
    Route::get('/', [PublicIndexController::class, 'index'])->name('index');
    Route::get('/locale/{locale}', [LocaleController::class, 'changeLocale'])->name('setLocale');
    Route::get('/card', [PublicIndexController::class, 'card'])->name('card');
    Route::get('/resume.pdf', [PublicIndexController::class, 'resume'])->name('resume');
    Route::redirect('resume', 'resume.pdf');
});
