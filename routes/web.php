<?php

use App\Http\Controllers\AuthUserController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RequestLogController;
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

Route::get('/', [HomeController::class, 'index']);
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'registration']);
Route::get('/home', [HomeController::class, 'redirectHome']);
Route::middleware(['authUsers'])->group(function(){
    Route::get('/profile', [AuthUserController::class, 'profile'])->name('profile');
    Route::get('/settings', [AuthUserController::class, 'settings'])->name('settings');
});
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', ContactController::class);