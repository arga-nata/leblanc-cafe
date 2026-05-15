<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);
Route::get('/list', [ListController::class, 'index']); // Ganti ini
Route::get('/about', [AboutController::class, 'index']);
