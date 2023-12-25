<?php

use App\Http\Controllers\AppController;
use App\Http\Controllers\RefaceController;
use App\Http\Controllers\PricesController;
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

Route::get("/", [AppController::class, 'index'])->name("index");
Route::get("/reface", [RefaceController::class, 'index'])->name("reface");
Route::get("/prices", [PricesController::class, 'index'])->name("prices");
