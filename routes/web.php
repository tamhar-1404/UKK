<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('landingpage.index');
})->name('/');
Route::get('gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('Auth-login', [AuthController::class, 'index'])->name('Auth-login')->middleware('guest');
Route::get('Auth-register', [AuthController::class, 'create'])->name('Auth-register')->middleware('guest');
Route::get('/auth/redirect', [SocialController::class, 'redirectGoogle'])->name('redirect.google');
Route::get('/google/redirect', [SocialController::class, 'googleCallback'])->name('google.callback');
Route::post('Login', [AuthController::class, 'Login'])->name('Login')->middleware('guest');
Route::post('Register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('Log-Out', [AuthController::class, 'Logout'])->name('Log-Out');

Route::middleware(['auth'])->group(function () {
    Route::middleware(['role:Admin'])->group(function () {
        Route::get('Dasboard-Admin', [AdminController::class, 'Index'])->name('Admin');
    });

    Route::middleware(['role:user'])->group(function () {
        Route::get('Dasboard-user', [UserController::class, 'Index'])->name('User');
    });


});
