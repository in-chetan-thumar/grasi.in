<?php

use App\Http\Controllers\Api\V1\LoginController;
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

Route::prefix('V1')->middleware(['throttle:60,1'])->group(function () {

    Route::post('/login', [LoginController::class, 'login'])->name('login.api');
    Route::post('/login/resend-otp', [LoginController::class, 'resendOTP'])->name('login.resend.otp.api');
    Route::post('/login/verify-otp', [LoginController::class, 'verifyOTP'])->name('login.verify.otp.api');

});
