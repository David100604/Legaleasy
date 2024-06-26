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
