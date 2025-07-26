<?php

use Illuminate\Support\Facades\Route;
use Modules\Auth\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/auth/{id}', [AuthController::class, 'edit'])->name('auth.edit');
Route::put('/auth/{id}', [AuthController::class, 'update'])->name('auth.update');
Route::delete('/auth/{id}/del', [AuthController::class, 'destroy'])->name('auth.destroy');
