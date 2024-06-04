<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('cadastro.login');
    }

    public function store(Request $request){
        

        $email_a_buscar = $request->email;

        // Encontre o usuário com o email especificado
        $usuario = \App\Models\Usuario::where('email', $email_a_buscar)->first();

        // Imprima os detalhes do usuário (você pode modificar essa parte conforme necessário)
        if ($usuario) {
            $t = \App\Models\TipoConta::find($usuario->tipoConta_id);
            $tipoConta = $t->tipoConta;
            if ($usuario->senha == $request->senha){
                if ($tipoConta == 'Cliente'){
                    return Redirect()->route('home-cliente');
                } else if ($tipoConta == 'Advogado'){
                    return Redirect()->route('home-advogado');
                }
            } else {
                echo "senha incorreta";
            }
        } else {
            echo "Nenhum usuário encontrado com o email $email_a_buscar\n";
        }
    }


}
