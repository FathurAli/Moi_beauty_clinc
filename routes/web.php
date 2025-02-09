<?php

use Illuminate\Support\Facades\Route;

    Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/portfolio-1', function () {
    return view('portfolio-1');
})->name('portfolio-1');

Route::get('/single-project', function () {
    return view('single-project');
})->name('single-project');

Route::get('/single-project-2', function () {
    return view('single-project-2');
})->name('single-project-2');

Route::get('/blog-1', function () {
    return view('blog-1');
})->name('blog-1');

Route::get('/single-post', function () {
    return view('single-post');
})->name('single-post');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');