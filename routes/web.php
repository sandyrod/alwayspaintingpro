<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/transformamos', [HomeController::class, 'transformamos'])->name('transformamos');
Route::get('/arte', [HomeController::class, 'arte'])->name('arte');
Route::get('/profesional', [HomeController::class, 'profesional'])->name('profesional');