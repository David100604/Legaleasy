@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo-login" class="titulo col-xl-4 text-center" style="text-transform: uppercase;">BEM VINDO(A), {{ $usuario->nomeUsuario }}</h1>
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
            <p class="f-texto text-center col-10">Clique em um item da lista para visualizar mais detalhes. Confira alguns dos profissionais cadastrados em nossa plataforma:</p>
        </div>

        <div class="row justify-content-center mb-3">
            <div class="card col-10">
                <div class="card-header card-lista-header text-center">
                    Advogados Cadastrados
                </div>
                <div class="card-body card-lista-body p-2">
                    <div class="col-12 card p-2 mt-2 d-xl-block d-none">
                        <div class="row">
                            <div class="col-6" style="border-right: 1px solid gray;">
                                <p class="m-0 nome-advogado">Dra. Gabriela Nascimento</p>
                                <div class="star-rating">
                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label for="star5" title="5 estrelas">☆</label>
                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label for="star4" title="4 estrelas">☆</label>
                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label for="star3" title="3 estrelas">☆</label>
                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label for="star2" title="2 estrelas">☆</label>
                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label for="star1" title="1 estrela">☆</label>
                                </div>
                                <p class="m-0">Número de avaliações: 18</p>
                                <p class="m-0">Serviços: Advogada Empresarial</p>
                            </div>
                            <div class="row col-5 ms-2">
                                <div class="col-4">
                                    <img id="img-advogada" src="../images/Advogada_Gabriela.jpg" alt="" width="100px">
                                </div>
                                <div class="col-8">
                                    <p class="mt-1 m-0 nome-advogado">Sobre a Profissional</p>
                                    <p class="m-0">Especialista em direito empresarial, Dra. Gabriela Nascimento atua assessorando empresas em questões legais,
                                        contratos comerciais e governança corporativa. Ela possui uma profunda compreensão das necessidades das empresas e oferece
                                        consultoria estratégica para ajudar seus clientes a crescerem e se protegerem legalmente. Dra. Nascimento é conhecida por
                                        sua capacidade de solucionar problemas complexos de maneira prática e eficiente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="contentt row justify-content-around mt-3">
                        <button id="showMoreBtn"class="btn btn-dark w-100">Mostrar Mais</button>
                        <div class="more-text card-body card-lista-body p-2">
                            <div class="col-12 card p-2 mt-2 d-xl-block d-none">
                                <div class="row">
                                    <div class="col-6" style="border-right: 1px solid gray;">
                                        <p class="m-0 nome-advogado">Dr. André Luiz Ribeiro</p>
                                        <div class="star-rating">
                                            <input type="radio" id="star4" name="rating" value="4" />
                                            <label for="star4" title="4 estrelas">☆</label>
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star3" title="3 estrelas">☆</label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star2" title="2 estrelas">☆</label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label for="star1" title="1 estrela">☆</label>
                                        </div>
                                        <p class="m-0">Número de avaliações: 17</p>
                                        <p class="m-0">Serviços: Advogado Trabalhista</p>
                                    </div>
                                    <div class="row col-5 ms-2">
                                        <div class="col-4">
                                            <img id="img-advogada" src="../images/advogado_andre.png" width="100px">
                                        </div>
                                        <div class="col-8">
                                            <p class="mt-1 m-0 nome-advogado">Sobre a Profissional</p>
                                            <p class="m-0">Dr. André Luiz Ribeiro é um renomado advogado trabalhista 
                                                com vasta experiência em disputas entre empregadores e empregados. 
                                                Sua prática abrange desde negociações coletivas até litígios individuais. 
                                                Ele é um defensor ardente dos direitos dos trabalhadores e frequentemente 
                                                representa sindicatos em importantes causas trabalhistas.
                                            </p>
                                        </div>
                                    </div>
                            </div>
                        </div>

                        
                            <div class="col-12 card p-2 mt-2 d-xl-block d-none">
                                <div class="row">
                                    <div class="col-6" style="border-right: 1px solid gray;">
                                        <p class="m-0 nome-advogado">Dr. Marcelo Henrique Barros</p>
                                        <div class="star-rating">
                                            <input type="radio" id="star3" name="rating" value="3" />
                                            <label for="star3" title="3 estrelas">☆</label>
                                            <input type="radio" id="star2" name="rating" value="2" />
                                            <label for="star2" title="2 estrelas">☆</label>
                                            <input type="radio" id="star1" name="rating" value="1" />
                                            <label for="star1" title="1 estrela">☆</label>
                                        </div>
                                        <p class="m-0">Número de avaliações: 13</p>
                                        <p class="m-0">Serviços: Advogado Trabalhista</p>
                                    </div>
                                    <div class="row col-5 ms-2">
                                        <div class="col-4">
                                            <img id="img-advogada" src="../images/dr_marcelo.jpg" width="100px">
                                        </div>
                                        <div class="col-8">
                                            <p class="mt-1 m-0 nome-advogado">Sobre a Profissional</p>
                                            <p class="m-0">Dr. Marcelo Henrique Barros é um advogado de família com uma 
                                                reputação de excelência em casos de divórcio, guarda de filhos e adoção. 
                                                Ele possui uma abordagem empática e centrada no cliente, ajudando famílias 
                                                a navegar por momentos difíceis com sensibilidade e profissionalismo. Sua 
                                                prática é marcada pela busca de acordos amigáveis sempre que possível.

                                            </p>
                                        </div>
                                    </div>
                            </div>
                        


                    </div> 
                            
                    
                
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                        const showMoreBtn = document.getElementById("showMoreBtn");
                        const content = document.querySelector(".contentt");

                        showMoreBtn.addEventListener("click", function() {
                        content.classList.toggle("show");
                        if (content.classList.contains("show")) {
                            showMoreBtn.textContent = "Mostrar Menos";
                        } else {
                            showMoreBtn.textContent = "Mostrar Mais";
                        }
                        });
                        });

                    </script>
                

            </div>
        </div>



@endsection
