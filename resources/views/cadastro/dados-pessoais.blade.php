@extends('layouts.cadastros')

@section('content')



    <section class="d-flex flex-column justify-content-center">


        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-dados" class="titulo text-center col-xl-4">CADASTRAR DADOS PESSOAIS</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
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

        <form action="{{ route('dados-pessoais.incluir') }}" class="mt-lg-5" method="POST">
            @csrf
            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="nome_usuario" class="f-texto">Usuário</label>
                        <input type="text" class="p-2" id="nome_usuario" name="nome_usuario" placeholder="ex: joao_99" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="nome_completo" class="f-texto" maxlength="100">Nome completo</label>
                    <input type="text" class="p-2" id="nome_completo" name="nome_completo" placeholder="ex: João Victor Gomes"required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="senha" class="f-texto">Senha</label>
                        <input type="password" class="p-2" id="senha" name="senha" placeholder="Insira pelo menos 6 caracteres" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="cpf" class="f-texto">CPF</label>
                    <input type="text" id="cpf" name="cpf" class="p-2" maxlength="14" oninput="mascaraCPF(this)" placeholder="123.456.789-00" required>

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
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="email" class="f-texto" maxlength="100">E-mail</label>
                        <input type="email" class="p-2" id="email" name="email" placeholder="Usuario@gmail.com"required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="telefone" class="f-texto">Telefone</label>
                    <input type="text" name="telefone" class="p-2" id="telefone" maxlength="15" oninput="mascaraTelefone(this)"  placeholder="(99) 9999-9999" required>

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

    </section>

@endsection
