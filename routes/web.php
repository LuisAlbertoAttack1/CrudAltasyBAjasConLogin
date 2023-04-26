<?php

use App\Http\Controllers\AltasyBajas;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AuthController::class, 'login'])->name('auth-login');
Route::post('logear', [AuthController::class,'logear'])->name('logear');
Route::get('/usuarioNuevo', [AuthController::class, 'agregarNuevo']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



Route::get('/inicio', [AltasyBajas::class, 'index'])->name('inicio');

Route::get('/AltasYBajas', [AltasyBajas::class, 'AltasYBajas']);

Route::get('/create', [AltasyBajas::class, 'create']);
Route::post('/store', [AltasyBajas::class, 'store']);

