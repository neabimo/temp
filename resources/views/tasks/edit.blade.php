@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto">
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Editar Tarefa</h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div>
                <label for="title" class="block text-sm font-medium text-gray-700 mb-2">
                    Título da Tarefa
                </label>
                <input type="text" 
                       class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('title') border-red-500 @enderror" 
                       id="title" 
                       name="title" 
                       value="{{ old('title', $task->title) }}" 
                       required>
                @error('title')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="description" class="block text-sm font-medium text-gray-700 mb-2">
                    Descrição (opcional)
                </label>
                <textarea class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 transition duration-200 @error('description') border-red-500 @enderror" 
                          id="description" 
                          name="description" 
                          rows="3">{{ old('description', $task->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>
            
            <div class="flex space-x-4 justify-center">
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-6 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                    Atualizar
                </button>
                <a href="{{ route('tasks.index') }}" 
                   class="bg-gray-500 hover:bg-gray-600 text-white font-medium py-2 px-6 rounded-md transition duration-200 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                    Cancelar
                </a>
            </div>
        </form>
    </div>
@endsection