<?php

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
    return view('home.home');
});
Route::get('home', function () {
    return view('home.home');
});
Route::get('header', function () {
    return view('partials.header');
});
Route::get('footer', function () {
    return view('partials.footer');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('Clients', function () {
    return view('Clients');
});
Route::get('team', function () {
    return view('team');
});

Route::get('askquotes', function () {
    return view('askquotes');
});

Route::get('services', function () {
    return view('services');
});
Route::get('photo', function () {
    return view('photo');
});

Route::get('videos', function () {
    return view('videos');
});
Route::get('infra', function () {
    return view('infra');
});
Route::get('Whyus', function () {
    return view('Whyus');
});