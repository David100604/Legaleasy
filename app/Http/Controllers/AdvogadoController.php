<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdvogadoController extends Controller
{
    public function index($usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        $advogados = \App\Models\Usuario::where("tipoConta", "Advogado")->with('advogado')->get();

        return view('advogados.advogados', compact('advogados', 'usuario'));
    }

    public function salvarImagem(Request $request)
    {
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $requestImage = $request->imagem;

            $extension = $requestImage->extension();

            $imageName = md5('/advogados/' . $requestImage->getClientOriginalName()) . '_' . strtotime("now") . "." . $extension;

            $request->imagem->move(public_path('images'), $imageName);
            
            return $imageName;
        } else {
            return null;
        }
    }

    public function editar_foto(Request $request, $usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        if (!$usuario) {
            return redirect()->back()->withErrors(['error' => 'Usuário não encontrado']);
        }

        if($request->hasFile('imagem')){
            $usuario->foto = $this->salvarImagem($request);
            $usuario->save();
        } else{
            $usuario->foto = $usuario->foto;
        }

        return view('perfil.perfil-advogado', compact('usuario'));
    }

    public function editar_sobre(Request $request, $usuario_id)
    {
        $usuario = \App\Models\Usuario::find($usuario_id);

        if (!$usuario) {
            return redirect()->back()->withErrors(['error' => 'Usuário não encontrado']);
        }

        $sobre = $request->input('sobre');

        if($sobre){
            $usuario->descricao = $sobre;
            $usuario->save();
        } else{
            $usuario->descricao = $usuario->descricao;
        }

        return view('perfil.perfil-advogado', compact('usuario'));
    }

    public function search(Request $request, $usuario_id)
    {
        if (empty($request->nome) && empty($request->tipoAdvogado)) {
            return redirect()->route('advogados.index', ['usuario_id' => $usuario_id])->with('error', 'Favor preencher ao menos um campo');
        } else {
            $usuario = \App\Models\Usuario::find($usuario_id);

            $nome = $request->input('nome');
            $tipo = $request->input('tipoAdvogado');

            $query = \App\Models\Usuario::where("tipoConta", "Advogado")->with('advogado');

            if ($nome) {
                $query->where('nome', 'like', "%$nome%");
            }

            if ($tipo) {
                $query->whereHas('advogado', function ($q) use ($tipo) {
                    $q->where('tipoAdvogado', 'like', "%$tipo%");
                });
            }

            $advogados = $query->get();

            return view('advogados.advogados', compact('advogados', 'usuario'));
        }
    }
}
