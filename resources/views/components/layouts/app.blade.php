<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" x-data :class="$store.theme.isDark && 'dark'">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <title>{{ $title ?? 'BlatUI' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('theme', {
                    isDark: localStorage.getItem('dark') === 'true',
 
                    toggle() {
                        this.isDark = ! this.isDark;
                        localStorage.setItem('dark', this.isDark);
                    }
                });
            });
        </script>
    </head>
    <body class="antialiased font-sans bg-background text-foreground">
        {{ $slot }}
    </body>
</html>