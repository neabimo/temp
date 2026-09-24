<div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 mt-4">
    <div class="flex items-center gap-3 mb-4">
        <div class="bg-blue-100 p-2 rounded-full">
            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
        </div>
        <h3 class="text-gray-800 font-semibold text-lg">Recarga de Celular</h3>
    </div>

    <div class="mb-4">
        <label class="block text-xs text-gray-500 mb-1">Número com DDD</label>
        <input type="text" wire:model="numero" class="w-full border-gray-200 rounded-xl p-3" placeholder="(84) 99999-9999">
    </div>

    <div class="mb-4">
        <label class="block text-xs text-gray-500 mb-1">Pacote de Dados</label>
        <select wire:model="valorRecarga" class="w-full border-gray-200 rounded-xl p-3">
            <option value="15.00">R$ 15,00 - 5GB</option>
            <option value="30.00">R$ 30,00 - 12GB</option>
            <option value="50.00">R$ 50,00 - 25GB</option>
        </select>
    </div>

    <button wire:click="recarregar" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded-xl transition-colors">
        Recarregar Agora
    </button>
</div>