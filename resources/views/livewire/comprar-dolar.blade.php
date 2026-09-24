<div class="bg-gray-50 p-6 rounded-2xl border border-gray-100 mt-4">
    <div class="flex items-center gap-3 mb-4">
        <div class="bg-green-100 p-2 rounded-full">
            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        </div>
        <h3 class="text-gray-800 font-semibold text-lg">Câmbio: Comprar Dólar</h3>
    </div>

    <div class="mb-4">
        <label class="block text-xs text-gray-500 mb-1">Quanto em Reais (R$) você quer usar?</label>
        <input type="number" wire:model.live="valorBrl" class="w-full border-gray-200 rounded-xl p-3 text-gray-700" placeholder="Ex: 500.00">
    </div>

    <div class="bg-green-50 p-4 rounded-xl mb-4 border border-green-100">
        <p class="text-sm text-green-800">Você vai receber:</p>
        <p class="text-2xl font-bold text-green-600">
            $ {{ number_format(empty($valorBrl) ? 0 : ($valorBrl / $taxaCambio), 2, '.', ',') }} USD
        </p>
    </div>

    <button wire:click="comprar" class="w-full bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-4 rounded-xl transition-colors">
        Confirmar Compra
    </button>
</div>