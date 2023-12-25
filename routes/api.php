<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\Dashboard\SettingsController;
use App\Http\Controllers\Api\Dashboard\ConfirmationsController;
use App\Http\Controllers\Api\Process\RunController;
use App\Http\Controllers\Api\Reface\RefaceImagesController;
use App\Http\Controllers\Api\Process\ProcessImagesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix("auth")->name("auth.")->group(function() {
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('register', [RegisterController::class, 'register'])->name('register');

    Route::middleware('auth:sanctum')->group(function() {
        Route::get('user', [AuthController::class, 'user'])->name('user');
        Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    });
});

// Это пойдет в бакенд, через эту точку буду загружать напрямую в бакенд пикчи. Не защищено от ддос, но зато можно быстро проверить как MVP
Route::prefix("process")->group(function() {
    Route::post('/images/store', [ProcessImagesController::class, 'store'])->name('process-images-store');
    Route::get('/images', [ProcessImagesController::class, 'index'])->name('process-images');
    Route::get('/video', [RunController::class, 'index'])->name("process-run-controller");

});
