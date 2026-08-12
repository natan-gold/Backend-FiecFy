<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtisaController extends Controller

//============================================
//Método Index: Devolve a cleção inteira
//============================================
{
    public function index () {
        $colecaoDeArtistas = [
        ['nome' => 'The Weeknd', 'estilo' => 'R&G / Pop'],
        ['nome' => 'Daft Punk', 'estilo' => 'Eletrônica Clássica'],
        ];

        // Envelope serializado

        return response() -> json ([
            'sucesso' => true,
            'dados' => $colecaoDeArtistas
        ]); 
    }
}

    //============================================
    //Método Index: Devolve um item buscado por 10
    //============================================

    /*puclic funtion show ($id) {
        return response() -> json ([
            'sucesso' =>
        ])
    }*/