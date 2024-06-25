<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function index()
    {
        return view('cadastro.login');
    }

    public function store(Request $request)
    {
        // Validação dos campos
        $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);

        $email = $request->email;

        // Encontre o usuário com o email especificado
        $usuario = \App\Models\Usuario::where('email', $email)->first();

        // Verifique as credenciais do usuário
        if ($usuario) {
            if ($usuario->tipoConta == 'Administrador') {
                if ($usuario->senha == $request->senha) {
                    return redirect()->route('home-cliente', ['usuario_id' => $usuario->usuario_id]);
                } else {
                    return back()->withErrors(['senha' => 'Senha incorreta']);
                }
            } else {
                $senha = Crypt::decryptString($usuario->senha);
                if ($senha == $request->senha) {
                    if ($usuario->tipoConta == 'Cliente') {
                        return redirect()->route('home-cliente', ['usuario_id' => $usuario->usuario_id]);
                    } elseif ($usuario->tipoConta == 'Advogado') {
                        return redirect()->route('home-advogado', [$usuario]);
                    }
                } else {
                    return back()->withErrors(['senha' => 'Senha incorreta']);
                }
            }
        } else {
            return back()->withErrors(['email' => 'Nenhum usuário encontrado com o email fornecido']);
        }
    }

    public function destroy()
    {
        return redirect()->route('home');
    }

}
