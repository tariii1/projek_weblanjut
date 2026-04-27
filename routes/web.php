<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Profile', [ProfileController::class, 'Profile']);
Route::get('/Kontak', [KontakController::class, 'Kontak']);


