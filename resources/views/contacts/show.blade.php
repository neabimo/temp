@extends('layouts.appcontact')

@section('content')
<div class="bg-white rounded-lg shadow-md p-6">
    <div class="mb-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-2">{{ $contact->name }}</h2>
    </div>

    <div class="space-y-4 mb-6">
        <div class="border-b pb-3">
            <p class="text-sm text-gray-500 mb-1">Email</p>
            <p class="text-gray-800">📧 {{ $contact->email }}</p>
        </div>

        <div class="border-b pb-3">
            <p class="text-sm text-gray-500 mb-1">Telefone</p>
            <p class="text-gray-800">📞 {{ $contact->phone }}</p>
        </div>

        @if($contact->notes)
        <div class="border-b pb-3">
            <p class="text-sm text-gray-500 mb-1">Notas</p>
            <p class="text-gray-700">{{ $contact->notes }}</p>
        </div>
        @endif

        <div>
            <p class="text-xs text-gray-400">
                Criado em {{ $contact->created_at->format('d/m/Y H:i') }}
            </p>
        </div>
    </div>

    <div class="flex gap-2">
        <a href="{{ route('contacts.edit', $contact) }}" 
           class="flex-1 bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg text-center font-semibold"
           wire:navigate>
            Editar
        </a>
        <a href="{{ route('contacts.index') }}" 
           class="flex-1 bg-gray-200 hover:bg-gray-300 text-gray-700 py-3 rounded-lg text-center font-semibold"
           wire:navigate>
            Voltar
        </a>
    </div>
</div>
@endsection