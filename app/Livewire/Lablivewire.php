<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Throwable;

class Lablivewire extends Component
{
    public int $passo = 1;

    public string $nome = '';

    public int $contador = 0;

    public string $tarefa = '';

    public array $tarefas = [
        ['texto' => 'Entender o que é uma propriedade pública', 'feito' => false],
        ['texto' => 'Clicar em um botão com wire:click', 'feito' => false],
    ];

    public string $cep = '';

    public ?array $endereco = null;

    public ?string $erroCep = null;

    public function irPara(int $passo): void
    {
        if ($passo >= 1 && $passo <= 5) {
            $this->passo = $passo;
        }
    }

    public function proximo(): void
    {
        if ($this->passo < 5) {
            $this->passo++;
        }
    }

    public function voltar(): void
    {
        if ($this->passo > 1) {
            $this->passo--;
        }
    }

    public function incrementar(): void
    {
        $this->contador++;
    }

    public function zerarContador(): void
    {
        $this->contador = 0;
    }

    public function adicionarTarefa(): void
    {
        $texto = trim($this->tarefa);

        if ($texto === '') {
            return;
        }

        $this->tarefas[] = [
            'texto' => Str::limit($texto, 60, ''),
            'feito' => false,
        ];

        $this->tarefa = '';
    }

    public function alternarTarefa(int $indice): void
    {
        if (isset($this->tarefas[$indice])) {
            $this->tarefas[$indice]['feito'] = ! $this->tarefas[$indice]['feito'];
        }
    }

    public function removerTarefa(int $indice): void
    {
        if (isset($this->tarefas[$indice])) {
            unset($this->tarefas[$indice]);
            $this->tarefas = array_values($this->tarefas);
        }
    }

    public function buscarCep(): void
    {
        $this->endereco = null;
        $this->erroCep = null;

        $cepLimpo = preg_replace('/\D/', '', $this->cep);

        if (strlen($cepLimpo) !== 8) {
            $this->erroCep = 'Digite um CEP com 8 números.';
            return;
        }

        try {
            $resposta = Http::timeout(5)
                ->acceptJson()
                ->get("https://viacep.com.br/ws/{$cepLimpo}/json/");

            $dados = $resposta->json();

            if (! $resposta->ok() || isset($dados['erro'])) {
                $this->erroCep = 'CEP não encontrado.';
                return;
            }

            $this->endereco = [
                'cep' => $dados['cep'] ?? '',
                'logradouro' => $dados['logradouro'] ?? '',
                'bairro' => $dados['bairro'] ?? '',
                'cidade' => $dados['localidade'] ?? '',
                'uf' => $dados['uf'] ?? '',
            ];
        } catch (Throwable $erro) {
            $this->erroCep = 'Não foi possível consultar a API agora.';
        }
    }

    #[Computed]
    public function totalTarefas(): int
    {
        return count($this->tarefas);
    }

    #[Computed]
    public function tarefasConcluidas(): int
    {
        return collect($this->tarefas)
            ->where('feito', true)
            ->count();
    }

    public function render()
    {
        return view('livewire.lablivewire');
    }
}
