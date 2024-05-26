@extends('layouts.app')

@section('content')
    
        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-login" class="titulo col-xl-4 text-center">BEM VINDO(A), USERNAME</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>

        <div class="row mt-3">
            <div id="subtitulo-cliente" class="titulo col-12 text-center align-items-center">
                <p class="m-0 p-1">LEGALEASY - PLATAFORMA DE ATENDIMENTO PARA REQUISIÇÃO DE DEFENSORIA PÚBLICA</p>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-9 text-left">
                <h2 class="titulo">O que é?</h2>
                <p class="f-texto">Atendimeto a pessoas de baixa renda com necessidade de representação jurídica em processos legais.</p>
                <h2 class="titulo">Quem pode utilizar?</h2>
                <p class="f-texto">Qualquer cidadão regulamentado pelo estado nos conformes da lei. Quaisquer documentos necessários já foram inseridos durante o processo de cadastro da conta.</p>
                <h2 class="titulo">Quanto devo pagar?</h2>
                <h2 class="titulo">Como usar a plataforma?</h2>
            </div>
        </div>

@endsection