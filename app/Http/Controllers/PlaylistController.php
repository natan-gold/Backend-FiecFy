<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaylistController extends Controller

{
    //Exercício 1 (Método GET index)
    public function index() {
        return response() ->json([
            'feito' => true,
            'mensagem' => 'listagem de todas as Playlists feitas com sucesso!'
        ]);
    }

    //Exercício 3 (Método POST store)
     public function store(Request $request) {

        $tituloRecebido = $request -> input('titulo');
        $artistaRecebido = $request -> input('artista');
        $musicaRecebida = $request -> input('musica');

        return response() -> json([
            'sucesso' => true,
            'mensagem' => "A ${musicaRecebida}'${tituloRecebido} de
            '${artistaRecebido}' foi salva!",
            'dados_recebidos' => $request->all() //Mostrar todas que chegou
        ], 201);
     }
};