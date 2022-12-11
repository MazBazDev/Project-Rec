<?php

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

Route::get('/maintenance', function () {
    if(setting("settings.maintenance")) {
        return view("pages.maintenance");
    } else {
        return redirect()->route("home");
    }
})->name("maintenance");

Route::middleware(['maintenance'])->group(function () {
    Route::get('/', function () {
        return view('pages.welcome');
    })->name("home");
    
    Route::get('/contact-us', function () {
        return view('pages.welcome');
    });
    
    Route::get('/legal', function () {
        return view('pages.welcome');
    });
    
    Route::get('/faq', function () {
        return view('pages.welcome');
    });
    
    Route::get('/team', function () {
        return view('pages.welcome');
    });
});
