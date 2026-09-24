<?php

use Illuminate\Support\Facades\Route;

use App\Livewire\Oraculo;
 
use App\Livewire\Counter;

use App\Livewire\Lablivewire;

use App\Livewire\Dashboard;

Route::get('/lablw', Lablivewire::class);
Route::get('/counter', Counter::class);
Route::get('/conselhos', Oraculo::class);
Route::get('/bank', Dashboard::class);
Route::get('/site', function () {
    return view('site');
});
Route::get('/produto', function () {
    return view('produto');
});
