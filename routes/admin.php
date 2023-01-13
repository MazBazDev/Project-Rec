<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [AdminController::class, "index"])->name('index');

Route::resource("settings", SettingsController::class, [
    'except' => ['create', "destroy", "update", "show", "edit", "destroy"]
]);

Route::resource("staff", StaffController::class, [
    'except' => ["show"]
]);

Route::resource("users", UsersController::class, [
    'except' => ["show"]
]);

Route::resource("booking", BookingController::class, [
    'except' => ["show"]
]);

Route::resource("movies", MoviesController::class, [
    'except' => ["show"]
]);