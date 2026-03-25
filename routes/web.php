<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});


Route::get('/detail', function () {
    return view('detail');
});

Route::get('/post-detail', function () {
    return view('post-detail');
});

Route::get('/post', function () {
    return view('post');
});

// Route::get('/post/{id}', function () {
//     return view('post/{id}');
// });

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/account', function () {
    return view('account');
});

