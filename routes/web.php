<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {  /* A rota é o '/' (que entra na página do Larave) na qual puxa a função sem nome */
    return view('welcome');
});

//Criando uma Classe

class FaixaMusical {
    //Propriedades Tipadas
    public string $titulo;
    public string $artista;

    //Método cotructor (roda quando cham o 'new')
    public function __construct( string $tituloDesejado, string $artistaDesejado, string $nomeDesejado, string $estiloDesejado) {
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

    $musica1 = new FaixaMusical('Boheian', 'Rhapsody', 'Queen');

    return response() -> json(($musica1));
});


/*Criando rotas

Route::get('/teste', function() {
    return [
        'sistema' => 'API Clone do Spotify',
        'versão' => '1.0',
        'status' => 'conectado'
    ];
});

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

    public function __construct (string $nomeDesejado, string $estiloDesejado){
        $this -> nome = $nomeDesejado;
        $this -> estilo = $estiloDesejado;
    }

    public function informacoes () : string {
        return $this -> nome . ' - ' . $this -> estilo;
    }
};

//Desafio 3

Route::get('/ex3' function() {
    return
     $artista1 = new Artista('Boheian', 'Rhapsody', 'Queen');

    return response() -> json(($musica1));
});


