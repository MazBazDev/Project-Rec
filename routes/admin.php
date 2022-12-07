<?php

use App\Http\Controllers\SettingsController;
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

Route::get('/', function () {
    return view('admin.index');
})->name('index');

Route::get('/settings', function () {
    
})->name('settings.index');

Route::resource("settings", SettingsController::class, [
    'except' => ['create', "destroy", "update", "show", "edit", "destroy"]
]);