<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SSO\SSOController;

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout-session', [App\Http\Controllers\HomeController::class, 'getDifferentAccount']);
Route::get('/dashboard/clients', [App\Http\Controllers\HomeController::class, 'clients'])->name('clients');
// Route::get('/logout-session/{callback-url}/{user-email}', [App\Http\Controllers\HomeController::class, 'getDifferentAccount']);
// Route::post('/different-account', [App\Http\Controllers\HomeController::class, 'getDifferentAccount'])->name('different-account');
// Route::post('/logout_session', [App\Http\Controllers\HomeController::class, 'logout_session'])->name('logout_session');