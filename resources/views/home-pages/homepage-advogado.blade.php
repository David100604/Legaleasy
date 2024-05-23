@extends('layouts.app')

@section('content')
    
    <section id="conteudo" class="d-flex flex-column justify-content-center">
        <div class="row justify-content-center">
            <img id="linha-branca-esquerda" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-heitor" class="align-text-center col-md-4">BEM-VINDO(A), Rhuan Bryan</h1>
            <img id="linha-branca-direita-heitor" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
        </div>
        
        {{-- CASOUSEL --}}

        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                    <button type="button">Saiba mais</button>
                </div>
                <div class="carousel-item">
                    <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        {{-- ÁREA DE TRABALHO --}}

        <div class="row justify-content-center">
            <img id="linha-branca-esquerda" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-heitor" class="align-text-center col-md-4">Área de trabalho</h1>
            <img id="linha-branca-direita-heitor" class="align-self-center col-md-4" src="../images/linha-branca.png" alt="">
            <h1>Clique em uma lista para visualizar mais detalhes. Exibindo pedidos registrados, ordenados por mais recente: </h1>
        </div>
    </section>

@endsection