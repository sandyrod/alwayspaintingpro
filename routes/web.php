<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/transformamos', [HomeController::class, 'transformamos'])->name('transformamos');
Route::get('/arte', [HomeController::class, 'arte'])->name('arte');
Route::get('/profesional', [HomeController::class, 'profesional'])->name('profesional');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');