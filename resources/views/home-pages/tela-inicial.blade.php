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
                <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
                    <div class="container-fluid">
                        
                        <div>
                            <a class="navbar-brand" href="#">LEGALEASY</a>
                        </div>

                      <div class="collapse navbar-collapse" id="navbar-right " >
                        <ul class="navbar-nav" id="navbar-right">
                          <li class="nav-item">
                            <a class="nav-link active" href="../cadastro">Criar Conta</a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="../login">Fazer Login</a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </nav>
            </div>
            <div id="tela-inicio">
                <div class="row justify-content-center">
                    <img src="../images/Logo-branca.png" alt="" class="col-2" >
                </div>
                <center>
                <div>
                    <br>
                    <br>
                    <img src="../images/plataforma-gratuita.png" alt="">
                </div>
                </center>
                <center>
                    <div>
                        <br>
                        <br>
                        <img src="../images/fale-com-adv.png" alt="">
                    </div>
                    </center>
            </div>
            

            <div class="align-items-end"></div>
                <footer id="footer" class="align-self-end">
                    <div class="row justify-content-around">
                        <div class="col-md-4 col-6 text-center my-3">
                            <p class="m-0">FAQ</p>
                            <p class="m-0">Perguntas Frequentes</p>
                        </div>
                        <div class="col-md-4 col-6 text-center my-3">
                            <p class="m-0">Contato</p>
                            <p class="m-0">(27) 98158-3081</p>
                            <p class="m-0">LegalEasy@mail.com</p>
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>
    </div>

    
</body>
</html>
