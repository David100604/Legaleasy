<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PerfilController extends Controller
{
    public function cliente($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);
        $casos = \App\Models\Caso::all(); 


        return view('perfil.perfil-cliente', ['casos' =>$casos],compact('usuario'));
        
    }

    public function casocliente(Request $request, $usuario_id){
        $usuario = \App\Models\Usuario::find($request->usuario_id); 
        $casos = \App\Models\Caso::all(); 
        

    }

    public function advogado($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('perfil.perfil-advogado', compact('usuario'));
    }

    public function vendo_cliente($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('home-pages.home-cliente', compact('usuario'));
    }

    public function vendo_advogado($usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('home-pages.homepage-advogado', compact('usuario'));
    }
}
