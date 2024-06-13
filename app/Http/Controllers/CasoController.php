<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CasoController extends Controller
{
    public function index($usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('casos.registrar-caso', compact('usuario'));
    }

    public function store(Request $request)
    {
        $usuario = \App\Models\Usuario::find($request->usuario_id);
        $rules = [
            'titulo' => 'required|string|max:255',
            'descricao' => 'required|string',
            'tipoCaso' => 'required|string',
            'arquivo' => 'required|file|mimes:jpeg,png,pdf,docx', // ajuste as extensões conforme necessário
        ];
    
        // Defina as mensagens de erro personalizadas (opcional)
        $messages = [
            'titulo.required' => 'O título é obrigatório.',
            'descricao.required' => 'A descrição é obrigatória.',
            'tipoCaso.required' => 'O tipo de caso é obrigatório.',
            'arquivo.required' => 'O arquivo é obrigatório.',
            'arquivo.mimes' => 'O arquivo deve ser uma imagem ou documento válido (jpeg, png, pdf, docx).',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

            // Execute a validação
        $validator = Validator::make($request->all(), $rules, $messages);

        // Verifique se a validação falhou
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }


        $caso = new \App\Models\Caso;
        $caso->titulo = $request->titulo;
        $caso->descricao = $request->descricao;
        $caso->tipoCaso = $request->tipoCaso;
        $caso->arquivo = $this->salvarArquivo($request);
        $caso->cliente = $usuario->nome;

        $caso->save();

        

        return Redirect()->route('home-cliente', ['usuario_id' => $usuario -> usuario_id]);
    }

    public function salvarArquivo(Request $request)
    {
        if ($request->hasFile('arquivo') && $request->file('arquivo')->isValid()) {
            $requestArquivo = $request->arquivo;

            $extension = $requestArquivo->extension();

            $arquivoName = md5($requestArquivo->getClientOriginalName()) . '_' . strtotime("now") . "." . $extension;

            $request->arquivo->move(public_path('casos/arquivos'), $arquivoName);
            
            return $arquivoName;
        } else {
            return null;
        }
    }

    public function casosAbertos($usuario_id){
        $casos = \App\Models\Caso::all();

        $usuario = \App\Models\Usuario::find($usuario_id);

        return view('casos.casos-abertos', ['casos' => $casos], compact('usuario'));
    }

    public function search(Request $request, $usuario_id)
    {
        if(empty($request->titulo)) {
            return redirect()->route('casos-abertos', ['usuario_id' => $usuario_id])->with('error', 'Favor preencher todos os campos');
        }
        else 
        {
            $usuario = \App\Models\Usuario::find($usuario_id); // Busca o usuário

            $pesquisa = $request->input('titulo');
            $casos = \App\Models\Caso::where('titulo', 'like', "%$pesquisa%")->get();

            return view('casos.casos-abertos', ['casos' => $casos, 'usuario' => $usuario]); // Passa o usuário para a view
        }
    }
    
    public function caso($caso_id, $usuario_id){

        $usuario = \App\Models\Usuario::find($usuario_id);
        $caso = \App\Models\Caso::find($caso_id);

        // return view('casos.caso', compact('caso'), compact('usuario'));
        return redirect()->route('casos.index')->with('success', 'Caso criado com sucesso!');
    }
}
