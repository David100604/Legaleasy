<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class UsuarioController extends Controller
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
        $validatedData = $request->validate([
            'cpf' => ['required', 'string', 'size:14', 'unique:usuarios,cpf'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios,email'],
            'telefone' => ['required', 'string','regex:/^\(\d{2}\)\s\d{4,5}-\d{4}$/'],
            'nome_completo' => ['required', 'regex:/^[\pL\s]+$/u'],
            'nome_usuario' => ['required', 'string', 'unique:usuarios,nomeUsuario'],
        ], [
            'cpf.required' => 'O CPF é obrigatório.',
            'cpf.size' => 'O CPF deve ter exatamente 11 dígitos.',
            'cpf.unique' => 'Este CPF já está cadastrado.',
            'email.required' => 'O email é obrigatório.',
            'email.email' => 'O email deve ser um endereço de email válido.',
            'email.max' => 'O email não pode ter mais de 255 caracteres.',
            'email.unique' => 'Este email já está cadastrado.',
            'telefone.required' => 'O telefone é obrigatório.',
            'nome_completo.regex' => 'Não pode conter números.',
            'nome_usuario.required' => 'O campo nome de usuário é obrigatório.',
            'nome_usuario.unique' => 'Este nome de usuário já está em uso.',
        ]);

        $tipoConta = \App\Models\TipoConta::find($request->tipoConta_id);

        $dados = new \App\Models\Usuario;
        $dados->nomeUsuario = $request->nome_usuario;
        $dados->nome = $request->nome_completo;
        $dados->senha = Crypt::encryptString($request->senha);
        $dados->cpf = $request->cpf;
        $dados->email = $request->email;
        $dados->telefone = $request->telefone;
        $dados->foto = "advogados/foto-perfil-padrao.png";

        $dados->tipoConta = $tipoConta->tipoConta;

        $dados->save();

        return Redirect()->route('endereco', ['usuario_id' => $dados -> usuario_id]);
    }
}
