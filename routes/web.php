<?php

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

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/terms', function () {
    return view('pages.terms');
});


Route::get('/reviews', function () {
    return view('pages.reviews');
});

Route::get('/policies', function () {
    return view('pages.policies');
});

Route::get('/register', function () {
    return view('pages.register');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/samples', function () {
    return view('pages.samples');
});

Route::get('/order', function () {
    return view('pages.order');
});


