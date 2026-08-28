<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CourseController;

// Clean controller routes - zero closures
Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');

// Resource routes with standard web middleware group applied
Route::middleware(['web'])->group(function () {
    Route::resource('courses', CourseController::class);
});