@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto px-4 py-8">
    <h1 class="text-4xl font-bold mb-8 text-center">Videojuegos Retro</h1>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($games as $game)
            <div class="bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
                <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full h-48 object-cover">
                
                <div class="p-4">
                    <h2 class="text-xl font-bold text-gray-800 mb-2">{{ $game['title'] }}</h2>
                    
                    <div class="space-y-2 text-sm text-gray-600 mb-4">
                        <p><strong>Año:</strong> {{ $game['year'] }}</p>
                        <p><strong>Plataforma:</strong> {{ $game['platform'] }}</p>
                        <p><strong>Género:</strong> {{ $game['genre'] }}</p>
                        <p><strong>Desarrollador:</strong> {{ $game['developer'] }}</p>
                    </div>
                    
                    <p class="text-gray-700 text-sm mb-4 line-clamp-3">{{ $game['description'] }}</p>
                    
                    <a href="{{ route('games.show', $game['id']) }}" 
                       class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
                        Ver Detalles
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
