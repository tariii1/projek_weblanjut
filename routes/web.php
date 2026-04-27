<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\DonasiController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/Profile', [ProfileController::class, 'Profile']);
Route::get('/Kontak', [KontakController::class, 'Kontak']);
Route::get('/Donasi', [DonasiController::class, 'Donasi']);



