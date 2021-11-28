<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\EmailVerificationController;
use App\Http\Controllers\Api\PatientController;

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

// Resend link to verify email
Route::post('/evr', [EmailVerificationController::class, 'resend'])->name('verification.send');

Route::post('/register', [AuthController::class, 'store']);
Route::post('/login', [AuthController::class, 'login']);
Route::group(['middleware' => ['verified']], function () {
    Route::group(['middleware' => ['auth:sanctum']], function () {

        // Email verification notice
        Route::post('/logout', [AuthController::class, 'logout']);
        Route::group(['prefix' => 'patients', 'middleware' => ['auth.dentist']], function () {
            Route::resource('/', PatientController::class);
            Route::get('/search/{name}', [PatientController::class, 'search']);
        });

        Route::group(['prefix' => 'profile'], function () {
            Route::get('/', [AuthController::class, 'show']);
            Route::put('/', [AuthController::class, 'update']);
        });

        Route::group(['prefix' => 'dentist'], function () {
            Route::group(['middleware' => 'auth.admin'], function () {
                Route::get('/', [AuthController::class, 'show']);
                Route::put('/', [AuthController::class, 'update']);
            });
        });

        Route::post('/logout', [AuthController::class, 'logout']);
    });
});
