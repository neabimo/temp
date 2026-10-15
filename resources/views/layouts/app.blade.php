<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tarefas</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

</head>
<body class="bg-gray-100">
    <div class="container mx-auto px-4 mt-12">
        <div class="bg-white rounded-lg shadow-md">
            <div class="p-6">
                @yield('content')
            </div>
        </div>
    </div>
</body>

</html>