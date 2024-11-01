<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;

Route::get('/', [AdsController::class, 'index']);
Route::get('/create', [AdsController::class, 'create']);
Route::get('/ad/{id}', [AdsController::class, 'show']);
Route::post('/create', [AdsController::class, 'store'])->name('store');
