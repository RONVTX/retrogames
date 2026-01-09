@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-10">
    <a href="{{ route('games.index') }}" class="inline-flex items-center gap-2 text-gray-600 hover:text-gray-900 mb-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0L2.586 11a1 1 0 010-1.414l3.707-3.293a1 1 0 011.414 1.414L6.414 9H17a1 1 0 110 2H6.414l1.293 1.293a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>
        Volver a la lista
    </a>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
        <aside class="md:col-span-1">
            <div class="bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-xl overflow-hidden shadow-lg">
                <div class="relative">
                    <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full h-72 object-cover">
                    <div class="absolute left-4 bottom-4 bg-black bg-opacity-60 text-white px-3 py-1 rounded-full text-sm font-semibold">{{ $game['year'] ?? '—' }}</div>
                </div>

                <div class="p-4 text-white">
                    <h1 class="text-2xl font-bold leading-tight">{{ $game['title'] }}</h1>
                    <p class="mt-2 text-sm text-gray-200">{{ $game['platform'] ?? 'Plataforma desconocida' }}</p>

                    <div class="mt-4 flex gap-2">
                        <a href="#" class="flex-1 text-center bg-indigo-600 hover:bg-indigo-700 transition-colors text-white py-2 rounded-md font-semibold">Jugar</a>
                        <button class="px-3 py-2 bg-white bg-opacity-10 hover:bg-opacity-20 rounded-md">❤</button>
                    </div>

                    <div class="mt-4 text-sm text-gray-300">
                        <p><span class="font-semibold text-gray-100">Género:</span> {{ $game['genre'] ?? '—' }}</p>
                        <p class="mt-1"><span class="font-semibold text-gray-100">Desarrollador:</span> {{ $game['developer'] ?? '—' }}</p>
                    </div>
                </div>
            </div>
        </aside>

        <main class="md:col-span-2">
            <section class="mb-6">
                <div class="flex items-center justify-between">
                    <div>
                        <h2 class="text-3xl font-extrabold text-gray-900">{{ $game['title'] }}</h2>
                        <p class="mt-1 text-sm text-gray-500">Publicado en {{ $game['year'] ?? '—' }} · {{ $game['platform'] ?? '—' }}</p>
                    </div>

                    <div class="flex items-center gap-3">
                        <div class="px-3 py-1 bg-yellow-400 rounded-full font-bold text-sm">{{ $game['rating'] ?? 'N/A' }}</div>
                        <div class="text-sm text-gray-500">{{ $game['players'] ?? '' }}</div>
                    </div>
                </div>
            </section>

            <section class="prose prose-lg max-w-none mb-8">
                <h3 class="text-xl font-semibold">Descripción</h3>
                <p class="text-gray-700">{{ $game['description'] ?? 'No hay descripción disponible.' }}</p>
            </section>

            @if(!empty($game['screenshots']))
            <section class="mb-8">
                <h4 class="text-lg font-semibold mb-4">Capturas</h4>
                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    @foreach($game['screenshots'] as $shot)
                        <img src="{{ $shot }}" alt="{{ $game['title'] }} screenshot" class="w-full h-40 object-cover rounded-lg shadow-sm">
                    @endforeach
                </div>
            </section>
            @endif

            <section class="bg-white border rounded-lg p-4 shadow-sm">
                <h4 class="font-semibold mb-3">Detalles</h4>
                <div class="grid grid-cols-2 gap-4 text-sm text-gray-600">
                    <div><strong class="text-gray-800">Lanzamiento:</strong><div class="mt-1">{{ $game['release_date'] ?? ($game['year'] ?? '—') }}</div></div>
                    <div><strong class="text-gray-800">Formato:</strong><div class="mt-1">{{ $game['format'] ?? 'Digital/Cartridge' }}</div></div>
                    <div><strong class="text-gray-800">Género:</strong><div class="mt-1">{{ $game['genre'] ?? '—' }}</div></div>
                    <div><strong class="text-gray-800">Desarrollador:</strong><div class="mt-1">{{ $game['developer'] ?? '—' }}</div></div>
                </div>
            </section>
        </main>
    </div>
</div>
@endsection
