<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Welcome\AboutController;
use App\Http\Controllers\Welcome\ContactController;
use App\Http\Controllers\Welcome\HomeController;
use App\Http\Controllers\Welcome\ServicesController;
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

Route::middleware(['web'])->group(function () {
    Route::get('/', function () {
        return redirect()->route('home.index');
    });
    Route::resource('home', HomeController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('about', AboutController::class);
    Route::resource('products', ServicesController::class);
});

require __DIR__.'/auth.php';
