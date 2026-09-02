<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\MusicaController;
use App\Http\Controllers\AlbumsController;
use App\Http\Controllers\ArtisaController;

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

Route::prefix("artistas")->group(function(){

    Route::post("/", [ArtisaController::class, "store"]);//CREATE
    Route::get("/", [ArtisaController::class, "index"]);//READ ME
    Route::get("/{id}", [ArtisaController::class, "show"]);//READ ONE
    Route::put("/{id}", [ArtisaController::class, "update"]);//UPDATE
    Route::delete("/{id}", [ArtisaController::class, "destroy"]);//DELETE

});

//Exercício de CRUD

Route::prefix("albums")->group(function(){

    Route::post("/", [AlbumsController::class, "store"]);//CREATE
    Route::get("/", [AlbumsController::class, "index"]);//READ ME
    Route::get("/{id}", [AlbumsController::class, "show"]);//READ ONE
    Route::put("/{id}", [AlbumsController::class, "update"]);//UPDATE
    Route::delete("/", [AlbumsController::class, "destroy"]);//DELETE

});