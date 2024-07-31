<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/users', [HomeController::class, 'users']);
Route::post('/usersByState', [HomeController::class, 'users']);
