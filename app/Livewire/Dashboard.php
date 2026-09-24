<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On; // Importação necessária para usar o atributo #[On]

class Dashboard extends Component
{
    /*
    |--------------------------------------------------------------------------
    | Estado (State) do Componente
    |--------------------------------------------------------------------------
    | Estas propriedades públicas representam a "memória" do seu Dashboard.
    | O Livewire gerencia o estado dessas variáveis entre as requisições.
    | Qualquer alteração feita aqui refletirá automaticamente no seu arquivo Blade.
    */
    public float $saldoBrl = 5000.00;
    public float $saldoUsd = 0.00; // Nova carteira internacional
    public float $faturaCartao = 1250.00; // Dívida do cartão
    
    public string $notificacao = '';
    
    // Funciona como um controlador de rotas interno. 
    // Diz ao Blade qual "aba" ou bloco de HTML deve ser exibido.
    public string $telaAtiva = 'inicio'; 

    /*
    |--------------------------------------------------------------------------
    | Ouvintes de Eventos (Event Listeners)
    |--------------------------------------------------------------------------
    | O atributo #[On('nome-do-evento')] é uma funcionalidade poderosa do Livewire v3.
    | Ele transforma este método em um "ouvinte". Se qualquer outro componente
    | da sua aplicação disparar um evento chamado 'pix-solicitado', o Livewire
    | intercepta esse evento e executa esta função automaticamente.
    */
    #[On('pix-solicitado')]
    public function processarPix($valor)
    {
        // Regra de negócio: verifica se há saldo antes de prosseguir
        if ($this->saldoBrl >= $valor) {
            $this->saldoBrl -= $valor;
            
            // Formata o número para o padrão monetário brasileiro (ex: 1.000,00)
            $this->notificacao = "Pix de R$ " . number_format($valor, 2, ',', '.') . " realizado com sucesso!";
            
            // Retorna o usuário para a tela inicial após o sucesso da transação
            $this->telaAtiva = 'inicio';
        } else {
            $this->notificacao = "Saldo insuficiente.";
        }
    }

    // Eventos podem receber múltiplos parâmetros (neste caso, dois).
    #[On('dolar-comprado')]
    public function processarCompraDolar($gastoBrl, $compradoUsd)
    {
        if ($this->saldoBrl >= $gastoBrl) {
            // Lida com a matemática entre duas "carteiras" diferentes
            $this->saldoBrl -= $gastoBrl;
            $this->saldoUsd += $compradoUsd;
            
            $this->notificacao = "Compra de $ " . number_format($compradoUsd, 2, '.', ',') . " USD efetuada!";
            $this->telaAtiva = 'inicio';
        } else {
            $this->notificacao = "Saldo em Reais insuficiente para o câmbio.";
        }
    }

    #[On('recarga-solicitada')]
    public function processarRecarga($valor)
    {
        if ($this->saldoBrl >= $valor) {
            $this->saldoBrl -= $valor;
            $this->notificacao = "Recarga de R$ " . number_format($valor, 2, ',', '.') . " efetuada!";
            $this->telaAtiva = 'inicio';
        } else {
            $this->notificacao = "Saldo insuficiente para recarga.";
        }
    }

    #[On('fatura-paga')]
    public function processarPagamentoFatura($valor)
    {
        if ($this->saldoBrl >= $valor) {
            $this->saldoBrl -= $valor;
            
            // A função nativa do PHP max() compara dois valores e retorna o maior.
            // Isso garante que se o usuário pagar a mais, a fatura não ficará negativa (ex: -50.00).
            // O valor mínimo que a fatura chegará é 0.
            $this->faturaCartao = max(0, $this->faturaCartao - $valor);
            
            $this->notificacao = "Pagamento de R$ " . number_format($valor, 2, ',', '.') . " recebido!";
            $this->telaAtiva = 'inicio';
        } else {
            $this->notificacao = "Saldo insuficiente.";
        }
    }

    /*
    |--------------------------------------------------------------------------
    | Ações de Interface (UI Actions)
    |--------------------------------------------------------------------------
    | Este método cria uma experiência de SPA (Single Page Application).
    | Em vez de carregar novas URLs, botões no frontend chamam `wire:click="mudarTela('pix')"`.
    | O componente atualiza a propriedade e o Blade mostra/esconde as divs correspondentes.
    */
    public function mudarTela($tela)
    {
        $this->telaAtiva = $tela;
        
        // Garante que mensagens antigas não fiquem na tela ao navegar
        $this->notificacao = ''; 
    }

    /*
    | Ação simples que pode ser atrelada a um botão "X" (fechar) 
    | na caixa de notificação do frontend.
    */
    public function limparNotificacao()
    {
        $this->notificacao = '';
    }

    public function render()
    {
        return view('livewire.dashboard');
    }
}