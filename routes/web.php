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
        return view('guest.index');
    })->name("home");
});
