<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    
        $dados = new \App\Models\Endereco;
        $dados->CEP = $request->cep;
        $dados->UF = $request->uf;
        $dados->cidade = $request->cidade;
        $dados->bairro = $request->bairro;
        $dados->rua = $request->rua;
        $dados->numero = $request->numero;
        $dados->edificio = $request->edificio;
        $dados->complemento = $request->complemento;
            
        $dados->save();
    
        return Redirect()->route('endereco');
    }
}
    

