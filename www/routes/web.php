<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\NewsLetterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\WholesaleController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FlavorController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\MetaTagController;

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

    //news controller
    Route::resource("news-list", \App\Http\Controllers\Admin\NewsController::class);


});

Route::get('/form-custom-field',function (){
 return view('custom-form-field');
});
// frontend site route
Route::get('/', [HomeController::class,'index'])->name('frontend.home');
Route::post('/authorizeStateDistributor-mail', [HomeController::class,'authorizeStateDistributor'])->name('frontend.home.authorizeStateDistributor');
// Route::get('/',[]);
Route::get('/product', [HomeController::class,'product'])->name('frontend.product');
Route::get('zomo-faqs', [HomeController::class,'faqs'])->name('frontend.faqs');
Route::get('/contact', [HomeController::class,'contact'])->name('frontend.contact');
Route::get('zomo-series', [HomeController::class,'series'])->name('frontend.series');

Route::post('store-contact-detail', [HomeController::class,'storeContact'])->name('frontend.storeContact');
Route::get('/wholesale', [HomeController::class,'wholesale'])->name('frontend.wholesale');
Route::post('store-wholesale',[HomeController::class,'storeWholesale'])->name('frontend.storeWholesale');
Route::get('/aboutus', [HomeController::class,'aboutus'])->name('frontend.aboutus');
Route::get('authorized-wholesalers', [HomeController::class,'wholesalers'])->name('frontend.authorized.wholesalers');
Route::get('zomo-quality', [HomeController::class,'quality'])->name('frontend.quality');
// product
Route::get('/zomo-paper', [ProductController::class,'zomoPaper'])->name('frontend.zomopaper');
Route::get('zomo-charcol',[ProductController::class,'zomoCharcol'])->name('frontend.charcol');
Route::get('/aluminum-foil', [ProductController::class,'aluminumFoil'])->name('frontend.aluminumFoil');
Route::get('shisha-hose', [ProductController::class,'shishaHose'])->name('frontend.shishaHose');
Route::get('zomo-hookah', [ProductController::class,'zomohookah'])->name('frontend.zomo.hookah');
Route::post('/zomo-newsLetter', [NewsLetterController ::class,'create'])->name('frontend.newsLetter');
Route::post('/zomo-EmailNewsLetter',[NewsLetterController::class,'store'])->name('frontend.EmailNews.store');//this is used for home page

//

//
Route::get('/zomo-news', [\App\Http\Controllers\Frontend\NewsController::class, 'index'])->name('frontend.news');
Route::get('/zomo-flavors/{id}', [\App\Http\Controllers\Frontend\FlavorsController::class, 'index'])->name('frontend.flavors');

// backend site route
//
Route::get('/news/{slug?}',[NewsController::class,'show'])->name("backend.news");
Route::get('/newsmanagement/status/{id}', [App\Http\Controllers\Admin\NewsController::class, 'changeStatus'])->name('newsmanagements.status');
Route::get('zomo-product', [ProductController::class,'index'])->name('backend.product');
Route::get('/create', [ProductController::class,'create'])->name('backend.product.create');
Route::get('/thank-you', [HomeController::class, 'thankYou'])->name('thank.you');
Route::get('/zomo-contact', [ContactController::class,'index'])->name('backend.product.contact');
Route::delete('/zomo-contact/{id}', [ContactController::class, 'destroy'])->name('backend.product.contact.destroy');
Route::get('/update-contact-edit/{id}', [ContactController::class,'edit'])->name('backend.product.edit');
Route::get('/zomo-wholesale', [WholesaleController::class,'index'])->name('backend.product.wholesale');
Route::get('/update-wholesale-edit/{id}', [WholesaleController::class,'edit'])->name('backend.product.wholesale.edit');
Route::get('/export-wholesale-data', [WholesaleController::class, 'export'])->name('backend.product.wholesale.export');
Route::get('/export-contact-data', [ContactController::class, 'export'])->name('backend.product.export');
Route::get('/zomo-category', [CategoryController::class,'index'])->name('backend.product.flavors.category');
Route::get('/zomo-category-create', [CategoryController::class,'create'])->name('backend.product.flavors.category.create');
Route::get('/zomo-category-edit/{id}', [CategoryController::class,'create'])->name('backend.product.flavors.category.edit');
Route::post('/zomo-category-update', [CategoryController::class,'store'])->name('backend.product.flavors.category.update');
Route::post('/zomo-category-store', [CategoryController::class,'store'])->name('backend.product.flavors.category.store');
Route::get('/zomo-category-delete/{id}', [CategoryController::class,'delete'])->name('backend.product.flavors.category.delete');

Route::get('/zomo-flavors', [FlavorController::class,'index'])->name('backend.product.flavors');
Route::get('/flovermanagements/status/{slug}', [App\Http\Controllers\Admin\FlavorController::class, 'changeStatus'])->name('flovermanagements.status');
Route::get('/zomo-flavors-create', [FlavorController::class,'create'])->name('backend.product.flavors.create');
Route::post('/zomo-flavors-update', [FlavorController::class,'update'])->name('backend.product.flavors.update');
Route::post('/zomo-flavors-store', [FlavorController::class,'store'])->name('backend.product.flavors.store');
Route::get('/zomo-flavors-edit/{id}', [FlavorController::class,'create'])->name('backend.product.flavors.edit');
Route::post('/zomo-flavors-upload', [FlavorController::class,'upload'])->name('backend.product.flavors.upload');
Route::get('/zomo-flavors-delete/{id}', [FlavorController::class,'delete'])->name('backend.product.flavors.delete');
Route::get('flavors/{id}', [FlavorController::class,'flavorcategory'])->name('frontend.flavors.classicLine');
Route::get('flavors/product/{data}', [FlavorController::class,'productDetail'])->name('frontend.flavors.product.detail');
Route::post('/removeImage', [FlavorController::class,'removeImage'])->name('backend.product.flavors.removeImage');
Route::get('/metaSource', [MetaTagController::class,'index'])->name('backend.metaDetail');
Route::get('/meta-create', [MetaTagController::class,'create'])->name('backend.metaDetail.create');
Route::get('/meta-edit/{id}', [MetaTagController::class,'edit'])->name('backend.metaDetail.edit');
Route::post('/meta-store', [MetaTagController::class,'store'])->name('backend.metaDetail.store');

Route::post('/meta-update', [MetaTagController::class,'update'])->name('backend.metaDetail.update');

Route::get('/meta-delete/{id}', [MetaTagController::class,'destroy'])->name('backend.metaDetail.delete');

Route::resource('/newsletter',\App\Http\Controllers\Admin\NewsletterController::class);
Route::get('/export-newsletter', [\App\Http\Controllers\Admin\NewsletterController::class, 'export'])->name('newsletter.export');


Route::resource('/state-distributor',\App\Http\Controllers\Admin\AuthorizeStateDistributorController::class);
Route::get('/export-state-distributor', [\App\Http\Controllers\Admin\AuthorizeStateDistributorController::class, 'export'])->name('state.distributor.export');
// backend.metaDetail
//


// frontend.postwholesale
//
