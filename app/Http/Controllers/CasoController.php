<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CasoController extends Controller
{
    public function index($usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('casos.registrar-caso', compact('usuario'));
    }

    public function store(Request $request)
    {
        $usuario = \App\Models\Usuario::find($request->usuario_id);

        $caso = new \App\Models\Caso;
        $caso->titulo = $request->titulo;
        $caso->descricao = $request->descricao;
        $caso->tipoCaso = $request->tipoCaso;
        $caso->arquivo = $this->salvarArquivo($request);
        $caso->cliente = $usuario->nome;

        $caso->save();

        

        return Redirect()->route('home-cliente', ['usuario_id' => $usuario -> usuario_id]);
    }

    public function salvarArquivo(Request $request)
    {
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {
            $requestArquivo = $request->arquivo;

            $extension = $requestArquivo->extension();

            $arquivoName = md5($requestArquivo->getClientOriginalName()) . '_' . strtotime("now") . "." . $extension;

            $request->arquivo->move(public_path('casos/arquivos'), $arquivoName);
            
            return $arquivoName;
        } else {
            return null;
        }
    }

    public function casosAbertos($usuario_id){
        $casos = \App\Models\Caso::all();

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('casos.casos-abertos', ['casos' => $casos], compact('usuario'));
    }
}
