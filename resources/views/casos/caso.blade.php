@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="text-center my-4">
    </div>
            <div class="row justify-content-center">
                <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
                <h1 id="titulo" class="titulo col-xl-4 text-center">TITULO DO CASO</h1>
                <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
            </div>
        <div class="case-details ">
            <p><strong>Código do caso:</strong> #000005</p>
            <p class="description"><strong>Descrição do caso:</strong>
            <br>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna erat, egestas non nibh eu, ultrices suscipit metus. Proin sed pellentesque lacus, eget pellentesque dui. Duis id rutrum quam, ut tincidunt nulla. Curabitur tincidunt turpis arcu, sed vulputate eros vestibulum ac. Sed vehicula dui eu posuere molestie.</p>
            <p><strong>Categoria do caso:</strong> Tributário</p>
            <p><strong>Cliente:</strong> Bicho da Silva</p>
            <p><strong>Gratificação:</strong> R$ XXXX,XX</p>
            <p><strong>Data de criação:</strong> 04/04/2024</p>
        </div>

    <div class="documents mt-4">
        <h4 class="text-center w-100">DOCUMENTOS EM ANEXO</h4>
        <div class="row justify-content-center w-100">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Documentação_ocorrência.doc</h5>
                        <a href="#" class="btn btn-primary" target="_blank">Visualizar</a>
                        <a href="#" class="btn btn-secondary" download>Fazer download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-btn">
                    <div class="card-body">
                        <h5 class="card-title text-center">Foto_documento.png</h5>
                        <a href="#" class="btn btn-primary" target="_blank">Visualizar</a>
                        <a href="#" class="btn btn-secondary" download>Fazer download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-self-end my-3 mt-md-5">
    <img class="linha-branca align-self-center d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
    <a class="align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn btn-dark" href="javascript:window.history.go (-1)">
        VOLTAR
    </a>
    <button type="submit" class="btn-azul align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn">
        PRÓXIMO
    </button>
    <button type="submit" class="btn-branca align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn">
        INCIAR CONVERSA
    </button>
    <img class="linha-branca align-self-center d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
</div>

</div>
@endsection
