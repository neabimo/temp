<div>
    <!-- Search Form -->
    <div class="mb-4">
        <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
            </div>
            <input type="text" 
                   wire:model.live.debounce.160ms="search"
                   placeholder="Buscar contatos..." 
                   class="w-full pl-10 pr-20 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
            
            @if($search)
            <button wire:click="clearSearch"
                    class="absolute inset-y-0 right-0 flex items-center pr-3 text-gray-400 hover:text-gray-600">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </button>
            @endif
        </div>
    </div>

    @if($search)
    <div class="mb-4 text-sm text-gray-600">
        <span class="font-medium">{{ $contacts->total() }}</span> resultado(s) para "<span class="font-medium">{{ $search }}</span>"
    </div>
    @endif

    <div class="mb-4">
        <a href="{{ route('contacts.create') }}" wire:navigate 
           class="block w-full bg-blue-600 hover:bg-blue-700 text-white text-center py-3 rounded-lg font-semibold shadow-md">
            + Novo Contato
        </a>
    </div>

    <!-- Loading Indicator -->
    <div wire:loading class="mb-4">
        <div class="bg-blue-50 border border-blue-200 text-blue-700 px-4 py-3 rounded-lg flex items-center">
            <svg class="animate-spin h-5 w-5 mr-3" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4" fill="none"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
            Buscando...
        </div>
    </div>

    <div class="space-y-3">
        @forelse($contacts as $contact)
            <div class="bg-white rounded-lg shadow-md p-4">
                <div class="flex justify-between items-start mb-2">
                    <h3 class="text-lg font-bold text-gray-800">{{ $contact->name }}</h3>
                </div>
                
                <div class="space-y-1 text-sm text-gray-600 mb-3">
                    <p>📧 {{ $contact->email }}</p>
                    <p>📞 {{ $contact->phone }}</p>
                    @if($contact->notes)
                        <p class="text-gray-500 italic">{{ Str::limit($contact->notes, 50) }}</p>
                    @endif
                </div>

                <div class="flex gap-2">
                    <a href="{{ route('contacts.show', $contact) }}" wire:navigate 
                       class="flex-1 bg-gray-100 hover:bg-gray-200 text-gray-700 py-2 rounded text-center text-sm font-medium">
                        Ver
                    </a>
                    <a href="{{ route('contacts.edit', $contact) }}" wire:navigate 
                       class="flex-1 bg-blue-100 hover:bg-blue-200 text-blue-700 py-2 rounded text-center text-sm font-medium">
                        Editar
                    </a>
                    <form action="{{ route('contacts.destroy', $contact) }}" method="POST" class="flex-1">
                        @csrf
                        @method('DELETE')
                        <button type="submit" 
                                onclick="return confirm('Deseja excluir este contato?')"
                                class="w-full bg-red-100 hover:bg-red-200 text-red-700 py-2 rounded text-sm font-medium">
                            Excluir
                        </button>
                    </form>
                </div>
            </div>
        @empty
            <div class="bg-white rounded-lg shadow-md p-8 text-center text-gray-500">
                <p class="text-4xl mb-2">📭</p>
                @if($search)
                    <p>Nenhum contato encontrado para "{{ $search }}"</p>
                    <button wire:click="clearSearch" class="text-blue-600 hover:underline mt-2">
                        Limpar busca
                    </button>
                @else
                    <p>Nenhum contato cadastrado</p>
                @endif
            </div>
        @endforelse
    </div>

    <div class="mt-4">
        {{ $contacts->links() }}
    </div>
</div>