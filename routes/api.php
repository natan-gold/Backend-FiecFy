<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\MusicaController;

//Agrupando todas as rotas que lidam músicas

Route::prefix('musicas') -> group(function(){
    
    //Dispara com GET ou URL api/musicas
    Route::get('/',[MusicaController::class,'index']);

    //Dispara com POST na URL /api/musicas
    Route::post('/', [MusicaController::class, 'index']);
    });



//------Prática de Exercícios-------\\



    //Exercício 6 (Grupo de Rotas)

    Route::prefix('playlists') -> group(function(){
    //Exercício 2

    //Dispara o GET da /api/playlist
    Route::get('/', [PlaylistController::class, 'index']);


    //Exercício 4

    //Dispara o POST da /api/playlist
    Route::post('/', [PlaylistController::class, 'store']);

    //Exercício 5

    //Dispara DELETE removendo o JSON
    Route::delete('/{id}', [PlaylistController::class, 'destroy']);

});