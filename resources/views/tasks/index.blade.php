@extends('layouts.app')

@section('content')
    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
            {{ session('success') }}
        </div>
    @endif

    <h1 class="text-2xl font-bold text-gray-800 mb-4">Minhas Tarefas</h1>

    <a href="{{ route('tasks.create') }}" 
       class="inline-block bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded mb-4 transition duration-200">
        Nova Tarefa
    </a>

    @if ($tasks->count() > 0)
        <ul class="bg-white shadow-sm rounded-lg divide-y divide-gray-200">
            @foreach ($tasks as $task)
                <li class="flex justify-between items-center p-4 hover:bg-gray-50 transition duration-150">
                    <div>
                        <span class="text-gray-800 font-medium">{{ $task->title }}</span>
                        @if ($task->description)
                            <p class="text-gray-600 text-sm mt-1">{{ $task->description }}</p>
                        @endif
                        <small class="text-gray-400">Criada em: {{ $task->created_at->format('d/m/Y H:i') }}</small>
                    </div>
                    <div class="flex space-x-2">
                        <a href="{{ route('tasks.edit', $task) }}" 
                           class="bg-yellow-500 hover:bg-yellow-600 text-white text-sm font-medium py-1 px-3 rounded transition duration-200">
                            Editar
                        </a>
                        <form action="{{ route('tasks.destroy', $task) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" 
                                    class="bg-red-500 hover:bg-red-600 text-white text-sm font-medium py-1 px-3 rounded transition duration-200"
                                    onclick="return confirm('Tem certeza que deseja eliminar esta tarefa?')">
                                Eliminar
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
    @else
        <div class="bg-gray-50 rounded-lg p-8 text-center">
            <p class="text-gray-600">Nenhuma tarefa encontrada.</p>
            <a href="{{ route('tasks.create') }}" 
               class="inline-block mt-4 bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded transition duration-200">
                Criar a primeira tarefa
            </a>
        </div>
    @endif
@endsection
