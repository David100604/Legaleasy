@extends('layouts.cadastros')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<section class="d-flex flex-column justify-content-center">
    <div class="row justify-content-center">
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
        <h1 id="titulo" class="titulo text-center col-10 col-xl-4">CADASTRAR ENDEREÇO</h1>
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
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
                <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                    <label for="cep" class="f-texto">CEP</label>
                    <i class="fa-solid fa-location-dot position-absolute" style="top: 40px; left: 8px;"></i>
                    <input type="text" class="p-2 ps-4" id="cep" maxlength="9" oninput="mascaraCEP(this)" name="cep" placeholder="ex.: 00000-000 *" required>

                    <script>
                        function mascaraCEP(input) {
                            let value = input.value.replace(/\D/g, ''); 
                            if (value.length > 5) {
                                value = value.replace(/^(\d{5})(\d{1,3})/, '$1-$2'); 
                            }
                            input.value = value;
                        }

                        document.getElementById('cep').addEventListener('blur', function() {
                            let cep = this.value.replace(/\D/g, '');
                            if (cep.length === 8) {
                                fetch(`https://viacep.com.br/ws/${cep}/json/`)
                                    .then(response => response.json())
                                    .then(data => {
                                        if (!data.erro) {
                                            document.getElementById('rua').value = data.logradouro;
                                            document.getElementById('bairro').value = data.bairro;
                                            document.getElementById('cidade').value = data.localidade;
                                            document.getElementById('uf').value = data.uf;
                                        } else {
                                            Swal.fire("O CEP inserido não foi encontrado! Verifique e tente novamente.");
                                        }
                                    })
                                    .catch(error => {
                                        console.error('Erro ao consultar o CEP:', error);
                                        alert('Erro ao consultar o CEP.');
                                    });
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3 position-relative">
                <label for="rua" class="f-texto">Rua</label>
                <i class="fa-solid fa-road position-absolute" style="top: 40px; left: 55px;"></i>
                <input type="text" class="p-2 ps-4" id="rua" name="rua" placeholder="ex.: Da Água" required>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="input-dados-esquerda col-8 col-lg-4">
                <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                    <label for="uf" class="f-texto">UF</label>
                    <i class="fa-solid fa-map position-absolute" style="top: 40px; left: 8px;"></i>
                    <input type="text" class="p-2 ps-4" id="uf" name="uf" maxlength="2" oninput="mascaraUF(this)" placeholder="ex.: ES" required>

                    <script>
                        function mascaraUF(input) {
                            input.value = input.value.replace(/[^A-Za-z]/g, '').toUpperCase();
                        }
                    </script>
                </div>
            </div>
            <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3 position-relative">
                <label for="numero" class="f-texto">Número</label>
                <i class="fa-solid fa-box-archive position-absolute" style="top: 40px; left: 55px;"></i>
                <input type="text" class="p-2 ps-4" id="numero" name="numero" maxlength="5" oninput="mascaraNUM(this)" placeholder="ex.: 2010 *" required>

                <script>
                    function mascaraNUM(input) {
                        let value = input.value.replace(/\D/g, ''); 
                        input.value = value;
                    }
                </script>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="input-dados-esquerda col-8 col-lg-4">
                <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                    <label for="cidade" class="f-texto">Cidade</label>
                    <i class="fa-solid fa-city position-absolute" style="top: 40px; left: 5px;"></i>
                    <input type="text" class="p-2 ps-4" id="cidade" name="cidade" placeholder="ex.: Serra" required>
                </div>
            </div>
            <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3 position-relative">
                <label for="edificio" class="f-texto position-relative">Edifício</label>
                <i class="fa-solid fa-building position-absolute" style="top: 40px; left: 57px;"></i>
                <input type="text" class="p-2 ps-4" id="edificio" name="edificio" placeholder="ex.: Edifício">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="input-dados-esquerda col-8 col-lg-4">
                <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                    <label for="bairro" class="f-texto">Bairro</label>
                    <i class="fa-solid fa-location-crosshairs position-absolute" style="top: 40px; left: 8px;"></i>
                    <input type="text" class="p-2 ps-4" id="bairro" name="bairro" placeholder="ex.: Nova Almeida" required>
                </div>
            </div>
            <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3 position-relative">
                <label for="complemento" class="f-texto position-relative">Complemento</label>
                <i class="fa-solid fa-location-arrow position-absolute" style="top: 40px; left: 57px;"></i>
                <input type="text" class="p-2 ps-4" id="complemento" name="complemento" placeholder="ex.: Ap.">
            </div>
        </div>

        @include('componentes.botoes')

    </form>
</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection
