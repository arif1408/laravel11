<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});
 
Route::get('/about', function () {
    return view('about');
});
Route::get('/blog', function () {
    return view('blog',['nama'=>'imam maarif']);
});
Route::get('/contact', function () {
    return view('contact');
});