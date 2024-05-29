@extends('layouts.app')

@section('content')

<section id="conteudo" class="adv-container d-flex flex-column justify-content-center adv-homepage">

    <div class="row justify-content-center">
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
        <h1 id="titulo-dados" class="titulo text-center col-md-9 col-xl-4">BEM VINDO(A), RHUAN BRYAN</h1>
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
    </div>

    {{-- CAROUSEL --}}

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        
        <div class="carousel-inner">
          <div class="carousel-item active">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">
                        <a href="https://www.linkedin.com/" style="color: white; text-decoration: none;">Saiba mais</a>
                    </button>
                    <p class="custom-carousel-text">Abertura da X Conferência Estadual da Advocacia Sergipana é marcada por discursos sobre os novos tempos da advocacia e homenagens</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">
                        <a href="https://www.linkedin.com/" style="color: white; text-decoration: none;">Saiba mais</a>
                    </button>
                    <p class="custom-carousel-text">Abertura da X Conferência Estadual da Advocacia Sergipana é marcada por discursos sobre os novos tempos da advocacia e homenagens</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">
                        <a href="https://www.linkedin.com/" style="color: white; text-decoration: none;">Saiba mais</a>
                    </button>
                    <p class="custom-carousel-text">Abertura da X Conferência Estadual da Advocacia Sergipana é marcada por discursos sobre os novos tempos da advocacia e homenagens</p>
                </div>
            </div>

            <div class="carousel-item">
                <img src="../images/Escolhida-Capa.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <button type="button" class="btn btn-primary">
                        <a href="https://www.linkedin.com/" style="color: white; text-decoration: none;">Saiba mais</a>
                    </button>
                    <p class="custom-carousel-text">Abertura da X Conferência Estadual da Advocacia Sergipana é marcada por discursos sobre os novos tempos da advocacia e homenagens</p>
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

    <div class="row justify-content-center">
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
        <h1 id="titulo-dados" class="titulo text-center col-md-9 col-xl-4">ÁREA DE TRABALHO</h1>
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
    </div>

    <div class="row justify-content-center mt-3">
        <div class="col-md-8 text-center">
            <p class="custom-text">Clique em uma lista para visualizar mais detalhes. Exibindo pedidos registrados, ordenados por mais recente:</p>
        </div>
    </div>

    <div class="col card-margin">
    <div class="row justify-content-center">

    {{-- CARD'S --}}

    <div class="card col-10 card-custom-width m-5">
            <div class="card-header card-lista-header text-center">
                Casos abertos
            </div>
            <div class="card-body card-lista-body p-2">
                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000001</p>
                                <p class="m-0">Título do caso: </p>
                                <p class="m-0">Título de caso: </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000002</p>
                                <p class="m-0">Título do caso: </p>
                                <p class="m-0">Título de caso: </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000003</p>
                                <p class="m-0">Título do caso: </p>
                                <p class="m-0">Título de caso: </p>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000004</p>
                                <p class="m-0">Título do caso: </p>
                                <p class="m-0">Título de caso: </p>
                            </div>
                        </div>
                    </div>
                </div> 
                    
                <div class="row justify-content-around mt-3">
                    <div class="col-5">
                        <button class="btn btn-light w-100 border-dark">Mostrar menos</button>
                    </div>
                    <div class="col-5">
                        <button class="btn btn-dark w-100">Mostrar mais</button>
                    </div>
                </div>
            </div>
        </div>


        <div class="card col-10 card-custom-width m-5">
            <div class="card-header card-lista-header text-center">
                Requisições de serviço
            </div>
            <div class="card-body card-lista-body p-2">
                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000001</p>
                                <p class="m-0">Procurando: Tipo de advogado requisito</p>
                                <p class="m-0">Contato por: WhatsApp</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000002</p>
                                <p class="m-0">Procurando: Tipo de advogado requisito</p>
                                <p class="m-0">Contato por: WhatsApp</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000003</p>
                                <p class="m-0">Procurando: Tipo de advogado requisito</p>
                                <p class="m-0">Contato por: WhatsApp</p>
                            </div>
                        </div>
                    </div>
                </div> 

                <div class="col-12 card p-2 mt-2">
                    <div class="row">
                        <div class="row col-15 ms-5">
                            <div class="col-9">
                                <p class="mt-1 m-0 nome-advogado card-title-centered">Código do caso: #0000004</p>
                                <p class="m-0">Procurando: Tipo de advogado requisito</p>
                                <p class="m-0">Contato por: WhatsApp</p>
                            </div>
                        </div>
                    </div>
                </div> 
                    
                <div class="row justify-content-around mt-3">
                    <div class="col-5">
                        <button class="btn btn-light w-100 border-dark">Mostrar menos</button>
                    </div>
                    <div class="col-5">
                        <button class="btn btn-dark w-100">Mostrar mais</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    {{-- -------------------------------------------------------------------------TESTE--------------------------------------------------------------------- --}}

</section>

@endsection
