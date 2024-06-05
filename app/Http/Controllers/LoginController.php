<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index(){
        return view('cadastro.login');
    }

    public function store(Request $request){
        

        $email = $request->email;

        // Encontre o usuário com o email especificado
        $usuario = \App\Models\Usuario::where('email', $email)->first();

        // Imprima os detalhes do usuário (você pode modificar essa parte conforme necessário)
        if ($usuario) {
            $senha = Crypt::decryptString($usuario->senha);
            if ($senha == $request->senha){
                if ($usuario->tipoConta == 'Cliente'){
                    return Redirect()->route('home-cliente', ['usuario_id' => $usuario->usuario_id]);
                } else if ($usuario->tipoConta == 'Advogado'){
                    return Redirect()->route('home-advogado', [$usuario]); 
                }
            } else {
                echo "senha incorreta";
            }
        } else {
            echo "Nenhum usuário encontrado com o email $email\n";
        }
    }

    public function destroy(){
        return Redirect()->route('home'); 
    }


}
