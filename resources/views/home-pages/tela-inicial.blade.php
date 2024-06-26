<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'LegalEasy') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    

</head>
<body>
    
            <div>
                <nav class="navbar navbar-expand bg-body-tertiary" data-bs-theme="dark">
                    <div class="container-fluid">
                        
                        <div>
                            <a class="navbar-brand" href="#">LEGALEASY</a>
                        </div>

                      <div class="collapse navbar-collapse" id="navbar-right " >
                        <ul class="navbar-nav" id="navbar-right">
                          <li class="nav-item">
                            <a class="nav-link active d-none d-md-block" href="../cadastro">Criar Conta</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ route('login.index') }}">Fazer Login</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
            <div id="tela-inicio">
                <div class="row justify-content-center">
                    <img src="../images/logo_legaleasy.png" alt="" class="mt-3 col-4 col-md-2 col-lg-1" >
                    
                </div>
                
                <center>
                    <div class="row justify-content-center">
                        <img class="linha-branca align-self-center col-md-3 col-xl-4 d-none d-md-block" src="../images/linha-branca.png" alt="">
                        <img src="../images/legaleasy_nome.png" alt="" class="col-5 col-md-3 col-lg-2 mx-4" >
                        <img class="linha-branca align-self-center col-md-3 col-xl-4 d-none d-md-block" src="../images/linha-branca-direita.png" alt="">
                    </div>
                <div>
                    <br>
                    <br>
                    <div>
                        <h1 class="titulo-inicio col-11 col-md-10 col-lg-10" >PLATAFORMA  GRATUITA  DE  CONSULTORIA  JURÍDICA</h1>
                    </div>
                </div>
                </center>
                <center>
                    <div class="my-5" >
                        <h1 class="titulo-inicio col-8 col-md-10 col-lg-10" >Fale com um Advogado Online</h1>
                    </div>
                    <div>
                        <img src="../images/linha_central_inicio.png" class="col-10 col-md-9 col-lg-8" alt="">
                    </div>
                    <div class="my-5">
                        <a class="criar-conta" id="criacao" href="../cadastro">Criar Conta</a>
                    </div>
                    <br>
                    <br>
                    </center>
            </div>

            
            
            <div class="body_inicial">
                <div class="py-4">
                    <center>
                    <img id="fontezinha" src="../images/stay_inside.png" alt="">
                    </center>
                    <div class="py-3">
                        <center>
                        <img src="../images/linha-sup.png" class="col-10 col-md-9 col-lg-8" alt="">
                        </center>
                    </div>
                    <div>
                        <center>
                        <img src="../images/know_plataform.png" alt="">
                        </center>   
                    </div>
                    <section class="row justify-content-center card-group">
                        <div class="row col-9 col-lg-12 justify-content-around">
                            <div class="p-2 col-12 col-md-5 col-lg-2 mt-3 card">
                                <center>
                                    <h3 class="titulo" >Converse da maneira que preferir</h3>
                                    
                                    <p class="paragrafozin">Fale com um advogado diretamente pelo chat
                                        da LegalEasy, ou passe suas informações de contato.
                                    </p>
                                </center>
                                <div>
                                    <center>
                                        <h5><a class="btn btn-secondary btn-sm" id="saiba-mais" href="" style="color: #ffffff;">Saiba Mais</a></h5>
                                    </center>
                                </div> 
                            </div>
                            <div class="p-2 col-12 col-md-5 col-lg-2 mt-3 card">
                                <center>
                                    <h3 class="titulo">Registre seu caso em aberto na plataforma</h3>
                            
                                    <p class="paragrafozin">Seu caso será listado para advogados de prontidão 
                                        na plataforma, que incluirão o contato.
                                    </p>
                                </center>
                                <div>
                                    <center>
                                        <h5><a class="btn btn-secondary btn-sm" id="saiba-mais" href="" style="color: #ffffff;">Saiba Mais</a></h5>
                                    </center>
                                </div> 
                            </div>
                            <div class="p-2 col-12 col-md-5 col-lg-2 mt-3 card">
                                <center>
                                    <h3 class="titulo">Contate um advogado diretamente</h3>
                                
                                    <p class="paragrafozin">A Legaleasy possui seção de afiliados onde estão 
                                        listados profissionais capacitados para suas necessidades.
                                    </p>
                                </center>
                                <div>
                                    <center>
                                        <h5><a class="btn btn-secondary btn-sm" id="saiba-mais" href="" style="color: #ffffff;">Saiba Mais</a></h5>
                                    </center>
                                </div> 
                            </div>
                            <div class="p-2 col-12 col-md-5 col-lg-2 mt-3 card">
                                <center>
                                    <h3 class="titulo">Suporte a defensoria pública</h3>

                                    <p class="paragrafozin">Temos como objetivo facilitar o acesso à serviços de advocacia
                                        públicos, por isso o uso é gratuito.
                                    </p>
                                </center>
                                <div>
                                    <center>
                                        <h5><a class="btn btn-secondary btn-sm" id="saiba-mais" href="" style="color: #ffffff;">Saiba Mais</a></h5>
                                    </center>
                                </div> 
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            

            <div class="align-items-end">
                <footer id="footer" class="align-self-end">
                    <div class="row justify-content-around">
                        <div class="col-md-4 col-6 text-center my-3">
                            <p class="m-0">FAQ</p>
                            <p class="m-0">Perguntas Frequentes</p>
                        </div>
                        <div class="col-md-4 col-6 text-center my-3">
                            <p class="m-0">Contato</p>
                            <p class="m-0">(27) 98158-3081</p>
                            <p class="m-0">legaleasy@gmail.com</p>
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>
    </div>

    
</body>
</html>
