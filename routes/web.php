<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ConsultationController;

// Home page
Route::get('/', [HomeController::class, 'index'])->name('home');

// About Us page
Route::get('/about-us', [HomeController::class, 'about'])->name('about');

// Contact Us page
Route::get('/contact-us', [ContactController::class, 'showForm'])->name('contact.show');
Route::post('/contact-us', [ContactController::class, 'submitForm'])->name('contact.submit');

// Book a Consultation page
Route::get('/book-consultation', [ConsultationController::class, 'showForm'])->name('consultation.show');
Route::post('/book-consultation', [ConsultationController::class, 'submitForm'])->name('consultation.submit');
