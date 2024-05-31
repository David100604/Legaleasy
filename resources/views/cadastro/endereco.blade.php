@extends('layouts.cadastros')

@section('content')

    <section class="d-flex flex-column justify-content-center">


        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="titulo text-center col-10 col-xl-4">CADASTRAR ENDEREÇO</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>
        <div class="row justify-content-center f-texto">

            <div class="text-left col-9">
                <p class="text-left">
                    Os campos marcados com * são obrigatórios.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <h3 id="info-dados" class="titulo text-left col-9">Insira suas informações nos campos abaixo:</h3>
        </div>

        <form action="{{ route('endereco.incluir') }}" class="mt-lg-3" method="POST">
            @csrf

            <input type="hidden" name="usuario_id" value="{{ $usuario->usuario_id }}">

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="cep" class="f-texto">CEP</label>
                        <input type="text" class="p-2" id="cep"  maxlength="9" oninput="mascaraCEP(this)" name="cep" placeholder="ex.: 00000-000 *" required>

                        <script>
                            function mascaraCEP(input) {
                                let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                                if (value.length > 5) {
                                    value = value.replace(/^(\d{5})(\d{1,3})/, '$1-$2'); // Adiciona o hífen após o quinto dígito
                                }
                                input.value = value;
                            }
                        </script>

                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="rua" class="f-texto">Rua</label>
                    <input type="text" class="p-2" id="rua" name="rua" placeholder="ex.: Da Água" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="uf" class="f-texto">UF</label>
                        <input type="text" class="p-2" id="uf" name="uf"  maxlength="2" oninput="mascaraUF(this)" placeholder="ex.: ES" required>

                        <script>
                            function mascaraUF(input) {
                                // Remove caracteres não alfabéticos e converte para maiúsculas
                                input.value = input.value.replace(/[^A-Za-z]/g, '').toUpperCase();
                            }
                        </script>

                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="numero" class="f-texto">Número</label>
                    <input type="text" class="p-2" id="numero" name="numero" maxlength="5" oninput="mascaraNUM(this)" placeholder="ex.: 2010 *" required>

                    <script>
                        function mascaraNUM(input) {
                            let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos

                            input.value = value;
                        }
                    </script>

                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="cidade" class="f-texto">Cidade</label>
                        <input type="text" class="p-2" id="cidade" name="cidade" placeholder="ex.: Serra" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="edificio" class="f-texto">Edifício</label>
                    <input type="text" class="p-2" id="edificio" name="edificio" placeholder="ex.: Edifício *" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="bairro" class="f-texto">Bairro</label>
                        <input type="text" class="p-2" id="bairro" name="bairro" placeholder="ex.: Nova Almeida" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="complemento" class="f-texto">Complemento</label>
                    <input type="text" class="p-2" id="complemento" name="complemento" placeholder="ex.: Ap." required>
                </div>
            </div>

            @include('componentes.botoes')

        </form>

    </section>

@endsection
