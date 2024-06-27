@extends('layouts.app')

@section('content')
<div class="main-content">
    <div class="text-center my-4">
    </div>
        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png')}}" alt="">
            <h1 id="titulo" class="titulo col-xl-4 text-center" style="text-transform: uppercase;">{{ $caso->titulo }}</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png')}}" alt="">
        </div>
        <div class="row justify-content-center mt-4">
            <div class="col-9 text-left">
                
                <p><strong class="titulo">Código do caso:</strong> #{{ $caso->caso_id }}</p>
                <p class="description"><strong class="titulo">Descrição do caso:</strong>
                <br>{{ $caso->descricao }}</p>
                <p><strong class="titulo">Categoria do caso:</strong> {{ $caso->tipoCaso }}</p>
                <p><strong class="titulo">Cliente:</strong> {{ $caso->cliente }}</p>
                <p><strong class="titulo">Gratificação:</strong> R$ XXXX,XX</p>
                <p><strong class="titulo">Data de criação:</strong> 04/04/2024</p>
            </div>
        </div>

    <div class="documents mt-4">
        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png')}}" alt="">
            <h4 id="titulo" class="titulo col-xl-4 text-center">DOCUMENTOS EM ANEXO</h4>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png')}}" alt="">
        </div>
        
        <div class="row justify-content-center w-100">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title text-center">Arquivo do Caso</h5>
                        <center>
                            <img class="p-2 my-4" src="{{ asset('images/arquivo.png')}}" alt="">
                        </center>
                        <div class="row justify-content-center">
                            
                            <a href="{{ route('file.download', ['filename' => $caso->arquivo]) }}" class="btn btn-secondary col-9">Fazer download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center align-self-end my-3 mt-md-5">
        <img class="linhamenor align-self-center d-none d-xl-block me-lg-3" src="{{ asset('images/linhamenordireita.png') }}" alt="">
        @if($usuario->tipoConta == 'Advogado')
            <a class="align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn btn-dark mx-lg-3" href="javascript:window.history.go (-1)">
                VOLTAR
            </a>
            <button type="submit" class="btn-branca align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 mx-lg-3  btn">
                INCIAR CONVERSA
            </button>
        @elseif ($usuario->tipoConta == 'Cliente' || $usuario->tipoConta == 'Administrador')
            <a class="align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn btn-dark mx-lg-3" href="javascript:window.history.go (-1)">
                VOLTAR
            </a>
            <button type="submit" class="btn-branca align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 mx-lg-3  btn">
                INCIAR CONVERSA
            </button>
            <button type="submit" class="btn-excluir align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 mx-lg-3  btn">
                EXCLUIR
            </button>
        @endif
        <img class="linhamenor align-self-center d-none d-xl-block ms-lg-3" src="{{ asset('images/linhamenor.png') }}" alt="">
    </div>

</div>
@endsection
