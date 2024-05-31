<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TipoContaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('cadastro.nova-conta');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Produto $produto)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $tipoConta = new \App\Models\TipoConta;
        $tipoConta->tipoConta = $request->tipoConta;
        $tipoConta->save();

        return Redirect()->route('dados-pessoais', ['tipoConta_id' => $tipoConta -> tipoConta_id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Produto $produto)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $item_id)
    {

    }


    public function search(Request $request)
    {

    }
}
