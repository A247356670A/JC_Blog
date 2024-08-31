<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home-page');
});
Route::get('/home-page', function () {
    return view('home-page');
});
Route::get('/posts', function () {
    return view('fashion');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/post/{post}', [PostController::class, 'viewSinglePost']);
