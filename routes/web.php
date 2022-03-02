<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home');
});

Route::get('/link', function () {
    $data = [
        'link' => 'www.mondialxoo.it'
    ];
    return view('link', $data);})->name('link');
