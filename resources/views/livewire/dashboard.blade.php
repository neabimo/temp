<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6 font-sans">
    <div class="bg-white rounded-3xl shadow-xl w-full max-w-md overflow-hidden border border-gray-100">
        
        <div class="bg-indigo-800 p-8 text-white relative">
            @if($telaAtiva !== 'inicio')
                <button wire:click="mudarTela('inicio')" class="absolute top-4 left-4 p-2 hover:bg-indigo-700 rounded-full transition-colors">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                </button>
            @endif

            <p class="text-sm opacity-75 mt-4 text-center">Saldo Disponível (BRL)</p>
            <h2 class="text-4xl font-bold text-center mb-4">R$ {{ number_format($saldoBrl, 2, ',', '.') }}</h2>
            
            <div class="flex justify-between items-center bg-indigo-900/50 rounded-xl p-4">
                <div>
                    <p class="text-xs opacity-75">Dólar (USD)</p>
                    <p class="text-lg font-semibold">$ {{ number_format($saldoUsd, 2, '.', ',') }}</p>
                </div>
                <div class="text-right">
                    <p class="text-xs opacity-75">Fatura Atual</p>
                    <p class="text-lg font-semibold text-red-300">R$ {{ number_format($faturaCartao, 2, ',', '.') }}</p>
                </div>
            </div>
        </div>

        @if($notificacao)
            <div wire:click="limparNotificacao" class="bg-indigo-50 text-indigo-800 border-l-4 border-indigo-500 p-4 m-4 cursor-pointer hover:bg-indigo-100 transition-colors">
                <p class="text-sm font-medium">{{ $notificacao }}</p>
            </div>
        @endif

        <div class="p-6">
            @if($telaAtiva === 'inicio')
                <h3 class="text-gray-800 font-semibold mb-4 text-lg">Serviços</h3>
                <div class="grid grid-cols-2 gap-4">
                    <button wire:click="mudarTela('pix')" class="p-4 bg-gray-50 rounded-2xl border hover:bg-indigo-50 transition-colors">Fazer Pix</button>
                    <button wire:click="mudarTela('fatura')" class="p-4 bg-gray-50 rounded-2xl border hover:bg-red-50 transition-colors">Pagar Fatura</button>
                    <button wire:click="mudarTela('recarga')" class="p-4 bg-gray-50 rounded-2xl border hover:bg-blue-50 transition-colors">Recarga</button>
                    <button wire:click="mudarTela('dolar')" class="p-4 bg-gray-50 rounded-2xl border hover:bg-green-50 transition-colors">Comprar USD</button>
                </div>
            @elseif($telaAtiva === 'pix')
                <livewire:fazer-pix />
            @elseif($telaAtiva === 'fatura')
                <livewire:pagar-fatura />
            @elseif($telaAtiva === 'recarga')
                <livewire:recarga-celular />
            @elseif($telaAtiva === 'dolar')
                <livewire:comprar-dolar />
            @endif
        </div>

    </div>
</div>