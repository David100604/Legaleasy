@extends('layouts.app')

@section('content')

    <section class="d-flex flex-column justify-content-center">

        <div class="justify-content-center">

        <div class="row justify-content-center" style="border: 1px solid red">
            <img id="linha-branca-esquerda" class="align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="col-xl-4 text-center">CADASTRAR NOVA CONTA</h1>
            <img id="linha-branca-direita" class="align-self-center col-xl-4  d-none d-xl-block" src="../images/linha-branca.png" alt="">
        </div>

        <div id="info-cadastro" class="row justify-content-center">
            <div class="text-left col-9" style="border: 1px solid red">
                <p class="text-center col-12 d-none d-md-block">
                    Escolha o tipo de conta que deseja cadastrar. 
                    Campos de informação adicionais podem ser requeridos dependendo da seleção.
                </p>
                <p class="text-center d-md-none">
                    Escolha o tipo de conta que deseja cadastrar. 
                </p>
            </div>
        </div>

        <div id="info-cadastro" class="row justify-content-center">
            <div class="text-left col-9" style="border: 1px solid red">
                <h3 class="text-left">informação</h3>
            </div>
        </div>

        <div id="inputs-cadastro" class="justify-content">

        </div>

    </section>

@endsection