<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ReviewsController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PolicyController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\LoginController;




Route::get('/', [HomeController::class,'index'])->name('/');

Route::get('services', [ServicesController::class,'index'])->name('services');

Route::get('samples', [SampleController::class,'index'])->name('samples');

Route::get('contact', [ContactController::class,'index'])->name('contact');

Route::get('about', [AboutController::class,'index'])->name('about');

Route::get('reviews', [ReviewsController::class,'index'])->name('reviews');

Route::get('terms', [TermsController::class,'index'])->name('terms');

Route::get('register', [RegisterController::class,'index'])->name('register');


Route::get('policies', [PolicyController::class,'index'])->name('policy');

Route::get('order', [OrderController::class,'index'])->name('order');

Route::get('login', [LoginController::class,'index'])->name('login');






