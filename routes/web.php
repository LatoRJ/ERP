<?php

use Illuminate\Support\Facades\Route;
    
// Login Page
Route::get('/login', function () {
    return view('login');
})->name('login');

// Sign Up
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

// Route for the homepage
Route::get('/home', function () {
    return view('home');
})->name('home');
