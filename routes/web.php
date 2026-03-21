<?php
use App\Models\Barangay;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
Route::get('/', function () {
    return view('home');
})->name('home');

// folder
Route::prefix('account')->group(function ()
{
    // page or php blade file
    Route::get('signup', [UserController::class, 'signup'] )->name('account.signup');
    Route::post('signup', [UserController::class, 'post_signup'])->name('account.post_signup');

    Route::get('login', [UserController::class, 'login'])->name('account.login');
    Route::post('login', [UserController::class, 'post_login'])->name('account.post_login');
});

Route::prefix('citizen')->group(function ()
{
    // page or php blade file
    Route::get('dashboard', function() {
        $barangay = Barangay::all(); 
    
        return view('citizen.dashboard', compact("barangay"));
        } )->name('citizen.dashboard');

    Route::get('submit_report', function() {
        return view('citizen.submit_report');
        } )->name('citizen.submit_report');
});
