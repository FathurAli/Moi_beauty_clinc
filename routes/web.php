<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modules\Service\ServiceController;

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

Route::prefix('services')->group(function () {
    Route::get('/data', [ServiceController::class, 'index']);
    Route::post('/store', [ServiceController::class, 'store'])->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
    Route::patch('/update/{id}', [ServiceController::class, 'update'])->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
    Route::get('/show/{id}', [ServiceController::class, 'show']);
    Route::delete('/delete/{id}', [ServiceController::class, 'destroy'])->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
    Route::get('/restore/{id}', [ServiceController::class, 'restore']);
    Route::delete('/deletepermanent/{id}', [ServiceController::class, 'forceDeletes'])->withoutMiddleware([\Illuminate\Foundation\Http\Middleware\VerifyCsrfToken::class]);
});