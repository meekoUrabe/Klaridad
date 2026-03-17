<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

// folder
Route::prefix('account')->group(function ()
{
    // page or php blade file
    Route::get('/login', function () {
        return view('account.login');
    })->name('account.login');
});
