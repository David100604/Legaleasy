@extends('layouts.app')

@section('content')

<section id="conteudo" class="adv-container d-flex flex-column justify-content-center adv-homepage">

    <div class="row justify-content-center my-5">
        <div class="col-md-4 text-center">
            <img id="linha-branca-esquerda" class="adv-line img-fluid" src="../images/linha-branca.png" alt="">
        </div>
        <div class="col-md-4 text-center">
            <h1 id="titulo-heitor" class="adv-title">BEM-VINDO(A), Rhuan Bryan</h1>
        </div>
        <div class="col-md-4 text-center">
            <img id="linha-branca-direita-heitor" class="adv-line img-fluid" src="../images/linha-branca.png" alt="">
        </div>
    </div>

    {{-- CAROUSEL --}}
    <div id="carouselExampleIndicators" class="adv-carousel carousel slide mb-5" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">Saiba mais</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">Saiba mais</button>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">Saiba mais</button>
                </div>
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
    <div class="row justify-content-center adv-work-area">
        <div class="col-md-4 text-center">
            <img id="linha-branca-esquerda" class="adv-line img-fluid" src="../images/linha-branca.png" alt="">
        </div>
        <div class="col-md-4 text-center">
            <h1 id="titulo-heitor" class="adv-title">Área de trabalho</h1>
        </div>
        <div class="col-md-4 text-center">
            <img id="linha-branca-direita-heitor" class="adv-line img-fluid" src="../images/linha-branca.png" alt="">
        </div>
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-8 text-center">
            <h1>Clique em uma lista para visualizar mais detalhes. Exibindo pedidos registrados, ordenados por mais recente:</h1>
        </div>
    </div>
</section>

@endsection
