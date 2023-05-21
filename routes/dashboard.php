<?php

use App\Http\Controllers\PosterController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('app.home');
})->name('home');

Route::resource("posters", PosterController::class, [
    "except" => ["show"],
]);

Route::post('/settings', [SettingsController::class, 'updateSettings'])->name('updateSettings');