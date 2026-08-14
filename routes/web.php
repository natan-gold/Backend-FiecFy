<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisaController;
use App\Http\Controllers\MusicaController;

Route::get('/', function () {  /* A rota é o '/' (que entra na página do Larave) na qual puxa a função sem nome */
    return view('welcome');
});

//Criando uma Classe

class FaixaMusical {
    //Propriedades Tipadas
    public string $titulo;
    public string $artista;

    //Método cotructor (roda quando cham o 'new')
    public function __construct( string $tituloDesejado, string $artistaDesejado) {
        $this -> titulo = $tituloDesejado;
        $this -> artista = $artistaDesejado;
    }

    //Ação do Objeto
    public function getDetalhes() : string {
        // Usando ponto (.) para encontrar
        return $this->titulo . " - " . $this->artista;
    }
};


//Criando um endpoint para o Objeto

Route::get('/minha-musica', function() {
    //Instrumento Objeto

    $musica1 = new FaixaMusical('Boheian', 'Rhapsody');

    return response() -> json($musica1);
});

//Criando rotas

Route::get('/teste', function() {
    return [
        'sistema' => 'API Clone do Spotify',
        'versão' => '1.0',
        'status' => 'conectado'
    ];
});
/*
Route::get('/teste2', function() {
    return [
        'sistema2' => 'API Clone 2 do Spotify',
        'versão2' => '2.0',
        'status' => 'conectado'
    ];
}); */


//Desafio 1 e 2

class Artista {
    public string $nome;
    public string $estilo;
    public int $ouvintesMensais;
    public string $criador;
    public string $musicas;

    public function __construct (string $nomeDesejado, string $estiloDesejado, int $ouvintesDoArtista, string $criadorDesejado, string $musicasDesejadas)
    {
        $this -> nome = $nomeDesejado;
        $this -> estilo = $estiloDesejado;
        $this -> ouvintesMensais = $ouvintesDoArtista;
        $this-> criador = $criadorDesejado;
        $this-> musicas = $musicasDesejadas;
    }

    public function informacoes () : string {
        return $this -> nome . ' - ' . $this -> estilo . ' - ' .$this -> criador . ' - ' . $this -> musicas;
    }

    public function isFamoso() {
        return $this-> ouvintesMensais >= 1000000;
    }
}

//Desafio 3

Route::get('/ex3', function() {

     $artista1 = new Artista ('Billie Jean', 'Pop', 10000000, 'Michael Jackson', 'Bad, Smooth Criminal, Remember the Time...');
     $artista2 = new Artista('Sicko Mode', 'Trap', 10000, 'Travis Scott', 'FEIN, Goosebumps, Hight In The Room...');
    $artista3 = new Artista('Negro Drama', 'Rap', 1000000, 'Racionais Mcs', 'Diário de um detento, Um Homem na Estrada, O Mágico de OZ...');

    $artista4 = [$artista1, $artista2, $artista3];


    return response() -> json(($artista4));
});

//Desafio 4

/*Route::get("/ex4", function(){
    $artista5 = new Artista ('Taylor Swift', 'Pop', 10000000);
    $artista6 = new Artista('Drake', 'Trap', 10000);
    $artista7 = new Artista('Racionais Mcs', 'Rap', 1000000);

     $artistas = [$artista5, $artista6, $artista7];

     $famosos = array_filter($artistas, function ($artista) {
        return $artista->isFamoso();
     });

     return response() -> json((array_values($famosos)));
});*/

//Desafio 5

class Playlist {
    public string $nomes;
    public string $criador;
    public string $musicas;

     public function __construct (string $nomeDesejado, string $criadorDesejado, string $musicasDesejadas)
    {
        $this -> nomes = $nomeDesejado;
        $this-> criador = $criadorDesejado;
        $this-> musicas = $musicasDesejadas;
    }

     public function informacoes () : string {
        return $this -> nomes . ' - ' . $this -> criador . ' - ' . $this -> musicas;
    }
};

Route::get("/ex5", function(){
  $Playlist1 = new Playlist('Billie Jean', 'Michael Jackson', 'Bad, Smooth Criminal, Remember the Time...');
  $Playlist2 = new Playlist('Sicko Mode','Travis Scott', 'FEIN, Goosebumps, Hight In The Room...');
  $Playlist3 = new Playlist('Negro Drama','Racionais Mcs', 'Diário de um detento, Um Homem na Estrada, O Mágico de OZ...');
 
 $Playlists = [$Playlist1, $Playlist2, $Playlist3];

  return response() -> json($Playlists);
  });

  //Desafio 6

  Route::get('/caos', function () {

    function aumentarOuvintes(int $quantidade): string
    {
        return $quantidade + 1000;
    }
    return aumentarOuvintes("um milhão");
});

//Artista
Route::get("/artista", [ArtisaController::class, "index"]);
Route::get("/artista/{id}", [ArtisaController::class, "index"]);


