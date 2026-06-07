<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);
Route::get('/list', [ListController::class, 'index']);
Route::get('/order', [OrderController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);

Route::get('/order/{slug}', [OrderController::class, 'show']);

