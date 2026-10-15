<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // Em TaskController.php
    public function index()
    {
        // Buscar todas as tarefas da base de dados, ordenadas pela mais recente
        $tasks = Task::orderBy('created_at', 'desc')->get();
    
        return view('tasks.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     */
    // Em TaskController.php
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Armazena uma nova tarefa na base de dados.
     */
    public function store(Request $request)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Criar uma nova tarefa na base de dados
        Task::create([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'] ?? null,
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarefa criada com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Exibe o formulário para editar a tarefa especificada.
     */
    public function edit(Task $task)
    {
        // O Laravel automaticamente injeta o modelo Task baseado no ID da rota
        return view('tasks.edit')->with('task', $task);
    }

    /**
     * Atualiza a tarefa especificada na base de dados.
     */
    public function update(Request $request, Task $task)
    {
        // Validar os dados do formulário
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string|max:1000',
        ]);

        // Atualizar a tarefa na base de dados
        $task->update([
            'title' => $validatedData['title'],
            'description' => $validatedData['description'],
        ]);

        return redirect()->route('tasks.index')->with('success', 'Tarefa atualizada com sucesso!');
    }

    /**
     * Remove a tarefa especificada da base de dados.
     */
    public function destroy(Task $task)
    {
        // Eliminar a tarefa da base de dados
        $task->delete();

        return redirect()->route('tasks.index')->with('success', 'Tarefa eliminada com sucesso!');
    }
}
