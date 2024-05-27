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
    
    <div id="base" class="row" >     
        
        <div id="nav" class="nav position-fixed col-9 col-md-3 col-lg-2 collapse d-md-block">
            <div class="row justify-content-center">
                <img src="../images/sidebar-logo.png" alt="" class="d-none d-md-block col-10 col-lg-8 mt-4">
                <img src="../images/linha-sidebar.png" alt="" class="d-none d-md-block col-11 col-lg-10 mt-2">
            </div>
            <div class="mt-2" style="height: 80%;">
                <nav>
                    <ul class="list-unstyled text-center mt-4">
                        <li class="my-3 side-item">Dashboard</li>
                        <li class="my-3 side-item">Casos Abertos</li>
                        <li class="my-3 side-item">Filiados</li>
                        <li class="my-3 side-item">Requisições</li>
                        <li class="my-3 side-item">Perfil</li>
                        <li class="my-3 side-item">Mensagens</li>
                        <li class="my-3 side-item">Notificações</li>
                    </ul>
                </nav>
            </div>
            <div class="row justify-content-center">
                <img src="../images/linha-sidebar.png" alt="" class="self-align-center col-10 col-lg-10 d-none d-md-block mb-4">
            </div>
        </div> 

        <div class="base-container col-12 col-md-9 col-lg-10 offset-lg-2 offset-md-3" >
            <header id="header-cadastros" class="d-flex flex-column mt-4" >

                <img id="logo" class="align-self-center" src="../images/logo.png" alt="">

                <img id="linha-sup" class="align-self-center" src="../images/linha-sup.png" alt="">

            </header>

            <div id="app">
                <main>
                    @yield('content')
                </main>
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
                            <p class="m-0">mail@mail.com</p>
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>
    </div>

    
</body>
</html>
