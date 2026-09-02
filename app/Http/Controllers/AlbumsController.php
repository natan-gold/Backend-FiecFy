<?php

namespace App\Http\Controllers;

use App\Models\Albums; //importar o Model

use Illuminate\Http\Request;

class AlbumsController extends Controller
{
    public function store(Request $request){
        //O eloquete pega os aods, monta o SQL e salva no banco sozinho
        $novoAlbums = Albums::create($request->all());

        return response()->json($novoAlbums, 201);
    }

    public function index()
    {  
        $Albums = Albums::all();

        return response()->json($Albums, 200);
    }


    public function show(int $id) 
    {
        $Albums = Albums::findOrFail($id);

        return response() -> json($Albums, 200);
    }

    public function update(Request $request, int $id) 
    {
        $Albums = Albums::findOrFail($id);
        //Atualiza a instâcia e diaspar o UPDATE no banco

        $Albums->update($request->all());

        return response() -> json($Albums,200);
    }

     public function destroy(int $id) 
     {
        $Albums = Albums::findOrFail($id);

        //Executar o DELETE FTOM  Albumss WHERE id=?

        $Albums->delete();

        return response() -> json(['mensagem' => 'Apagado com sucesso'], 200);
     }
}