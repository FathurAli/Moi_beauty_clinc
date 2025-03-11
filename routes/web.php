<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modules\Service\ServiceController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/doctor', function () {
    return view('doctor.index');
})->name('doctor');

Route::get('/treatment', function () {
    return view('treatment.index');
})->name('treatment');

Route::get('/contact', function () {
    return view('contact.index');
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