@extends('layouts.cadastros')

@section('content')

    <section class="d-flex flex-column justify-content-center">

        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-login" class="titulo col-xl-4 text-center">FAÇA LOGIN NA PLATAFORMA</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>

        <div  class="row justify-content-center f-texto">
            <div class="text-left col-9">
                <p id="info-login" class="text-center col-12">
                    Insira seus dados de login nos campos abaixo:
                </p>
            </div>
        </div>

        <div id="inputs-cadastro" class="row justify-content-center mt-1">
            <div class="col-5 col-md-4 text-left d-flex flex-column">
                <label for="tipo-conta" class="f-texto">Nome de usuário</label>
                <input type="text" class="p-2" placeholder="Insira seu nome de usuário">
            </div>
        </div>

        <div id="inputs-cadastro" class="row justify-content-center mt-3">
            <div class="col-5 col-md-4 text-left d-flex flex-column">
                <label for="tipo-conta" class="f-texto">Senha</label>
                <input type="password" class="p-2" placeholder="Insira sua senha">
            </div>
        </div>

    </section>



@endsection
