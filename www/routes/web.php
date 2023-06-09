<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();
//Language Translation
Route::get('index/{locale}', [App\Http\Controllers\HomeController::class, 'lang']);

Route::get('/', [App\Http\Controllers\HomeController::class, 'root'])->name('root');

//Update User Details
Route::post('/update-profile/{id}', [App\Http\Controllers\HomeController::class, 'updateProfile'])->name('updateProfile');
Route::post('/update-password/{id}', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('updatePassword');

// Email Template Controller
Route::get('email-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'emailIndex'])->name('email.templates');
Route::post('email-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'emailStore'])->name('email.templates.store');
Route::get('sms-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'SMSIndex'])->name('sms.templates');
Route::post('sms-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'SMSStore'])->name('sms.templates.store');
Route::get('whatsapp-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'WhatsAppIndex'])->name('whatsapp.templates');
Route::post('whatsapp-templates', [App\Http\Controllers\Admin\MessageTemplateController::class,'WhatsAppStore'])->name('whatsapp.templates.store');


