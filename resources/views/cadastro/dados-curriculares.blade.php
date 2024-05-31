@extends('layouts.cadastros')

@section('content')

    <section class="d-flex flex-column justify-content-center">


        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
            <h1 id="titulo-dados" class="titulo text-center col-md-9 col-xl-4">CADASTRAR DADOS CURRICULARES</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
        </div>
        <div class="row justify-content-center f-texto">

            <div class="text-left col-9">
                <p class="text-left d-none d-lg-block">
                    O cadastro como advogado requer dados curriculares para que haja a validação da conta e seus serviços.
                    Favor preencher os campos a seguir com informações VÁLIDAS.
                </p>
                <p class="text-left d-block d-lg-none">
                    Favor preencher os campos a seguir com informações VÁLIDAS.
                </p>
            </div>
        </div>

        <form action="{{ route('dados-curriculares.incluir') }}" class="mt-lg-5 d-flex flex-column justify-content-between" method="POST" style="height: 45vh">
            @csrf

            <input type="hidden" name="usuario_id" value="{{ $usuario->usuario_id }}">

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="oab" class="f-texto">Número da OAB</label>
                        <input type="text" class="p-2" id="oab" name="oab" placeholder="UFoooooo" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="nome-completo" class="f-texto">Tipo de advogado</label>
                    <select id="tipo-advogado" name="tipoAdvogado" class="form-select" aria-label="">
                        <option disabled selected class="opcoes">Selecione</option>
                        <option value="Advogado Administrativo" class="opcoes">Advogado Administrativo</option>
                        <option value="Advogado Ambiental" class="opcoes">Advogado Ambiental</option>
                        <option value="Advogado Civil" class="opcoes">Advogado Civil</option>
                        <option value="Advogado Comercial" class="opcoes">Advogado Comercial</option>
                        <option value="Advogado Constitucional" class="opcoes">Advogado Constitucional</option>
                        <option value="Advogado Contratual" class="opcoes">Advogado Contratual</option>
                        <option value="Advogado de Relações Internacionais" class="opcoes">Advogado de Relações Internacionais</option>
                        <option value="Advogado do Consumidor" class="opcoes">Advogado do Consumidor</option>
                        <option value="Advogado Digital" class="opcoes">Advogado Digital</option>
                        <option value="cliente" class="opcoes">Advogado Cliente</option>
                        <option value="advogado" class="opcoes">Advogado</option>
                        <option value="cliente" class="opcoes">Advogado Cliente</option>
                        <option value="advogado" class="opcoes">Advogado</option>
                        <option value="cliente" class="opcoes">Advogado Cliente</option>
                    </select>
                </div>
            </div>

            <div>
                @include('componentes.botoes')
            </div>

        </form>


    </section>

@endsection
