@extends('layouts.app')

@section('content')
<div class="max-w-4xl mx-auto px-4 py-8">
    <a href="{{ route('games.index') }}" 
       class="inline-block mb-6 bg-gray-600 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded transition-colors duration-200">
        ← Volver a la Lista
    </a>
    
    <div class="bg-white rounded-lg shadow-lg overflow-hidden">
        <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full h-96 object-cover">
        
        <div class="p-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-6">{{ $game['title'] }}</h1>
            
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-8 pb-8 border-b border-gray-200">
                <div>
                    <p class="text-gray-500 text-sm font-semibold">AÑO</p>
                    <p class="text-2xl font-bold text-gray-800">{{ $game['year'] }}</p>
                </div>
                
                <div>
                    <p class="text-gray-500 text-sm font-semibold">PLATAFORMA</p>
                    <p class="text-lg font-bold text-gray-800">{{ $game['platform'] }}</p>
                </div>
                
                <div>
                    <p class="text-gray-500 text-sm font-semibold">GÉNERO</p>
                    <p class="text-lg font-bold text-gray-800">{{ $game['genre'] }}</p>
                </div>
                
                <div>
                    <p class="text-gray-500 text-sm font-semibold">DESARROLLADOR</p>
                    <p class="text-lg font-bold text-gray-800">{{ $game['developer'] }}</p>
                </div>
            </div>
            
            <div>
                <h2 class="text-2xl font-bold text-gray-800 mb-4">Descripción</h2>
                <p class="text-gray-700 text-lg leading-relaxed mb-8">{{ $game['description'] }}</p>
            </div>
            
            <div class="bg-gray-100 rounded-lg p-6">
                <h3 class="text-xl font-bold text-gray-800 mb-3">Información Adicional</h3>
                <p class="text-gray-600">Este es un videojuego clásico retro que forma parte de nuestro catálogo de juegos históricos.</p>
            </div>
        </div>
    </div>
</div>
@endsection
