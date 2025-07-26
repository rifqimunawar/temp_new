<?php

use Illuminate\Support\Facades\Route;
use Modules\User\Http\Controllers\UserController;

Route::prefix('users')->middleware('auth')->group(function () {

  Route::get('/log', [UserController::class, 'log'])->name('log.index');

  Route::get('/data', [UserController::class, 'index'])->name('user.index');
  Route::get('/data/create', [UserController::class, 'create'])->name('user.create');
  Route::get('/data/{id}', [UserController::class, 'edit'])->name('user.edit');
  Route::post('/data/store', [UserController::class, 'store'])->name('user.store');
  Route::delete('/data/{id}/del', [UserController::class, 'destroy'])->name('user.destroy');
});
