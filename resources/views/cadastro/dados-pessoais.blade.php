@extends('layouts.app')

@section('content')
    
    <section class="d-flex flex-column justify-content-center">

        <div class="justify-content-center">

            <div class="row justify-content-center">
                <img id="linha-branca-esquerda" class="align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
                <h1 id="titulo-heitor" class="text-center col-xl-4">CADASTRAR DADOS PESSOAIS</h1>
                <img id="linha-branca-direita-heitor" class="align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            </div>
            <div id="info-cadastro-heitor" class="row justify-content-center f-texto">

                <div class="text-left col-9">
                    <p class="text-center">
                        Para fazer o uso da nossa plataforma é necessário o cadastro de seus dados como cliente
                        ou prestador de serviço. 
                        Preencha o formulário abaixo com dados válidos para criar uma conta.
                        Os campos marcados com * são obrigatórios.
                    </p>
                </div>
            </div>
            <div id="info-cadastro" class="row justify-content-center">
                <div class="text-left col-9">
                    <h3 id="subtitulo-heitor" class=" col-xl-4" class="text-left">Insira suas informações nos campos abaixo:</h3>
                </div>
            </div>

            <div id="info-cadastro-heitor" class="row justify-content-center f-texto">
                <p>Nome de usuário</p>
            </div>
            <div id="inputs-cadastro" class="justify-content">

            </div>
        </div>
    </section>

@endsection