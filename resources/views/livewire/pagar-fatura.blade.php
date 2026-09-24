<div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 mt-4">
    <div class="flex items-center gap-3 mb-4">
        <div class="bg-red-100 p-2 rounded-full">
            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path></svg>
        </div>
        <h3 class="text-gray-800 font-semibold text-lg">Pagar Fatura</h3>
    </div>

    <div class="mb-4">
        <label class="block text-xs text-gray-500 mb-1">Qual valor deseja abater da fatura?</label>
        <input type="number" wire:model="valorPagamento" class="w-full border-gray-200 rounded-xl p-3" placeholder="0.00">
    </div>

    <button wire:click="pagar" class="w-full bg-red-600 hover:bg-red-700 text-white font-bold py-3 px-4 rounded-xl transition-colors">
        Pagar Fatura
    </button>
</div>