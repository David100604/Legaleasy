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
        $dados->tipoConta = $request->tipoConta;
        $tipoConta->save();

        return Redirect()->route('dados-pessoais');
    }
}
