@extends('layouts.cadastros')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <section class="d-flex flex-column justify-content-center">

        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
            <h1 id="titulo-dados" class="titulo text-center col-xl-4">CADASTRAR DADOS PESSOAIS</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
        </div>
        <div class="row justify-content-center f-texto">

            <div class="text-left col-9">
                <p class="text-left d-none d-lg-block">
                    Para fazer o uso da nossa plataforma é necessário o cadastro de seus dados como cliente
                    ou prestador de serviço.
                    Preencha o formulário abaixo com dados válidos para criar uma conta.
                    Os campos marcados com * são obrigatórios.
                </p>
                <p class="text-left d-block d-lg-none">
                    Preencha o formulário abaixo com dados válidos para criar uma conta.
                    Os campos marcados com * são obrigatórios.
                </p>
            </div>
        </div>
        <div class="row justify-content-center">
            <h3 id="info-dados" class="titulo text-left col-9">Insira suas informações nos campos abaixo:</h3>
        </div>

        <form action="{{ route('usuario.incluir') }}" class="mt-lg-5" method="POST">
            @csrf
            <input type="hidden" name="tipoConta_id" value="{{ $tipoConta->tipoConta_id }}">

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                        <label for="nome_usuario" class="f-texto">Usuário</label>
                        <i class="fa-solid fa-user position-absolute" style="top: 40px; left: 8px;"></i>
                        <input type="text" class="p-2 ps-4" id="nome_usuario" name="nome_usuario" placeholder="ex: joao_99" required>
                        @error('nome_usuario')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5">
                    <div class="text-left d-flex flex-column pe-lg-6 mt-lg-3 position-relative">
                        <label for="nome_usuario" class="f-texto">Nome Completo</label>
                        <i class="fas fa-id-card position-absolute" style="top: 40px; left: 7px;"></i>
                        <input type="text" class="p-2 ps-4" id="nome_completo" name="nome_completo" placeholder="ex: João Victor Gomes" required>
                        @error('nome_completo')
                            <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                        <label for="senha" class="f-texto">Senha</label>
                        <i class="fa-solid fa-key position-absolute" style="top: 40px; left: 8px;"></i>
                        <input type="password" class="p-2 ps-4" id="senha" name="senha" placeholder="Insira pelo menos 6 caracteres" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3 position-relative">
                    <label for="cpf" class="f-texto">CPF</label>
                    <i class="fa-solid fa-file position-absolute" style="top: 40px; left: 57px;"></i>
                    <input type="text" id="cpf" name="cpf" class="p-2 ps-4" value="{{ old('cpf') }}" maxlength="14" oninput="mascaraCPF(this)" placeholder="123.456.789-00" required>
                    @error('cpf')
                        <div>{{ $message }}</div>
                    @enderror
                    <script>
                    function mascaraCPF(input) {
                        let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                        if (value.length > 3 && value.length <= 6) {
                            value = value.replace(/(\d{3})(\d+)/, '$1.$2');
                        } else if (value.length > 6 && value.length <= 9) {
                            value = value.replace(/(\d{3})(\d{3})(\d+)/, '$1.$2.$3');
                        } else if (value.length > 9) {
                            value = value.replace(/(\d{3})(\d{3})(\d{3})(\d{1,2})/, '$1.$2.$3-$4');
                        }
                        input.value = value;
                    }

                    </script>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3 position-relative">
                        <label for="email" class="f-texto" maxlength="100">E-mail</label>
                        <i class="fa-solid fa-envelope position-absolute" style="top: 40px; left: 8px;"></i>
                        <input type="email" class="p-2 ps-4" id="email" value="{{ old('email') }}" name="email" placeholder="Usuario@gmail.com"required>
                        @error('email')
                    <div>{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3 position-relative">
                    <label for="telefone" class="f-texto">Telefone</label>
                    <i class="fa-solid fa-phone position-absolute" style="top: 40px; left: 55px;"></i>
                    <input type="text" name="telefone" class="p-2 ps-4" id="telefone" maxlength="15" oninput="mascaraTelefone(this)"  placeholder="(99) 9999-9999" required>
                    @error('telefone')
                        <div>{{ $message }}</div>
                    @enderror
                    <script>
                        function mascaraTelefone(input) {
                            let value = input.value.replace(/\D/g, ''); // Remove caracteres não numéricos
                            if (value.length > 10) {
                                value = value.replace(/^(\d{2})(\d{5})(\d{4})/, '($1) $2-$3'); // Formato para 9 dígitos
                            } else if (value.length > 5) {
                                value = value.replace(/^(\d{2})(\d{4})(\d{4})/, '($1) $2-$3'); // Formato para 8 dígitos
                            } else if (value.length > 2) {
                                value = value.replace(/^(\d{2})(\d+)/, '($1) $2'); // Adiciona parênteses após o DDD
                            } else if (value.length > 0) {
                                value = value.replace(/^(\d+)/, '($1'); // Adiciona parênteses ao início do DDD
                            }
                            input.value = value;
                        }
                    </script>

                </div>
            </div>

            @include('componentes.botoes')
            </form>
        </form>

    </section>

@endsection
