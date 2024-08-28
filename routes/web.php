<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/about', function () {
    // return 'About Laravel';
    // return [
    //     'name' => 'Laravel',
    // ]; // json

    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});