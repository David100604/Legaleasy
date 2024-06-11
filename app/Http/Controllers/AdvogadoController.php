<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvogadoController extends Controller
{
    public function index($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('advogados.advogados', compact('usuario'));
    }
}
