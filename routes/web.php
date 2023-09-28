<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LanguageController;
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

Route::middleware('language')->group(function () {

    Route::get('/', HomeController::class)->name('home');
    Route::get('/language', fn() => redirect()->back());
    Route::fallback(fn() => view('errors.404'));
});

Route::post('/language', LanguageController::class)->name('language');
