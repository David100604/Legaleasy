@extends('layouts.app')

@section('content')
    
    <section id="conteudo" class="d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <img id="linha-branca-esquerda" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-heitor" class="align-text-center col-md-4">CADASTRAR DADOS PESSOAIS</h1>
            <img id="linha-branca-direita-heitor" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
        </div>
        <div id="info-cadastro-heitor">
            <p class="text-center">
                Para fazer o uso da nossa plataforma é necessário o cadastro de seus dados como cliente
                ou prestador de serviço. 
                <br>Preencha o formulário abaixo com dados válidos para criar uma conta.
                Os campos marcados com * são obrigatórios.
            </p>
        </div>
        <div id="info-cadastro-heitor">
            <h3 class="text-left" id="subtitulo-heitor" class="align-text-center col-md-4">Insira suas informações nos campos abaixo:</h3>
        </div>

        <div id="inputs-cadastro" class="justify-content">

        </div>
    </section>

@endsection