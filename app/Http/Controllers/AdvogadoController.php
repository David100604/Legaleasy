<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvogadoController extends Controller
{
    public function index($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);

        $advogados = \App\Models\Usuario::Where("tipoConta", "like", "Advogado")->with('advogado')->get();

        return view('advogados.advogados', ['advogados' => $advogados], compact('usuario'));
    }

}
