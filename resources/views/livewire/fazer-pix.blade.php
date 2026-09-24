<div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 mt-4">
    <div class="flex items-center gap-3 mb-4">
        <div class="bg-indigo-100 p-2 rounded-full">
            <svg class="w-6 h-6 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path>
            </svg>
        </div>
        <h3 class="text-gray-800 font-semibold text-lg">Área Pix</h3>
    </div>

    <div class="mb-4">
        <label class="block text-xs text-gray-500 mb-1">Chave Pix (E-mail, CPF, etc.)</label>
        <input type="text" wire:model="chavePix" class="w-full border-gray-200 rounded-xl p-3 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500" placeholder="Digite a chave">
    </div>

    <div class="mb-4">
        <label class="block text-xs text-gray-500 mb-1">Valor da Transferência (R$)</label>
        <input type="number" step="0.01" wire:model="valorPix" class="w-full border-gray-200 rounded-xl p-3 text-gray-700 focus:ring-indigo-500 focus:border-indigo-500" placeholder="0.00">
    </div>

    <button 
        wire:click="enviar"
        class="w-full bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-3 px-4 rounded-xl transition-colors flex justify-center items-center gap-2"
    >
        <span>Transferir Agora</span>
        <svg wire:loading wire:target="enviar" class="animate-spin h-4 w-4 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle><path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path></svg>
    </button>
</div>