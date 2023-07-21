<?php

use App\Http\Controllers\Api\V1\UserProfileController;
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

    Route::post('/login-with-username-password', [LoginController::class, 'loginWithUsernamePassword'])->name('login.with.username.password.api');
    Route::post('/login-with-mobile-number', [LoginController::class, 'loginWithMobileNumber'])->name('login.with.mobile.number.api');
    Route::post('/login-with-email-address', [LoginController::class, 'loginWithEmailAddress'])->name('login.with.email.address.api');
    Route::post('/resend-otp', [LoginController::class, 'resendOTP'])->name('resend.otp.api');
    Route::post('/verify-otp', [LoginController::class, 'verifyOTP'])->name('verify.otp.api');


    Route::middleware(['auth:api'])->group(function () {
        Route::get('/profile', [UserProfileController::class, 'getUserDeatils'])->name('get.profile.api');
        Route::post('/profile', [UserProfileController::class, 'updateUserDeatils'])->name('update.profile.api');
        Route::post('/profile/change-password', [UserProfileController::class, 'changePassword'])->name('update.profile.change.password.api');
    });

});
