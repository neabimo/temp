<?php

namespace App\Livewire;

use Livewire\Component;

class PagarFatura extends Component
{
    public float $valorPagamento = 0.00;

    public function pagar()
    {
        if ($this->valorPagamento > 0) {
            $this->dispatch('fatura-paga', valor: $this->valorPagamento);
            $this->reset('valorPagamento');
        }
    }

    public function render()
    {
        return view('livewire.pagar-fatura');
    }
}