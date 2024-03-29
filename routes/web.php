<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PosterController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', [HomeController::class, 'index'])->name("home");

Route::resource("posters", PosterController::class, [
    'except' => ['index', 'create', 'store', 'edit', 'update', 'destroy']
]);

require __DIR__.'/auth.php';
