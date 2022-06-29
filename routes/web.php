<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ConfirmController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ManageController;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;
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




Route::get('/', [HomeController::class,'landing']) -> name('landing');
Route::get('/home', [HomeController::class,'landing']) -> name('landing');
Route::get('/appointment', [HomeController::class,'appointment']) -> name('appointment');
Route::get('/contactus', [HomeController::class,'contactus']) -> name('contactus');
Route::get('/login', [HomeController::class,'Login']) -> name('login');
Route::get('/register', [HomeController::class,'register']) -> name('register');

/* ADMIN */
Route::get('/admin', [AdminController::class,'index']) -> name('admin.index');

/* PENDING APPOINTMENTS */
Route::get('admin/appointment', [AppointmentController::class,'index']) -> name('pending.index');
Route::post('admin/appointment/store', [AppointmentController::class,'store']) -> name('pending.store');
Route::delete('admin/appointment/delete/{id}', [AppointmentController::class,'destroy']) -> name('pending.destroy');

/* CONFIRMS APPOINTMENT */
Route::get('admin/confirm', [ConfirmController::class,'index']) -> name('confirm.index');
Route::get('admin/appointment/confirm/{id}', [ConfirmController::class,'store']) -> name('confirm.store');


/* CONTACT US */
Route::get('admin/contact', [ContactController::class,'index']) -> name('contact.index');
Route::post('admin/Contact', [ContactController::class,'store']) -> name('contact.store');
Route::delete('admin/contact', [ContactController::class,'destroy']) -> name('contact.destroy');

/* Route::get('/send-email', [MailController::class,'sendEmail']) ->name('') */
/* Route::get('/send-email',[MailController::class,'sendEmail']); */

/* MANAGE */
Route::get('admin/manage', [ManageController::class,'index']) -> name('manage.index');
Route::get('admin/manage/update/{id}', [ManageController::class,'update']) -> name('manage.update');




