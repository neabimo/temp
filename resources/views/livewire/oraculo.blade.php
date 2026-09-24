<div class="min-h-screen bg-gray-900 flex flex-col items-center justify-center p-4 font-sans">
    
    <div class="bg-gray-800 rounded-3xl shadow-2xl p-10 max-w-lg w-full text-center border border-green-500/30">
        
        <div class="flex justify-center mb-8">
            <svg class="w-32 h-32 text-green-400 drop-shadow-[0_0_15px_rgba(74,222,128,0.5)]" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"></path>
            </svg>
        </div>

        <h2 class="text-3xl font-bold text-white mb-2">O Oráculo</h2>
        <p class="text-gray-400 mb-8 text-sm">Faça uma pergunta mentalmente e clique no botão.</p>

        <div class="min-h-[100px] flex items-center justify-center mb-8">
            <p class="text-2xl text-green-300 font-medium italic transition-all duration-300">
                "{{ $conselho }}"
            </p>
        </div>

        <button 
        {{-- 
        wire:click: Intercepta o clique do usuário de forma reativa (sem recarregar a página) 
        e dispara o método 'buscarNovoConselho' na classe do seu componente Livewire. 
		    --}}
            wire:click="buscarNovoConselho"
        {{-- 
        wire:loading.attr="disabled": Adiciona automaticamente o atributo HTML 'disabled' 
        neste botão enquanto a requisição do Livewire estiver em andamento. 
        Isso impede que o usuário clique múltiplas vezes e envie requisições duplicadas. 
		    --}}
            wire:loading.attr="disabled"
        {{-- 
        wire:target: É um filtro de escopo. Ele garante que os estados de 'loading' deste botão 
        só sejam ativados quando a ação 'buscarNovoConselho' for chamada. Se houver outro 
        botão na tela disparando outra ação, este botão não entrará em estado de carregamento. 
		    --}}
            wire:target="buscarNovoConselho"
            class="bg-green-500 hover:bg-green-400 text-gray-900 font-bold py-4 px-8 rounded-full text-lg w-full transition-all transform hover:scale-105 active:scale-95 flex justify-center items-center gap-3 disabled:opacity-50 disabled:cursor-not-allowed"
        >
        {{-- 
        wire:loading.remove: Oculta este elemento <span> inteiro enquanto o Livewire estiver 
        processando a ação definida no wire:target. É usado aqui para esconder o texto 
        "Consultar Novamente" durante o carregamento. 
		    --}}
            <span wire:loading.remove wire:target="buscarNovoConselho">
                Consultar Novamente
            </span>

				{{-- 
        wire:loading: Faz o inverso do comando acima. Este <span> ficará invisível por padrão 
        e só será exibido na tela enquanto o Livewire estiver processando a requisição no servidor. 
        Ideal para mostrar o spinner de carregamento e o texto "Buscando conhecimento...". 
		    --}}
            <span wire:loading wire:target="buscarNovoConselho" class="flex items-center gap-2">
                <svg class="animate-spin h-5 w-5 text-gray-900" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                </svg>
                Buscando conhecimento...
            </span>
        </button>

    </div>
</div>