<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DadosCurricularesController extends Controller
{
    public function index($usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        if (!$usuario) {
            // Se não encontrar, redirecione ou lance um erro
            return redirect()->back()->withErrors(['error' => 'Usuário não encontrado']);
        }

        return view('cadastro.dados-curriculares', compact('usuario'));
    }

     /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'oab' => ['required', 'regex:/^[A-Z]{2}\d{6}$/']
        ], [
            'oab.required' => 'O campo Número da OAB é obrigatório.',
            'oab.regex' => 'O número da OAB é inválido. Formato correto: UFoooooo.',
        ]);


        $dados = new \App\Models\DadosCurriculares;
        $dados->OAB = $request->oab;
        $dados->tipoAdvogado = $request->tipoAdvogado;

        $dados->usuario_id = $request->usuario_id;

        $dados->save();

        $usuario = \App\Models\Usuario::find($request->usuario_id);

        return Redirect()->route('home-advogado', ['usuario_id' => $usuario->usuario_id]);
    }
}
