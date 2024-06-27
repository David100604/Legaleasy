@extends('layouts.cadastros')

@section('content')

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <section class="d-flex flex-column justify-content-center">

        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
            <h1 id="titulo" class="titulo col-10 col-xl-4 text-center">CADASTRAR NOVA CONTA</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
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


        <form id="form-cadastro" action="{{ route('tipo-conta.incluir') }}" method="POST" style="height: 50vh" class="d-flex flex-column justify-content-between">
            @csrf

            <div id="inputs-cadastro" class="row justify-content-center mt-1">
                <div class="col-5 col-md-4 text-left d-flex flex-column">
                    <label for="tipo-conta" class="f-texto">Tipo de conta:</label>
                    <select id="tipo-conta" name="tipoConta" class="form-select" aria-label="">
                        <option disabled selected class="opcoes">Selecione</option>
                        <option value="Advogado" class="opcoes">Advogado</option>
                        <option value="Cliente" class="opcoes">Cliente</option>
                    </select>
                </div>
            </div>

            <div>
                @include('componentes.botoes')
            </div>

        </form>

        <script>
            document.getElementById('form-cadastro').addEventListener('submit', function(event) {
                const tipoConta = document.getElementById('tipo-conta').value;
                if (tipoConta === 'Selecione') {
                    event.preventDefault();
                    Swal.fire({
                        icon: 'warning',
                        title: 'Atenção',
                        text: 'Por favor, selecione um tipo de conta antes de prosseguir.'
                    });
                }
            });
        </script>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
