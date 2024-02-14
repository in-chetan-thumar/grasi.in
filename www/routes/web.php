<?php

use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\GraphicController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LocatetController;
use App\Http\Controllers\frontend\OurStoryController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// home page route
Route::get('/',[HomeController::class,'index'])->name('frontend.home');
//Our Story page route
Route::get('our_story',[OurStoryController::class,'index'])->name('frontend.our_story');
//contact page route
//Route::get('contact',[contactController::class,'index'])->name('frontend.contact');
Route::resource('contact',ContactController::class);
//locate page route
Route::get('locate',[LocatetController::class,'index'])->name('frontend.locate');
Route::get('/state/{state}', [LocatetController::class,'getCities'])->name('locate.city');
Route::get('/locate/state', [LocatetController::class,'getFilteredData'])->name('locate.getData');
Route::post('locate', [LocatetController::class,'store'])->name('locate.send-email');

//graphic page route
// Route::resource('graphic', graphicController::class);
Route::get('graphic', [GraphicController::class,'index'])->name('frontend.graphic');
Route::post('graphic', [GraphicController::class,'store'])->name('graphic.send-email');
Route::get('/grasi-llumar-enquiry',[\App\Http\Controllers\frontend\EnquiryLandingController::class,'index'])->name('enquiry.index');
Route::post('/grasi-llumar-enquiry/store',[\App\Http\Controllers\frontend\EnquiryLandingController::class,'store'])->name('enquiry.store');
Route::get('/grasi-llumar-enquiry/thank-you',[\App\Http\Controllers\frontend\EnquiryLandingController::class,'thankYou'])->name('enquiry.thank.you');

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


