<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::resource('contacts', ContactController::class)->middleware("auth");

Route::get('/contatos', function () {
    return redirect()->route('contacts.index');
});