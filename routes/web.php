<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/transformamos', [HomeController::class, 'transformamos'])->name('transformamos');
Route::get('/arte', [HomeController::class, 'arte'])->name('arte');
Route::get('/profesional', [HomeController::class, 'profesional'])->name('profesional');
Route::get('/nosotros', [HomeController::class, 'nosotros'])->name('nosotros');
Route::get('/drywall', [HomeController::class, 'drywall'])->name('drywall');
Route::get('/pintura', [HomeController::class, 'pintura'])->name('pintura');
Route::get('/lavado', [HomeController::class, 'lavado'])->name('lavado');
Route::get('/texturizado', [HomeController::class, 'texturizado'])->name('texturizado');
Route::get('/duchas', [HomeController::class, 'duchas'])->name('duchas');
Route::get('/senalizacion', [HomeController::class, 'senalizacion'])->name('senalizacion');
Route::get('/wsp', [HomeController::class, 'wsp'])->name('wsp');
Route::get('/vinculacion', [HomeController::class, 'vinculacion'])->name('vinculacion');
Route::get('/email', [HomeController::class, 'email'])->name('email');

