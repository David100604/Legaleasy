@extends('layouts.app')

@section('content')

    <section class="d-flex flex-column justify-content-center">


        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="titulo text-center col-xl-4">CADASTRAR ENDEREÇO</h1>
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

        <form action="" class="mt-lg-3">

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="cep" class="f-texto">CEP</label>
                        <input type="text" class="p-2" id="cep" name="cep" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="rua" class="f-texto">Rua</label>
                    <input type="text" class="p-2" id="rua" name="rua" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="uf" class="f-texto">UF</label>
                        <input type="text" class="p-2" id="uf" name="uf" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="numero" class="f-texto">Número</label>
                    <input type="text" class="p-2" id="numero" name="numero" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="cidade" class="f-texto">Cidade</label>
                        <input type="text" class="p-2" id="cidade" name="cidade" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="edificio" class="f-texto">Edifício</label>
                    <input type="text" class="p-2" id="edificio" name="edificio" required>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="input-dados-esquerda col-8 col-lg-4">
                    <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                        <label for="bairro" class="f-texto">Bairro</label>
                        <input type="text" class="p-2" id="bairro" name="bairro" required>
                    </div>
                </div>
                <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                    <label for="apartamento" class="f-texto">Apartamento</label>
                    <input type="text" class="p-2" id="apartamento" name="apartamento" required>
                </div>
            </div>

        </form>

    </section>

@endsection
