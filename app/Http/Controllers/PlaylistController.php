<?php

namespace App\Http\Controllers;

class PlaylistController extends Controller

{
    //Exercício 1 (Método GET index)
    public function index() {
        return response() ->json([
            'playlist' => [
                ['id' => 1, 'nome' => 'Rock', 'descricao' => 'Playlist de rock barulhento!'],
                ['id' => 2, 'nome' => 'Rap', 'descricao' => 'Playlist de ficar na vibe boa'],
                ['id' => 3, 'nome' => 'Relax', 'descricao' => 'Playlist relaxante'],
                ['id' => 4, 'nome' => 'Treino', 'descricao' => 'Playlist para ficar no shape'],
                ['id' => 5, 'nome' => 'Anos 70-80', 'descricao' => 'Playlist de músicas antigas'],
            ]
        ]);
    }

    //Exercício 3 (Método POST store)
     public function store() {

        return response() -> json([

            'mensagem' => "Playlist criada com sucesso!",
        ], 201);
     }
    
    //Exercício 5 (Método Delete)
     public function destroy(int $id) {

       return response() -> json([
        'mensagem' => "A Playlist ${$id} foi excluída!"
       ]);
     }
};

