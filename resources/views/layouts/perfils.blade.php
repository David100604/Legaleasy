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
                <img src="{{ asset('images/sidebar-logo.png') }}" alt="" class="d-none d-md-block col-10 col-lg-8 mt-4">
                <img src="{{ asset('images/linha-sidebar.png') }}" alt="" class="d-none d-md-block col-11 col-lg-10 mt-2">
            </div> 
            <div class="mt-2" style="height: 80%;">
                @if($usuario->tipoConta == 'Cliente')
                    <nav>
                        <ul class="list-unstyled text-center mt-4">
                            <li class="my-3 side-item"><a href="{{ route('home-cliente', ['usuario_id' => $usuario->usuario_id]) }}">Home</a></li>
                            <li class="my-3 side-item"><a href="{{ route('advogados.index', ['usuario_id' => $usuario->usuario_id]) }}">Advogados</a></li>
                            <li class="my-3 side-item"><a href="{{ route('registrar-caso', ['usuario_id' => $usuario->usuario_id]) }}">Registrar Caso</a></li>
                            <li class="my-3 side-item"><a href="{{ route('perfil-cliente', ['usuario_id' => $usuario->usuario_id]) }}">Perfil</a></li>
                            <li class="my-3 side-item"><a href="">Notificações</a></li>
                        </ul>
                    </nav>
                @elseif ($usuario->tipoConta == 'Advogado')
                    <nav>
                        <ul class="list-unstyled text-center mt-4">
                            <li class="my-3 side-item"><a href="{{ route('home-advogado', ['usuario_id' => $usuario->usuario_id]) }}">Home</a></li>
                            <li class="my-3 side-item"><a href="{{ route('casos-abertos', ['usuario_id' => $usuario->usuario_id]) }}">Casos Abertos</a></li>
                            <li class="my-3 side-item"><a href="{{ route('perfil-advogado', ['usuario_id' => $usuario->usuario_id]) }}">Perfil</a></li>
                            <li class="my-3 side-item"><a href="">Notificações</a></li>
                        </ul>
                    </nav>
                @elseif ($usuario->tipoConta == 'Administrador')
                    <nav>
                        <ul class="list-unstyled text-center mt-4">
                            <li class="my-3 side-item"><a href="{{ route('home-cliente', ['usuario_id' => $usuario->usuario_id]) }}">Home Cliente</a></li>
                            <li class="my-3 side-item"><a href="{{ route('home-advogado', ['usuario_id' => $usuario->usuario_id]) }}">Home Advogado</a></li>
                            <li class="my-3 side-item"><a href="{{ route('casos-abertos', ['usuario_id' => $usuario->usuario_id]) }}">Casos Abertos</a></li>
                            <li class="my-3 side-item"><a href="{{ route('registrar-caso', ['usuario_id' => $usuario->usuario_id]) }}">Registrar Caso</a></li>
                            <li class="my-3 side-item"><a href="{{ route('advogados.index', ['usuario_id' => $usuario->usuario_id]) }}">Advogados</a></li>
                            <li class="my-3 side-item"><a href="">Notificações</a></li>
                        </ul>
                    </nav>
                @endif
            </div>
            <div class="row justify-content-center">
                <a href="{{ route('login.destroy') }}" class="btn btn-azul">Sair</a>
                <img src="{{ asset('images/linha-sidebar.png') }}" alt="" class="self-align-center col-10 col-lg-10 d-none d-md-block mb-4">
            </div>
        </div> 

        <div class="base-container col-12 col-md-9 col-lg-10 offset-lg-2 offset-md-3" >

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
                            <p class="m-0">LegalEasy@mail.com</p>
                        </div>
                    </div>
                </footer>
            </div>
            
        </div>
    </div>

    
</body>
</html>
