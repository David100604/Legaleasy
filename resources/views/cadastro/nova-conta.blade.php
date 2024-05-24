@extends('layouts.app')

@section('content')

    <section class="d-flex flex-column justify-content-center">

        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="titulo col-xl-4 text-center">CADASTRAR NOVA CONTA</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>

        <div id="info-cadastro" class="row justify-content-center f-texto">
            <div class="text-left col-9">
                <p class="text-center col-12 d-none d-md-block">
                    Escolha o tipo de conta que deseja cadastrar.
                    Campos de informação adicionais podem ser requeridos dependendo da seleção.
                </p>
                <p class="text-center d-md-none">
                    Escolha o tipo de conta que deseja cadastrar.
                </p>
            </div>
        </div>

        <div id="inputs-cadastro" class="row justify-content-center mt-1">
            <div class="col-5 col-md-4 text-left d-flex flex-column">
                <label for="tipo-conta" class="f-texto">Tipo de conta:</label>
                <select id="tipo-conta" class="form-select" aria-label="">
                    <option disabled selected class="opcoes">Selecione</option>
                    <option value="advogado" class="opcoes">Advogado</option>
                    <option value="cliente" class="opcoes">Cliente</option>
                </select>
            </div>
        </div>



    </section>



@endsection
