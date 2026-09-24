<?php
 
namespace App\Livewire;
 
use Livewire\Component;
 
class Counter extends Component
{
		/*
    |--------------------------------------------------------------------------
    | Propriedades Públicas (State / Estado)
    |--------------------------------------------------------------------------
    | No Livewire, qualquer propriedade declarada como 'public' fica 
    | automaticamente disponível dentro do seu arquivo Blade (a View).
    | Além disso, o Livewire "rastreia" essa variável. Se ela mudar aqui no 
    | servidor, o HTML no navegador do usuário será atualizado automaticamente.
    */
    public $count = 1;
 
		/*
    |--------------------------------------------------------------------------
    | Ações (Actions)
    |--------------------------------------------------------------------------
    | Métodos públicos agem como "Ações". Eles podem ser disparados diretamente
    | a partir do front-end usando diretivas como `wire:click="increment"`.
    | Quando o usuário clica no botão, o Livewire faz uma requisição nos bastidores,
    | executa este método PHP, altera o valor de $count e devolve o HTML atualizado.
    */
    public function increment()
    {
        $this->count++;
    }
 
    public function decrement()
    {
        $this->count--;
    }
 
		/*
    |--------------------------------------------------------------------------
    | Método Render
    |--------------------------------------------------------------------------
    | Este é o método padrão de ciclo de vida do Livewire responsável por 
    | desenhar o componente na tela. Ele diz ao Livewire qual arquivo Blade 
    | deve ser carregado para exibir este componente.
    | 
    | Dica: Se o nome do arquivo Blade seguir exatamente o nome da classe 
    | (ex: Counter.php -> livewire.counter), você pode até apagar este método 
    | inteiro, pois o Livewire o deduzirá automaticamente!
    */
    public function render()
    {
        return view('livewire.counter');
    }
}