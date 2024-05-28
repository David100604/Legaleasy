@extends('layouts.cadastros')

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

        
        <form action="{{ route('tipoConta.incluir') }}">
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

            <div class="row justify-content-center align-self-end my-3 mt-md-5">
                <img class="linha-branca align-self-center d-none d-xl-block" src="../images/linha-branca.png" alt="">
                <button class="align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn btn-dark">
                    VOLTAR
                </button>
                <button class="btn-azul align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn">
                    PRÓXIMO
                </button>
                <img class="linha-branca align-self-center d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
            </div>
        </form>



    </section>



@endsection
