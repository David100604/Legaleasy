<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosPessoaisController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $dados = new \App\Models\DadosPessoais;
        $dados->nomeUsuario = $request->nome_usuario;
        $dados->nome = $request->nome_completo;
        $dados->senha = $request->senha;
        $dados->cpf = $request->cpf;
        $dados->email = $request->email;
        $dados->telefone = $request->telefone;
        
        $dados->save();

        return Redirect()->route('endereco');
    }
}
