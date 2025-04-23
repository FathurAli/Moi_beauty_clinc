<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Modules\Service\ServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DoctorController;
use App\Http\Middleware\AdminMiddleware;

// Halaman Utama & Publik
Route::view('/', 'index');
Route::view('/about', 'about')->name('about');
Route::view('/services', 'services')->name('services');
Route::view('/portfolio-1', 'portfolio-1')->name('portfolio-1');
Route::view('/single-project', 'single-project')->name('single-project');
Route::view('/single-project-2', 'single-project-2')->name('single-project-2');
Route::view('/blog-1', 'blog-1')->name('blog-1');
Route::view('/single-post', 'single-post')->name('single-post');
Route::view('/contact', 'contact')->name('contact');

// Autentikasi
Route::get('/login', [AuthController::class, 'loginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Middleware untuk Admin
Route::middleware([AdminMiddleware::class])->prefix('admin')->group(function () {
    Route::view('/dashboard', 'admin.dashboard')->name('admin.dashboard');
    

    // CRUD Doctors
    Route::resource('doctors', DoctorController::class);
    Route::resource('services', ServiceController::class);
    Route::get('services/data', [ServiceController::class, 'getData'])->name('admin.services.data');


    // CRUD Services
   // web.ph
    });
