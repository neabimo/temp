<?php

namespace App\Livewire;

use Livewire\Component;

class ComprarDolar extends Component
{
    // Usaremos uma taxa fixa de 5.00 para facilitar
    public float $taxaCambio = 5.00;
    
    // O valor em Reais que o usuário quer gastar
    public float $valorBrl = 0.00; 

    public function comprar()
    {
        if ($this->valorBrl > 0) {
            $valorUsd = $this->valorBrl / $this->taxaCambio;
            
            // Avisa o Cofre Principal (Dashboard) passando os dois valores
            $this->dispatch('dolar-comprado', gastoBrl: $this->valorBrl, compradoUsd: $valorUsd);
            $this->reset('valorBrl');
        }
    }

    public function render()
    {
        return view('livewire.comprar-dolar');
    }
}