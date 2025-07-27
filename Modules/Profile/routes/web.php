<?php

use Illuminate\Support\Facades\Route;
use Modules\Profile\Http\Controllers\ProfileController;

Route::prefix('profile')->middleware('auth')->group(function () {

  Route::get('/', [ProfileController::class, 'index'])->name('profile.index');
  Route::get('/create', [ProfileController::class, 'create'])->name('profile.create');
  Route::get('/{id}', [ProfileController::class, 'edit'])->name('profile.edit');
  Route::post('/store', [ProfileController::class, 'store'])->name('profile.store');
  Route::delete('/{id}/del', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
