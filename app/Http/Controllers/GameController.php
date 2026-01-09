<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class GameController extends Controller
{
    /**
     * Datos estáticos de videojuegos
     */
    private function getGames(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Super Mario Bros',
                'year' => 1985,
                'platform' => 'NES',
                'genre' => 'Platformer',
                'description' => 'El clásico videojuego de plataformas que revolucionó la industria. Ayuda a Mario a rescatar a la princesa Peach del castillo de Bowser.',
                'image' => 'https://techviral.net/wp-content/uploads/2023/06/super-mario-bros-for-nintendo-switch.jpg',
                'developer' => 'Nintendo'
            ],
            [
                'id' => 2,
                'title' => 'The Legend of Zelda',
                'year' => 1986,
                'platform' => 'NES',
                'genre' => 'Adventure',
                'description' => 'Una epopeya de aventura y misterio. Link debe rescatar a Zelda y derrotar a Ganon en la tierra de Hyrule.',
                'image' => 'https://miro.medium.com/max/1000/1*SXF9-P42Kzp5dWrd4a3GuA.jpeg',
                'developer' => 'Nintendo'
            ],
            [
                'id' => 3,
                'title' => 'Pac-Man',
                'year' => 1980,
                'platform' => 'Arcade',
                'genre' => 'Maze',
                'description' => 'El legendario juego de laberintos. Controla a Pac-Man para comer todos los puntos mientras evitas a los fantasmas.',
                'image' => 'https://th.bing.com/th/id/OIP.UdWMHPLDo4YkUDQaQ6qWLgHaEK?w=314&h=180&c=7&r=0&o=7&pid=1.7&rm=3',
                'developer' => 'Namco'
            ],
            [
                'id' => 4,
                'title' => 'Donkey Kong',
                'year' => 1981,
                'platform' => 'Arcade',
                'genre' => 'Platformer',
                'description' => 'El juego que lanzó la carrera de Mario. Salta sobre barriles y plataformas para rescatar a tu novia Pauline.',
                'image' => 'https://fs-prod-cdn.nintendo-europe.com/media/images/10_share_images/games_15/virtual_console_nintendo_3ds_7/SI_3DSVC_DonkeyKong_image1600w.jpg',
                'developer' => 'Nintendo'
            ],
            [
                'id' => 5,
                'title' => 'Space Invaders',
                'year' => 1978,
                'platform' => 'Arcade',
                'genre' => 'Shooter',
                'description' => 'Defiende la Tierra contra oleadas de invasores alienígenas. Un clásico del género shooter.',
                'image' => 'https://th.bing.com/th/id/OIP.-F22iswNrF7roSawXo1YsQHaHa?w=173&h=180&c=7&r=0&o=7&pid=1.7&rm=3',
                'developer' => 'Taito'
            ],
            [
                'id' => 6,
                'title' => 'Tetris',
                'year' => 1984,
                'platform' => 'Multiple',
                'genre' => 'Puzzle',
                'description' => 'El juego de puzzle más adictivo de todos los tiempos. Coloca las piezas para completar filas.',
                'image' => 'https://e01-phantom-elmundo.uecdn.es/109a37d92cded903df0c05b42c0ac6ae/resize/1200/f/webp/assets/multimedia/imagenes/2023/07/28/16905463193747.png',
                'developer' => 'The Tetris Company'
            ],
        ];
    }

    /**
     * Mostrar lista general de juegos
     */
    public function index(): View
    {
        $games = $this->getGames();
        return view('games.index', compact('games'));
    }

    /**
     * Mostrar detalle de un juego específico
     */
    public function show(int $id): View
    {
        $games = $this->getGames();
        $game = collect($games)->firstWhere('id', $id);

        if (!$game) {
            abort(404, 'Juego no encontrado');
        }

        return view('games.show', compact('game'));
    }
}
