<div class="min-h-screen flex flex-col items-center justify-center p-4 bg-gray-50">
    
    <div class="flex flex-col items-center justify-center p-8 bg-white border border-gray-100 shadow-xl rounded-3xl w-full max-w-sm">
        
        <h2 class="text-sm font-semibold tracking-wider text-gray-400 uppercase mb-6">
            Livewire Counter
        </h2>

        <div class="text-7xl font-black text-gray-800 mb-8 tabular-nums tracking-tighter">
            {{ $count }}
        </div>

        <div class="flex space-x-6">
            <button 
                wire:click="decrement" 
                wire:loading.attr="disabled"
                class="flex items-center justify-center w-16 h-16 bg-red-50 text-red-600 rounded-2xl transition-all duration-200 hover:bg-red-100 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-red-100 active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0"
                aria-label="Decrease count"
            >
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M20 12H4"></path>
                </svg>
            </button>

            <button 
                wire:click="increment" 
                wire:loading.attr="disabled"
                class="flex items-center justify-center w-16 h-16 bg-green-50 text-green-600 rounded-2xl transition-all duration-200 hover:bg-green-100 hover:-translate-y-1 focus:outline-none focus:ring-4 focus:ring-green-100 active:scale-95 disabled:opacity-50 disabled:cursor-not-allowed disabled:hover:translate-y-0"
                aria-label="Increase count"
            >
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4v16m8-8H4"></path>
                </svg>
            </button>
        </div>
    </div>
</div>