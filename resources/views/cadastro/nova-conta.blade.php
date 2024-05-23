@extends('layouts.app')

@section('content')

    <section id="conteudo" class="d-flex flex-column justify-content-center">

        <div class="row justify-content-center">
            <img id="linha-branca-esquerda" class="align-self-center col-md-4 d-none d-md-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="col-md-4 text-center">CADASTRAR NOVA CONTA</h1>
            <img id="linha-branca-direita" class="align-self-center col-md-4  d-none d-md-block" src="../images/linha-branca.png" alt="">
        </div>

        <div id="info-cadastro">
            <p class="text-center">
                Escolha o tipo de conta que deseja cadastrar. 
                Campos de informação adicionais podem ser requeridos dependendo da seleção.
            </p>
        </div>

        <div id="inputs-cadastro" class="justify-content">

        </div>

    </section>

@endsection