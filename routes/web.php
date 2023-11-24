<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get('/', [FrontendController::class, "home"])->name('/home');
Route::get('/home', [FrontendController::class, "home"])->name('/home');
Route::get('/about', [FrontendController::class, "about"])->name('about');
Route::get('/projects', [FrontendController::class, "projects"])->name('projects');
Route::get('/contact', [FrontendController::class, 'contact'])->name('contact');

