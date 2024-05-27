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

        <form action="" class="mt-lg-5">

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="nome-usuario" class="f-texto">Usuário</label>
                        <input type="text" class="p-2" id="nome-usuario" name="nome-usuario" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="nome-completo" class="f-texto">Nome completo</label>
                    <input type="text" class="p-2" id="nome-completo" name="nome-completo" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="senha" class="f-texto">Senha</label>
                        <input type="password" class="p-2" id="senha" name="senha" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="cpf" class="f-texto">CPF</label>
                    <input type="text" class="p-2" id="cpf" name="cpf" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="email" class="f-texto">E-mail</label>
                        <input type="email" class="p-2" id="email" name="email" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="telefone" class="f-texto">Telefone</label>
                    <input type="number" class="p-2" id="tel" name="telefone" required>
                </div>
            </div>

        </form>

    </section>

@endsection
