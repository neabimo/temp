<?php

namespace App\Livewire;

use Livewire\Component;

class RecargaCelular extends Component
{
    public string $numero = '';
    public float $valorRecarga = 15.00; // Valor padrão inicial

    public function recarregar()
    {
        if (!empty($this->numero) && $this->valorRecarga > 0) {
            $this->dispatch('recarga-solicitada', valor: $this->valorRecarga);
            $this->reset(['numero']);
        }
    }

    public function render()
    {
        return view('livewire.recarga-celular');
    }
}