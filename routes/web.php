<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultationController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Admin\ConsultationController as AdminConsultationController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\TestimonialController as AdminTestimonialController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/industries', [PageController::class, 'industries'])->name('industries');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/book-consultation', [ConsultationController::class, 'index'])->name('book');
Route::post('/book-consultation', [ConsultationController::class, 'store']);

Route::resource('blog', BlogController::class);

// Authentication routes
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

// Admin routes
Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    
    Route::resource('blogs', AdminBlogController::class);
    Route::resource('consultations', AdminConsultationController::class, ['only' => ['index', 'show', 'destroy']]);
    Route::resource('contacts', AdminContactController::class, ['only' => ['index', 'show', 'destroy']]);
    Route::resource('testimonials', AdminTestimonialController::class);
});

