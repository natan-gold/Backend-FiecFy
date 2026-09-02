<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artist;

class ArtisaController extends Controller

{
    //1 CREATE (POST)
        public function store(Request  $request){
            //Eloquent cria a linha, injeta os timestamp e já devolve o objeto na tela
          $artista = Artist::create($request -> all());
          return response() ->json($artista,201);
        }

    //2 RREAL ALI (GET)
    public function index()
    {
        $artista = Artist::all();
        return response()->json($artista, 200);
    }

    //3 READ ONE (GET)
    public function show ( int $id) {
        //FinderOrFail já lido com o erro 404 se o ID não existir
        $artista = Artist::findOrFail($id);

        return response() -> json($artista, 200);
    }

    //4 UPDATE (PUT/PATCH)

    public function update(Request $request, int $id) {
        $artista = Artist::findOrFail($id);
        //Atualiza a instâcia e diaspar o UPDATE no banco
        $artista->update($request->all());

        return response() -> json($artista,200);
    }

    //5 DELTE (EXCLUIR)

    public function detroy( int $id) {
        $artista = Artist::findOrFail($id);

        //Executar o DELETE FTOM  artists WHERE id=?

        $artista->delete();

        return response() -> json(['mensagem' => 'Apagado com sucesso'], 200);
    }
};


    /*puclic funtion show ($id) {
        return response() -> json ([
            'sucesso' =>
        ])
    }*/

        /*public function index () {
        $colecaoDeArtistas = [
        ['nome' => 'The Weeknd', 'estilo' => 'R&G / Pop'],
        ['nome' => 'Daft Punk', 'estilo' => 'Eletrônica Clássica'],
        ];

        // Envelope serializado

        return response() -> json ([
            'sucesso' => true,
            'dados' => $colecaoDeArtistas
        ]); */