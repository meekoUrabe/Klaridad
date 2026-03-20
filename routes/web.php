<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// folder
Route::prefix('account')->group(function ()
{
    // page or php blade file
    Route::get('signup', [UserController::class, 'signup'] )->name('account.signup');
    Route::post('signup', [UserController::class, 'post_signup'])->name('account.post_signup');

    Route::get('login', [UserController::class, 'login'])->name('account.login');
    Route::post('login', [UserController::class, 'post_login'])->name('account.post_login');
});
