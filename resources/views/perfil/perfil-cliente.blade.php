@extends('layouts.perfils')

@section('content')

<div class="row justify-content-center">
    <div class="image-container position-relative">
        <img src="../images/imagem-fumaça-capa.jfif" alt="" class="d-none d-md-block w-100 mt-6">
        <img src="../images/perfil-teste.jfif" alt="Imagem Menor" class="small-image">
        <button class="change-image-button">Alterar Imagem</button>
    </div>
</div>

<div class="row justify-content-center mb-3">
    <div class="d-flex justify-content-center">
        <div class="card col-6"> 
            <div class="card-header card-lista-header text-center">
                Histórico de casos (em andamento)
            </div>
            <div class="card-body card-lista-body p-2">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card p-2 mt-2">
                            <img src="../images/advogado.png" alt="" width="80px;"> 
                            <p class="m-0 nome-advogado">Dra. Gabriela Nascimento</p>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eveniet neque illo necessitatibus dolores. Libero illum fuga nulla numquam, expedita nesciunt, facilis molestiae aliquid neque optio voluptatem, aliquam architecto ratione?</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card p-2 mt-2">
                            <img src="../images/advogado.png" alt="" width="80px;"> 
                            <p class="m-0 nome-advogado">Dra. Gabriela Nascimento</p>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eveniet neque illo necessitatibus dolores. Libero illum fuga nulla numquam, expedita nesciunt, facilis molestiae aliquid neque optio voluptatem, aliquam architecto ratione?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mb-3">
    <div class="d-flex justify-content-center">
        <div class="card col-6"> 
            <div class="card-header card-lista-header text-center">
                Histórico de casos (finalizados)
            </div>
            <div class="card-body card-lista-body p-2">
                <div class="row">

                    <div class="col-md-6">
                        <div class="card p-2 mt-2">
                            <img src="../images/advogado.png" alt="" width="80px;"> 
                            <p class="m-0 nome-advogado">Dra. Gabriela Nascimento</p>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eveniet neque illo necessitatibus dolores. Libero illum fuga nulla numquam, expedita nesciunt, facilis molestiae aliquid neque optio voluptatem, aliquam architecto ratione?</p>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="card p-2 mt-2">
                            <img src="../images/advogado.png" alt="" width="80px;"> 
                            <p class="m-0 nome-advogado">Dra. Gabriela Nascimento</p>
                            <p class="m-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos eveniet neque illo necessitatibus dolores. Libero illum fuga nulla numquam, expedita nesciunt, facilis molestiae aliquid neque optio voluptatem, aliquam architecto ratione?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="card-body card-lista-body p-2 d-flex justify-content-center">
    <div class="row">
        <div class="d-flex justify-content-center">
            <textarea class="form-control" rows="2" style="width: 700px;">Descrição aqui...</textarea>
        </div>
    </div>
</div>



@endsection