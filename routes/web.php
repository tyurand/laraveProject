<?php

use App\Http\Controllers\BasicController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BasicController::class, 'home'])->name('home');
Route::get('/about', [BasicController::class, 'about'] )->name('about');
Route::get('/contact', [BasicController::class, 'contact'])->name('contact');
Route::post('/contact', [BasicController::class, 'submit'])->name('contact.post');
