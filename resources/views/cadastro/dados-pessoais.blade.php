@extends('layouts.app')

@section('content')

    <section class="d-flex flex-column justify-content-center">


        <div class="row justify-content-center">
            <img id="linha-branca-esquerda-heitor" class="align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-heitor" class="text-center col-xl-4">CADASTRAR DADOS PESSOAIS</h1>
            <img id="linha-branca-direita-heitor" class="align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
        </div>
        <div id="info-cadastro-heitor" class="row justify-content-center f-texto">

            <div class="text-left col-9">
                <p class="text-center">
                    Para fazer o uso da nossa plataforma é necessário o cadastro de seus dados como cliente
                    ou prestador de serviço.
                    Preencha o formulário abaixo com dados válidos para criar uma conta.
                    Os campos marcados com * são obrigatórios.
                </p>
            </div>
        </div>
        <h3 id="subtitulo-heitor" class="text-left col-7">Insira suas informações nos campos abaixo:</h3>

        <div id="info-cadastro" class="row justify-content-center">
        <form action="#">
        
                <div class="dados-pessoais" class="text-left col 5" >
                    <label for="nome-usuario"><p class="row justify-content f-texto ">Nome de usuário</p></label> 
                    <input type="text" id="nome-usuario" name="nome-usuario" required>
                    
                    

                    <label for="senha"><p class="row justify-content f-texto">Senha</p></label>
                    <input type="password" id="senha" name="senha" require>

                    <label for="email"><p class="row justify-content f-texto">E-mail</p></label>
                    <input type="email" id="email" name="email" required>


                    <label for="nome-completo"><p class="row justify-content f-texto">Nome Completo</p></label>
                    <input type="text" id="nome-completo" name="nome-completo" required>

                    <label for="cpf"><p class="row justify-content f-texto">CPF</p></label>
                    <input type="number" id="cpf" name="cpf" required>

                    <label for="tel"><p class="row justify-content f-texto">Telefone</p></label>
                    <input type="number" id="tel" name="telefone" required>
                </div>
        </form>

        </div>

    </section>

@endsection
