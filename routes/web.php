<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChirpController;

Route::post('/chirps', [ChirpController::class, 'store']);
Route::get('/bootcamp', [ChirpController::class, 'index']);



