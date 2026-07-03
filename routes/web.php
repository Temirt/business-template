<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;

Route::get('/', HomeController::class)->name('home');
Route::post('/contact', ContactController::class)->name('contact.submit');
