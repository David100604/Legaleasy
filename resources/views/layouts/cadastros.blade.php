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
    <div id="base-cadastros" class="row justify-content-center">

        <div id="container-cadastros" class="col-md-8 row justify-content-center" >
            <header id="header-cadastros" class="d-flex flex-column mt-4">

                <img id="logo" class="align-self-center" src="../images/logo.png" alt="">

                <img id="linha-sup" class="align-self-center" src="../images/linha-sup.png" alt="">

                <div id="app">
                    <main>
                        @yield('content')
                    </main>

                </div>

            </header>

            

            <footer id="footer" class="align-self-end">
                <div class="row justify-content-around my-3">
                    <div class="col-md-4 col-6 text-center">
                        <p class="m-0">FAQ</p>
                        <p class="m-0">Perguntas Frequentes</p>
                    </div>
                    <div class="col-md-4 col-6 text-center">
                        <p class="m-0">Contato</p>
                        <p class="m-0">(27) 98158-3081</p>
                        <p class="m-0">mail@mail.com</p>
                    </div>
                </div>
            </footer>


        </div>

    </div>

</body>
</html>
