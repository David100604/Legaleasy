<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{

    public function index($usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        if (!$usuario) {
            // Se não encontrar, redirecione ou lance um erro
            return redirect()->back()->withErrors(['error' => 'Usuário não encontrado']);
        }



        return view('cadastro.endereco', compact('usuario'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $endereco = new \App\Models\Endereco;
        $endereco->CEP = $request->cep;
        $endereco->UF = $request->uf;
        $endereco->cidade = $request->cidade;
        $endereco->bairro = $request->bairro;
        $endereco->rua = $request->rua;
        $endereco->numero = $request->numero;
        $endereco->edificio = $request->edificio;
        $endereco->complemento = $request->complemento;

        $endereco->usuario_id = $request->usuario_id;

        $endereco->save();

        $usuario = \App\Models\Usuario::find($request->usuario_id);
        $tipoConta = \App\Models\TipoConta::find($usuario->tipoConta_id);

        if ($tipoConta->tipoConta == "Cliente"){
            return Redirect()->route('home-cliente', ['usuario_id' => $usuario->usuario_id]);
        } else {
            return Redirect()->route('dados-curriculares', ['usuario_id' => $usuario -> usuario_id]);
        };


    }
}


