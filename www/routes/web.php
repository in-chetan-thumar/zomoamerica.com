<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Admin\ProductController;
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

Auth::routes();

$middleware = ['auth','throttle:120,1'];

if(config('constants.MOBILE_OTP_LOGIN') || config('constants.EMAIL_OTP_LOGIN')){
    array_push($middleware,'twofactor');
}

Route::group(['middleware' => $middleware], function () {
    Route::get('/admin', [App\Http\Controllers\Admin\DashboardController::class, 'root'])->name('root');

    Route::get('verify/resend', [\App\Http\Controllers\Auth\TwoFactorController::class, 'resend'])->name('verify.resend');
    Route::resource('verify', \App\Http\Controllers\Auth\TwoFactorController::class)->only(['index', 'store']);


    //Update User Details
    Route::post('/update-profile/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updateProfile'])->name('updateProfile');
    Route::post('/update-password/{id}', [App\Http\Controllers\Admin\DashboardController::class, 'updatePassword'])->name('updatePassword');

    // Role Controller
    Route::resource('roles', \App\Http\Controllers\Admin\RoleController::class);
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\RoleController::class, 'changeStatus'])->name('role.status');

    // Permission Controller
    Route::resource('permission', \App\Http\Controllers\Admin\PermissionController::class);
    Route::get('/status/{id}', [\App\Http\Controllers\Admin\PermissionController::class, 'changeStatus'])->name('permission.status');

    // User Controller Route
    Route::resource('usermanagements', \App\Http\Controllers\Admin\UserController::class);
    Route::get('/usermanagement/status/{id}', [\App\Http\Controllers\Admin\UserController::class, 'changeStatus'])->name('usermanagements.status');

    // User Profile Controller
    Route::resource('profiles', \App\Http\Controllers\Admin\UserProfileController::class);
    Route::get('/profile', [\App\Http\Controllers\Admin\UserProfileController::class, 'index'])->name('profile.index');
    Route::post('/change/password', [\App\Http\Controllers\Admin\UserProfileController::class, 'changePassword'])->name('change.password');

    // Email Template Controller
    Route::get('email-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'emailIndex'])->name('email.templates');
    Route::post('email-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'emailStore'])->name('email.templates.store');
    Route::get('sms-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'SMSIndex'])->name('sms.templates');
    Route::post('sms-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'SMSStore'])->name('sms.templates.store');
    Route::get('whatsapp-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'WhatsAppIndex'])->name('whatsapp.templates');
    Route::post('whatsapp-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'WhatsAppStore'])->name('whatsapp.templates.store');

});

Route::get('/form-custom-field',function (){
 return view('custom-form-field');
});
// frontend site route 
Route::get('/', [HomeController::class,'index'])->name('frontend.home');
Route::get('/product', [HomeController::class,'product'])->name('frontend.product');
Route::get('zomo-news', [HomeController::class,'news'])->name('frontend.news');
Route::get('zomo-faqs', [HomeController::class,'faqs'])->name('frontend.faqs');
Route::get('/contact', [HomeController::class,'contact'])->name('frontend.contact');
Route::get('zomo-series', [HomeController::class,'series'])->name('frontend.series');
Route::post('store-contact-detail', [HomeController::class,'storeContact'])->name('frontend.storeContact');
Route::get('/wholesale', [HomeController::class,'wholesale'])->name('frontend.wholesale');
Route::post('store-wholesale',[HomeController::class,'storeWholesale'])->name('frontend.storeWholesale');
Route::get('/aboutus', [HomeController::class,'aboutus'])->name('frontend.aboutus');
Route::get('authorized-wholesalers', [HomeController::class,'wholesalers'])->name('frontend.authorized.wholesalers');
Route::get('zomo-quality', [HomeController::class,'quality'])->name('frontend.quality');
// 

// backend site route
// 
Route::get('zomo-product', [ProductController::class,'index'])->name('backend.product');

Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank.you');


// frontend.postwholesale
// 