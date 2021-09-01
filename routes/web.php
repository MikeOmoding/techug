<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\VolunteerController;
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

Route::get('/about', [SiteController::class, 'about'])->name('about');
Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
Route::get('/contact', [SiteController::class, 'contact'])->name('contact');
Route::get('/gallery', [SiteController::class, 'gallery'])->name('gallery');
Route::get('/services', [SiteController::class, 'services'])->name('services');
Route::get('/internship', [SiteController::class, 'internship'])->name('internship');
Route::get('/volunteer', [SiteController::class, 'volunteer'])->name('volunteer');
Route::get('/donate', [SiteController::class, 'donate'])->name('donate');
Route::resource('/contact-message', ContactController::class);
Route::resource('/volunteering', VolunteerController::class);

// paypal routes
Route::get('/paypal', [PaypalController::class, 'paypal']);
Route::get('/token', [PaypalController::class, 'get_paypal_token']);
Route::get('/paypal/checkout', [PaypalController::class, 'checkout']);
Route::get('/paypal/cancel', [PaypalController::class, 'cancel']);
Route::get('/thanks', [PaypalController::class, 'thanks']);

//Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
