<?php

namespace App\Livewire;

use Livewire\Component;

class FazerPix extends Component
{
    // 1. DATA BINDING: Esta variável será conectada ao campo de texto na tela.
    public float $valorPix = 0.00;
    public string $chavePix = '';

    // 2. AÇÃO: Executada quando o usuário clica em "Enviar".
    public function enviar()
    {
        // Validação super básica para fins didáticos
        if ($this->valorPix > 0 && !empty($this->chavePix)) {
            
            // 3. EVENTO: Emite um aviso chamado 'pix-solicitado' e envia o valor junto.
            // Qualquer componente que estiver "ouvindo" este evento poderá reagir.
            $this->dispatch('pix-solicitado', valor: $this->valorPix);

            // Limpa o formulário após o envio
            $this->reset(['valorPix', 'chavePix']);
        }
    }

    public function render()
    {
        return view('livewire.fazer-pix');
    }
}