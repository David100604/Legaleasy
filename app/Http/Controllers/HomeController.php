<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function cliente($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('home-pages.home-cliente', compact('usuario'));
    }

    public function advogado($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);
        $casos = \App\Models\Caso::all();
        

        return view('home-pages.homepage-advogado', ['casos' => $casos], compact('usuario'));
    }
}
