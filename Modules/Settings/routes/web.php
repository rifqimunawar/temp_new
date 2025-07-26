<?php

use Illuminate\Support\Facades\Route;
use Modules\Settings\Http\Controllers\MenuController;
use Modules\Settings\Http\Controllers\RolesController;
use Modules\Settings\Http\Controllers\SettingsController;

Route::prefix('settings')->middleware('auth')->group(function () {

  Route::get('/menu', [MenuController::class, 'index'])->name('menu.index');
  Route::get('/menu/create', [MenuController::class, 'create'])->name('menu.create');
  Route::get('/menu/{id}', [MenuController::class, 'edit'])->name('menu.edit');
  Route::post('/menu/store', [MenuController::class, 'store'])->name('menu.store');
  Route::delete('/menu/{id}/del', [MenuController::class, 'destroy'])->name('menu.destroy');

  Route::get('/roles', [RolesController::class, 'index'])->name('roles.index');
  Route::get('/roles/create', [RolesController::class, 'create'])->name('roles.create');
  Route::get('/roles/{id}', [RolesController::class, 'edit'])->name('roles.edit');
  Route::post('/roles/store', [RolesController::class, 'store'])->name('roles.store');
  Route::delete('/roles/{id}/del', [RolesController::class, 'destroy'])->name('roles.destroy');

  Route::get('/roles/{id}/permission', [RolesController::class, 'permission'])->name('roles.permission');
  Route::post('/roles/{id}/permission', [RolesController::class, 'storePermission'])->name('roles.storePermission');

  Route::get('/general', [SettingsController::class, 'index'])->name('settings.index');
  Route::post('/general', [SettingsController::class, 'store'])->name('settings.store');

});
