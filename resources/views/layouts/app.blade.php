<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Videojuegos Retro')</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
    
    <!-- Styles -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif
</head>
<body class="bg-gray-50">
    <!-- Navbar -->
    <nav class="bg-white shadow-md">
        <div class="max-w-6xl mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <a href="/" class="text-2xl font-bold text-blue-600">Retro Games</a>
                <ul class="flex gap-6">
                    <li><a href="/" class="text-gray-700 hover:text-blue-600 transition-colors">Inicio</a></li>
                    <li><a href="{{ route('games.index') }}" class="text-gray-700 hover:text-blue-600 transition-colors">Juegos</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="min-h-screen">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white mt-12">
        <div class="max-w-6xl mx-auto px-4 py-8">
            <p class="text-center">&copy; 2026 Videojuegos Retro - Todos los derechos reservados</p>
        </div>
    </footer>
</body>
</html>
