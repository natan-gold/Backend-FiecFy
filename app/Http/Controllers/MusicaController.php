<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicaController extends Controller
{
    //Verbo HTTP associado: GET
    public function index() {
    return response() -> json([
        'sucesso'=> true,
        'mensagem' => "listagem de todas as músicas simluado com sucesso"
    ]);
 }

     //Verbo HTTP associado: POST
    //Recebe o Request injetado pela Postman

    public function store(Request $request) {
        //Enviar as chaves que chegam no corpo (JSON) da requisição
        $tituloRecebido = $request -> input('titulo');
        $artistaRecebido = $request -> input('artista');

        //aqui chegar as informaçãoes do BD (Banco de Dados)

        return response() -> json([
            'sucesso' => true,
            'mensagem' => "A música'${tituloRecebido} de '${artistaRecebido}' foi salva!",
            'dados_recebidos' => $request->all() //Mostrar todas que chegou
        ], 201);
    }
}
