@extends('layouts.app')

@section('content')
    
    <section id="conteudo" class="d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <img id="linha-branca-esquerda" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-heitor" class="align-text-center col-md-4">CADASTRAR NOVA CONTA - DADOS PESSOAIS</h1>
            <img id="linha-branca-direita-heitor" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
        </div>
        <div class="row">
            <p class="col-md-12 align-text-center">
                Para fazer o uso da nossa plataforma é necessário o cadastro de seus dados como cliente
                ou prestador de serviço. Preencha o formulário abaixo com dados válidos para criar uma conta.
                Os campos marcados com * são obrigatórios.
            </p>
        </div>
    </section>

@endsection