<div class="page">
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: #f5f7fb;
            color: #1f2937;
        }

        .page {
            min-height: 100vh;
            padding: 32px;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
        }

        .hero {
            background: white;
            border-radius: 28px;
            padding: 36px;
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
            margin-bottom: 24px;
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.4fr 0.6fr;
            gap: 24px;
            align-items: center;
        }

        h1 {
            font-size: 44px;
            line-height: 1.05;
            margin: 0 0 12px;
        }

        h2 {
            font-size: 30px;
            margin: 0 0 12px;
        }

        h3 {
            font-size: 22px;
            margin: 0 0 10px;
        }

        p {
            font-size: 18px;
            line-height: 1.55;
            margin: 0 0 14px;
        }

        .muted {
            color: #64748b;
        }

        .badge {
            display: inline-block;
            background: #eef2ff;
            color: #3730a3;
            padding: 8px 14px;
            border-radius: 999px;
            font-weight: bold;
            margin-bottom: 14px;
        }

        .steps {
            display: grid;
            grid-template-columns: repeat(5, 1fr);
            gap: 10px;
            margin-bottom: 24px;
        }

        .step-button {
            border: 0;
            border-radius: 18px;
            padding: 14px;
            font-size: 15px;
            font-weight: bold;
            cursor: pointer;
            background: white;
            color: #334155;
            box-shadow: 0 10px 25px rgba(15, 23, 42, 0.06);
        }

        .step-button.active {
            background: #2563eb;
            color: white;
        }

        .card {
            background: white;
            border-radius: 28px;
            padding: 32px;
            box-shadow: 0 20px 50px rgba(15, 23, 42, 0.08);
        }

        .lesson-grid {
            display: grid;
            grid-template-columns: 220px 1fr;
            gap: 28px;
            align-items: start;
        }

        .icon-box {
            background: #eff6ff;
            border-radius: 28px;
            padding: 32px;
            text-align: center;
        }

        .icon-box svg {
            width: 120px;
            height: 120px;
        }

        .code-note {
            background: #0f172a;
            color: #e2e8f0;
            padding: 18px;
            border-radius: 18px;
            font-size: 16px;
            overflow-x: auto;
            margin: 18px 0;
        }

        .field {
            display: block;
            width: 100%;
            padding: 16px 18px;
            font-size: 20px;
            border-radius: 16px;
            border: 2px solid #cbd5e1;
            margin: 12px 0;
        }

        .button-row {
            display: flex;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .button {
            border: 0;
            border-radius: 16px;
            padding: 14px 20px;
            font-size: 18px;
            font-weight: bold;
            cursor: pointer;
            background: #2563eb;
            color: white;
        }

        .button.secondary {
            background: #e2e8f0;
            color: #1e293b;
        }

        .result {
            background: #ecfdf5;
            border: 2px solid #bbf7d0;
            border-radius: 20px;
            padding: 20px;
            margin-top: 18px;
        }

        .error {
            background: #fef2f2;
            border: 2px solid #fecaca;
            color: #991b1b;
            border-radius: 20px;
            padding: 18px;
            margin-top: 18px;
            font-weight: bold;
        }

        .task {
            display: flex;
            justify-content: space-between;
            gap: 14px;
            align-items: center;
            padding: 16px;
            background: #f8fafc;
            border-radius: 18px;
            margin-bottom: 10px;
            font-size: 18px;
        }

        .task.done span {
            text-decoration: line-through;
            color: #64748b;
        }

        .small-button {
            border: 0;
            border-radius: 12px;
            padding: 10px 12px;
            font-weight: bold;
            cursor: pointer;
        }

        .small-button.ok {
            background: #dcfce7;
            color: #166534;
        }

        .small-button.remove {
            background: #fee2e2;
            color: #991b1b;
        }

        .counter {
            font-size: 70px;
            font-weight: bold;
            color: #2563eb;
            margin: 20px 0;
        }

        @media (max-width: 800px) {
            .hero-grid,
            .lesson-grid {
                grid-template-columns: 1fr;
            }

            .steps {
                grid-template-columns: 1fr;
            }

            h1 {
                font-size: 34px;
            }
        }
    </style>

    <div class="container">
        <section class="hero">
            <div class="hero-grid">
                <div>
                    <span class="badge">Aula introdutória</span>
                    <h1>Laboratório Livewire</h1>
                    <p class="muted">
                        Um mini-app para aprender os primeiros recursos do Livewire:
                        estado, eventos, formulários, listas e consumo de API.
                    </p>
                </div>

                <div class="icon-box">
                    <svg viewBox="0 0 120 120" fill="none" aria-hidden="true">
                        <rect x="18" y="20" width="84" height="64" rx="12" fill="#2563eb"/>
                        <rect x="28" y="32" width="64" height="8" rx="4" fill="white"/>
                        <rect x="28" y="48" width="42" height="8" rx="4" fill="#bfdbfe"/>
                        <rect x="28" y="64" width="54" height="8" rx="4" fill="#bfdbfe"/>
                        <path d="M45 98H75" stroke="#1e293b" stroke-width="8" stroke-linecap="round"/>
                        <path d="M60 84V98" stroke="#1e293b" stroke-width="8" stroke-linecap="round"/>
                    </svg>
                </div>
            </div>
        </section>

        <nav class="steps">
            <button wire:click="irPara(1)" class="step-button {{ $passo === 1 ? 'active' : '' }}">
                1. Estado
            </button>

            <button wire:click="irPara(2)" class="step-button {{ $passo === 2 ? 'active' : '' }}">
                2. Clique
            </button>

            <button wire:click="irPara(3)" class="step-button {{ $passo === 3 ? 'active' : '' }}">
                3. Formulário
            </button>

            <button wire:click="irPara(4)" class="step-button {{ $passo === 4 ? 'active' : '' }}">
                4. Lista
            </button>

            <button wire:click="irPara(5)" class="step-button {{ $passo === 5 ? 'active' : '' }}">
                5. API
            </button>
        </nav>

        <main class="card">
            @if ($passo === 1)
                <div class="lesson-grid">
                    <div class="icon-box">
                        <svg viewBox="0 0 120 120" fill="none" aria-hidden="true">
                            <circle cx="60" cy="60" r="42" fill="#dbeafe"/>
                            <path d="M38 62L54 78L84 42" stroke="#2563eb" stroke-width="10" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>

                    <div>
                        <h2>Passo 1: Estado com propriedades públicas</h2>

                        <p>
                            Uma propriedade pública guarda informações do componente.
                            Aqui, o nome digitado fica salvo na propriedade <strong>$nome</strong>.
                        </p>

                        <div class="code-note">
                            public string $nome = '';
                            <br>
                            &lt;input wire:model.live="nome"&gt;
                        </div>

                        <label for="nome">Digite seu nome:</label>

                        <input
                            id="nome"
                            class="field"
                            type="text"
                            wire:model.live="nome"
                            placeholder="Ex: Ana"
                        >

                        <div class="result">
                            @if ($nome)
                                Olá, <strong>{{ $nome }}</strong>! O Livewire atualizou essa mensagem.
                            @else
                                Digite algo no campo acima.
                            @endif
                        </div>
                    </div>
                </div>
            @endif

            @if ($passo === 2)
                <div class="lesson-grid">
                    <div class="icon-box">
                        <svg viewBox="0 0 120 120" fill="none" aria-hidden="true">
                            <rect x="24" y="24" width="72" height="72" rx="18" fill="#dcfce7"/>
                            <path d="M60 38V82" stroke="#16a34a" stroke-width="10" stroke-linecap="round"/>
                            <path d="M38 60H82" stroke="#16a34a" stroke-width="10" stroke-linecap="round"/>
                        </svg>
                    </div>

                    <div>
                        <h2>Passo 2: Botões com wire:click</h2>

                        <p>
                            O <strong>wire:click</strong> chama um método PHP quando o usuário clica.
                            Neste exemplo, o botão chama o método <strong>incrementar()</strong>.
                        </p>

                        <div class="code-note">
                            public function incrementar(): void
                            <br>
                            &lt;button wire:click="incrementar"&gt;
                        </div>

                        <div class="counter">{{ $contador }}</div>

                        <div class="button-row">
                            <button class="button" wire:click="incrementar">
                                Somar +1
                            </button>

                            <button class="button secondary" wire:click="zerarContador">
                                Zerar
                            </button>
                        </div>
                    </div>
                </div>
            @endif

            @if ($passo === 3)
                <div class="lesson-grid">
                    <div class="icon-box">
                        <svg viewBox="0 0 120 120" fill="none" aria-hidden="true">
                            <rect x="24" y="18" width="72" height="84" rx="12" fill="#fef3c7"/>
                            <path d="M40 42H80" stroke="#d97706" stroke-width="8" stroke-linecap="round"/>
                            <path d="M40 60H80" stroke="#d97706" stroke-width="8" stroke-linecap="round"/>
                            <path d="M40 78H66" stroke="#d97706" stroke-width="8" stroke-linecap="round"/>
                        </svg>
                    </div>

                    <div>
                        <h2>Passo 3: Formulário com wire:submit</h2>

                        <p>
                            O <strong>wire:submit</strong> envia o formulário para um método do componente,
                            sem recarregar a página inteira.
                        </p>

                        <div class="code-note">
                            &lt;form wire:submit="adicionarTarefa"&gt;
                            <br>
                            public function adicionarTarefa(): void
                        </div>

                        <form wire:submit="adicionarTarefa">
                            <label for="tarefa">Nova tarefa da aula:</label>

                            <input
                                id="tarefa"
                                class="field"
                                type="text"
                                wire:model="tarefa"
                                placeholder="Ex: Testar wire:model"
                            >

                            <button class="button" type="submit">
                                Adicionar tarefa
                            </button>
                        </form>
                    </div>
                </div>
            @endif

            @if ($passo === 4)
                <div class="lesson-grid">
                    <div class="icon-box">
                        <svg viewBox="0 0 120 120" fill="none" aria-hidden="true">
                            <rect x="22" y="24" width="76" height="72" rx="16" fill="#ede9fe"/>
                            <circle cx="42" cy="46" r="6" fill="#7c3aed"/>
                            <path d="M56 46H80" stroke="#7c3aed" stroke-width="8" stroke-linecap="round"/>
                            <circle cx="42" cy="64" r="6" fill="#7c3aed"/>
                            <path d="M56 64H80" stroke="#7c3aed" stroke-width="8" stroke-linecap="round"/>
                            <circle cx="42" cy="82" r="6" fill="#7c3aed"/>
                            <path d="M56 82H70" stroke="#7c3aed" stroke-width="8" stroke-linecap="round"/>
                        </svg>
                    </div>

                    <div>
                        <h2>Passo 4: Listas e ações com parâmetros</h2>

                        <p>
                            Agora usamos <strong>@@foreach</strong> para mostrar a lista.
                            Também passamos o índice da tarefa para os métodos.
                        </p>

                        <div class="code-note">
                            wire:click="alternarTarefa({{ '$indice' }})"
                            <br>
                            wire:click="removerTarefa({{ '$indice' }})"
                        </div>

                        <p>
                            Total: <strong>{{ $this->totalTarefas }}</strong> |
                            Concluídas: <strong>{{ $this->tarefasConcluidas }}</strong>
                        </p>

                        @foreach ($tarefas as $indice => $item)
                            <div class="task {{ $item['feito'] ? 'done' : '' }}" wire:key="tarefa-{{ $indice }}">
                                <span>{{ $item['texto'] }}</span>

                                <div>
                                    <button class="small-button ok" wire:click="alternarTarefa({{ $indice }})">
                                        {{ $item['feito'] ? 'Desfazer' : 'Concluir' }}
                                    </button>

                                    <button class="small-button remove" wire:click="removerTarefa({{ $indice }})">
                                        Remover
                                    </button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif

            @if ($passo === 5)
                <div class="lesson-grid">
                    <div class="icon-box">
                        <svg viewBox="0 0 120 120" fill="none" aria-hidden="true">
                            <circle cx="60" cy="60" r="44" fill="#fee2e2"/>
                            <path d="M60 28C48 28 38 38 38 50C38 68 60 92 60 92C60 92 82 68 82 50C82 38 72 28 60 28Z" fill="#ef4444"/>
                            <circle cx="60" cy="50" r="10" fill="white"/>
                        </svg>
                    </div>

                    <div>
                        <h2>Passo 5: Consumindo uma API externa</h2>

                        <p>
                            Este exemplo consulta o endereço de um CEP usando uma API pública.
                            Assim o aluno vê que Livewire também pode conversar com serviços externos.
                        </p>

                        <div class="code-note">
                            Http::get("https://viacep.com.br/ws/01001000/json/")
                            <br>
                            wire:loading wire:target="buscarCep"
                        </div>

                        <form wire:submit="buscarCep">
                            <label for="cep">Digite um CEP:</label>

                            <input
                                id="cep"
                                class="field"
                                type="text"
                                wire:model="cep"
                                placeholder="Ex: 01001000"
                            >

                            <button class="button" type="submit">
                                Buscar CEP
                            </button>

                            <span wire:loading wire:target="buscarCep" class="muted">
                                Consultando API...
                            </span>
                        </form>

                        @if ($erroCep)
                            <div class="error">
                                {{ $erroCep }}
                            </div>
                        @endif

                        @if ($endereco)
                            <div class="result">
                                <h3>Endereço encontrado</h3>
                                <p><strong>CEP:</strong> {{ $endereco['cep'] }}</p>
                                <p><strong>Rua:</strong> {{ $endereco['logradouro'] ?: 'Não informado' }}</p>
                                <p><strong>Bairro:</strong> {{ $endereco['bairro'] ?: 'Não informado' }}</p>
                                <p><strong>Cidade:</strong> {{ $endereco['cidade'] }} / {{ $endereco['uf'] }}</p>
                            </div>
                        @endif
                    </div>
                </div>
            @endif

            <div class="button-row">
                <button class="button secondary" wire:click="voltar" @disabled($passo === 1)>
                    Voltar
                </button>

                <button class="button" wire:click="proximo" @disabled($passo === 5)>
                    Próximo
                </button>
            </div>
        </main>
    </div>
</div>