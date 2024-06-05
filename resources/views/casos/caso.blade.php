@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="text-center my-4">
    </div>
    <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
            <h1 id="titulo-dados" class="titulo text-center col-md-9 col-xl-4">TITULO DO CASO</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
    <div class="case-details">
        <p><strong>Código do caso:</strong> #000005</p>
        <p><strong>Descrição do caso:</strong></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur magna erat, egestas non nibh eu, ultrices suscipit metus. Proin sed pellentesque lacus, eget pellentesque dui. Duis id rutrum quam, ut tincidunt nulla. Curabitur tincidunt turpis arcu, sed vulputate eros vestibulum ac. Sed vehicula dui eu posuere molestie.</p>
        <p><strong>Categoria do caso:</strong> Tributário</p>
        <p><strong>Cliente:</strong> Bicho da Silva</p>
        <p><strong>Gratificação:</strong> R$ XXXX,XX</p>
        <p><strong>Data de criação:</strong> 04/04/2024</p>
    </div>
    <div class="documents mt-4">
        <h4>DOCUMENTOS EM ANEXO</h4>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Documentação_ocorrência.doc</h5>
                        <a href="#" class="btn btn-primary" target="_blank">Visualizar</a>
                        <a href="#" class="btn btn-secondary" download>Fazer download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Foto_documento.png</h5>
                        <a href="#" class="btn btn-primary" target="_blank">Visualizar</a>
                        <a href="#" class="btn btn-secondary" download>Fazer download</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">VID_23_05_2024.mp4</h5>
                        <a href="#" class="btn btn-primary" target="_blank">Visualizar</a>
                        <a href="#" class="btn btn-secondary" download>Fazer download</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="actions mt-4">
        <a href="#" class="btn btn-secondary">VOLTAR</a>
        <a href="#" class="btn btn-success">ACEITAR</a>
        <a href="#" class="btn btn-primary">INICIAR CONVERSA</a>
    </div>
</div>
@endsection
