<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Starlight</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .noise-texture {
            background-image: url('data:image/svg+xml,...');
            /* Replace with actual SVG noise texture */
        }

        .glowing-button {
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
        }
    </style>
</head>

<body class="antialiased bg-slate-900 text-white noise-texture">
    <div class="container mx-auto px-4">

        <!-- Header -->
        <header class="flex justify-between items-center py-6">
            <div class="text-2xl font-bold">Starlight</div>
            <nav class="hidden md:flex space-x-8">
                <a href="#about" class="hover:text-blue-400">About</a>
                <a href="#services" class="hover:text-blue-400">Services</a>
                <a href="#contact" class="hover:text-blue-400">Contact</a>
            </nav>
            @if (Route::has('login'))
            <div class="flex items-center gap-4">
                @auth
                <a href="{{ url('/dashboard') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg glowing-button transition-all duration-300">
                    Dashboard
                </a>
                @else
                <a href="{{ route('login') }}" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-lg glowing-button transition-all duration-300">
                    Log in
                </a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="bg-transparent border border-blue-400 text-blue-400 hover:bg-blue-400 hover:text-slate-900 font-bold py-2 px-4 rounded-lg transition-all duration-300">
                    Register
                </a>
                @endif
                @endauth
            </div>
            @endif
        </header>

        <!-- Hero Section -->
        <section class="text-center py-20">
            <h1 class="text-5xl md:text-7xl font-extrabold leading-tight">
                Crafting Digital <span class="text-blue-400">Experiences</span>
            </h1>
            <p class="mt-4 text-lg md:text-xl text-slate-400 max-w-3xl mx-auto">
                We are a team of passionate developers, designers, and strategists dedicated to building beautiful and functional web applications.
            </p>
            <div class="mt-8">
                <a href="#contact" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-lg text-lg glowing-button transition-all duration-300">
                    Get in Touch
                </a>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-4xl font-bold mb-4">About Starlight</h2>
                    <p class="text-slate-400 mb-6">
                        Starlight is a creative agency that specializes in building modern, performant, and secure web applications. We believe in the power of technology to transform businesses and connect people. Our mission is to help our clients achieve their goals by providing them with innovative and tailor-made digital solutions.
                    </p>
                    <a href="#services" class="text-blue-400 font-bold hover:underline">Learn more about what we do</a>
                </div>
                <div>
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?q=80&w=2070&auto=format&fit=crop" alt="Team working" class="rounded-lg shadow-2xl">
                </div>
            </div>
        </section>

        <!-- Services Section -->
        <section id="services" class="py-20 bg-slate-800 rounded-lg">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold">Our Services</h2>
                <p class="text-slate-400 mt-2">We offer a wide range of services to help you succeed.</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-slate-700 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <h3 class="text-2xl font-bold mb-2">Web Development</h3>
                    <p class="text-slate-400">
                        We build fast, secure, and scalable web applications using the latest technologies.
                    </p>
                </div>
                <div class="bg-slate-700 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <h3 class="text-2xl font-bold mb-2">UI/UX Design</h3>
                    <p class="text-slate-400">
                        We create intuitive and engaging user interfaces that provide a seamless user experience.
                    </p>
                </div>
                <div class="bg-slate-700 p-8 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300">
                    <h3 class="text-2xl font-bold mb-2">Digital Strategy</h3>
                    <p class="text-slate-400">
                        We help you define your digital strategy and create a roadmap for success.
                    </p>
                </div>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold">Contact Us</h2>
                <p class="text-slate-400 mt-2">We'd love to hear from you. Send us a message!</p>
            </div>
            <div class="max-w-xl mx-auto">
                <form action="#" method="POST" class="grid grid-cols-1 gap-6">
                    <div>
                        <label for="name" class="block text-sm font-medium text-slate-300">Name</label>
                        <input type="text" name="name" id="name" class="mt-1 block w-full bg-slate-800 border-slate-600 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-slate-300">Email</label>
                        <input type="email" name="email" id="email" class="mt-1 block w-full bg-slate-800 border-slate-600 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-slate-300">Message</label>
                        <textarea name="message" id="message" rows="4" class="mt-1 block w-full bg-slate-800 border-slate-600 rounded-md shadow-sm py-2 px-3 text-white focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-6 rounded-lg glowing-button transition-all duration-300">
                            Send Message
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <!-- Footer -->
        <footer class="text-center py-6 text-slate-500">
            <p>&copy; 2024 Starlight. All rights reserved.</p>
        </footer>

    </div>
</body>

</html>