<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::view('/', 'welcome')->name('welcome');
    Route::view('/login', 'login')->name('login');
    Route::view('/register', 'register')->name('register');

    Route::controller(AuthController::class)->group(function () {
        Route::post('/login', 'login')->name('auth.login');
        Route::post('/register', 'register')->name('auth.register');
    });
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('auth.logout');

    Route::view('/dashboard', 'applicant.dashboard')->name('applicant.dashboard');
    Route::view('/admin', 'admin.dashboard')->name('admin.dashboard');

    Route::controller(ApplicationController::class)
        ->name('application.')
        ->group(function () {
            Route::get('/application', 'view')->name('index');
            Route::post('/application/payment', 'payment')->name('payment');
            Route::post('/application/personal', 'personal')->name('personal');
            Route::post('/application/academic', 'academic')->name('academic');
            Route::post('/application/courses', 'courses')->name('courses');
            Route::post('/application/declaration', 'declaration')->name('declaration');
            Route::post('/application/status', 'status')->name('status');
        });
});
