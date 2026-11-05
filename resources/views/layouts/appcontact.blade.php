<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    @include('sweetalert2::index')
</head>
<body class="bg-gray-50 min-h-screen">
    <div class="max-w-md mx-auto">
        <header class="bg-blue-600 text-white p-4 sticky top-0 shadow-lg flex justify-between items-center">
						<a href="{{ route('contacts.index') }}" wire:navigate><h1 class="text-xl font-bold">📱 Meus Contatos</h1></a>
            <!-- Botão de Logout -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit">Sair</button>
            </form>
        </header>

        <main class="p-4">
            @if(session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-700 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @yield('content')
        </main>
    </div>
    @livewireScripts
</body>
</html>
