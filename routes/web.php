<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('product');
});
Route::get('/how-its-made', function () {
    return view('how-its-made');
});
Route::get('/our-story', function () {
    return view('our-story');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('auth.login');
});
