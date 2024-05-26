@extends('layouts.app')

@section('content')
    
        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-login" class="titulo col-xl-4 text-center">BEM VINDO(A), USERNAME</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>

        <div class="row mt-3">
            <div id="subtitulo-cliente" class="titulo col-12 text-center align-items-center">
                <p class="m-0 p-1">LEGALEASY - PLATAFORMA DE ATENDIMENTO PARA REQUISIÇÃO DE DEFENSORIA PÚBLICA</p>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <div class="col-9 text-left">
                <h2 class="titulo">O que é?</h2>
                <p class="f-texto">Atendimeto a pessoas de baixa renda com necessidade de representação jurídica em processos legais.</p>
                <h2 class="titulo">Quem pode utilizar?</h2>
                <p class="f-texto">Qualquer cidadão regulamentado pelo estado nos conformes da lei. Quaisquer documentos necessários já foram inseridos durante o processo de cadastro da conta.</p>
                <h2 class="titulo">Quanto devo pagar?</h2>
                <p class="f-texto">Por ser um serviço público, o uso é gratuito.</p>
                <h2 class="titulo">Como usar a plataforma?</h2>
                <p class="f-texto">O atendimento começa assim que o cidadão acessa a plataforma. O mesmo deve, então, selecionar um dos profissionais listados e fazer uma requisição de contato ou, alternativamente, abrir um caso a ser analisado e selecionado por advogados atuantes da plataforma.</p>
            </div>
        </div>

        <div class="row justify-content-center mt-4">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-login" class="titulo col-xl-4 text-center">CONHEÇA NOSSOS FILIADOS</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
            <p class="f-texto text-center">Clique em um item da lista para visualizar mais detalhes. Confira alguns dos profissionais cadastrados em nossa plataforma:</p>
        </div>

        <div class="row justify-content-center">
            <div class="card col-10">
                <div class="card-header card-lista-header text-center">
                    Advogados cadastrados
                </div>
                <div class="card-body card-lista-body p-2">
                    <div class="col-12 card p-2 mt-2">
                        <div class="row">
                            <div class="col-6" style="border-right: 1px solid gray;">
                                <p class="m-0 nome-advogado">Nome do Advogado</p>
                                <p class="m-0">Estrelas (À fazer)</p>
                                <p class="m-0">Número de avaliações: 7</p>
                                <p class="m-0">Serviços: Advogado Civil</p>
                            </div>
                            <div class="row col-5 ms-2">
                                <div class="col-4">
                                    <img src="../images/advogado.png" alt="" width="100px;">
                                </div>
                                <div class="col-8">
                                    <p class="mt-1 m-0 nome-advogado">Sobre o Profissional</p>
                                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quibusdam sed deleniti cupiditate.</p>
                                </div>
                            </div>
                        </div>
                    </div> 
                    <div class="col-12 card p-2 mt-2">
                        <div class="row">
                            <div class="col-6" style="border-right: 1px solid gray;">
                                <p class="m-0 nome-advogado">Nome do Advogado</p>
                                <p class="m-0">Estrelas (À fazer)</p>
                                <p class="m-0">Número de avaliações: 7</p>
                                <p class="m-0">Serviços: Advogado Civil</p>
                            </div>
                            <div class="row col-5 ms-2">
                                <div class="col-4">
                                    <img src="../images/advogado.png" alt="" width="100px;">
                                </div>
                                <div class="col-8">
                                    <p class="mt-1 m-0 nome-advogado">Sobre o Profissional</p>
                                    <p class="m-0">Lorem ipsum dolor sit amet consectetur adipisicing elit. In quibusdam sed deleniti cupiditate.</p>
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



@endsection