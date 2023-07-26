<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\Dashboard\SettingsController;
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

Route::middleware(["auth:sanctum"])->prefix("dashboard")->group(function() {

    Route::prefix("settings")->group(function() {
        Route::post("", [SettingsController::class, 'index'])->name("dashboard-settings");
        Route::get("{id}/edit", [SettingsController::class, 'edit'])->name("dashboard-settings-edit");
        Route::post("{id}/update", [SettingsController::class, 'update'])->name("dashboard-settings-update");
        Route::post("{id}/confirm", [SettingsController::class, 'confirm'])->name("dashboard-settings-confirm");
    });

});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
