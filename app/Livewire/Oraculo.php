<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Oraculo extends Component
{
    // 1. ESTADO (State): Variável pública que a interface pode ler e exibir.
    public string $conselho = 'Conectando à Matrix...';

    // 2. CICLO DE VIDA (Lifecycle): Roda automaticamente quando o componente é carregado pela primeira vez.
    public function mount()
    {
        $this->buscarNovoConselho();
    }

    // 3. AÇÃO (Action): Uma função que será chamada pelo botão na interface.
    public function buscarNovoConselho()
    {
        // Consumindo uma API externa simples
        $resposta = Http::get('https://api.adviceslip.com/advice');
        
        // Atualizando o estado. Quando isso muda, o Livewire atualiza a tela automaticamente!
        $this->conselho = $resposta->json('slip.advice');
    }

    public function render()
    {
        return view('livewire.oraculo');
    }
}