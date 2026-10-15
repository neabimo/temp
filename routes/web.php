<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return redirect('/tasks');// Redireciona a raiz para a lista de tarefas
});

// Esta única linha cria 7 rotas diferentes para o CRUD de tarefas!
Route::resource('tasks', TaskController::class);