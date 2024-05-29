<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DadosPessoaisController extends Controller
{

    public function index($tipoConta_id)
    {
        $tipoConta = \App\Models\TipoConta::find($tipoConta_id);

        if (!$tipoConta) {
            // Se não encontrar, redirecione ou lance um erro
            return redirect()->back()->withErrors(['error' => 'TipoConta não encontrada']);
        }

        return view('cadastro.dados-pessoais', compact('tipoConta'));
    }
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

        $dados->tipoConta_id = $request->tipoConta_id;

        $dados->save();

        return Redirect()->route('endereco');
    }
}
