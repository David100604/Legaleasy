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
                        <li class="my-3 side-item">Configurações</li>
                        <li class="my-3 side-item">Suporte</li>
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

            <div class="row justify-content-center">
                <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
                <h1 id="titulo" class="titulo col-xl-4 text-center">REGISTRAR CASO</h1>
                <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
            </div>

            <div class="row justify-content-center f-texto">

                <div class="text-left col-9">
                    <p class="text-left">
                        Preencha os campos a seguir para registrar um caso em aberto. Nossos profissionais podem selecionar casos abertos para auxiliá-los.
                    </p>
                </div>
            </div>

            <form action="" class="mb-5">

                <div class="row justify-content-center">
                    <div class="col-8 col-lg-4">
                        <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                            <label for="titulo-caso" class="f-texto">Título</label>
                            <input type="text" class="p-2" id="titulo-caso" name="titulo-caso" placeholder="ex.: Violência doméstica" required>
                        </div>
                        <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                            <label for="descricao" class="f-texto">Descrição</label>
                            <textarea rows="3" class="p-2" name="descricao" id="descricao"></textarea>
                        </div>
                        <div class="text-left d-flex flex-column pe-lg-5 mt-lg-3">
                            <label for="tipo-caso" class="f-texto">Tipo de caso</label>
                            <select id="tipo-caso" class="form-select" aria-label="">
                                <option disabled selected class="opcoes">Selecione uma categoria</option>
                                <option value="advogado" class="opcoes">Administrativo</option>
                                <option value="cliente" class="opcoes">Ambiental</option>
                                <option value="advogado" class="opcoes">Civil</option>
                                <option value="cliente" class="opcoes">Comercial</option>
                                <option value="advogado" class="opcoes">Constitucional</option>
                                <option value="cliente" class="opcoes">Contratual</option>
                                <option value="cliente" class="opcoes">Relações Internacionais</option>
                                <option value="advogado" class="opcoes">Direitos do Consumidor</option>
                                <option value="advogado" class="opcoes">Digital</option>
                                <option value="cliente" class="opcoes"></option>
                                <option value="advogado" class="opcoes"></option>
                                <option value="cliente" class="opcoes"></option>
                                <option value="advogado" class="opcoes"></option>
                                <option value="cliente" class="opcoes"></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-8 col-lg-4 text-left d-flex flex-column ps-lg-5 mt-lg-3">
                        <label for="documentos" class="f-texto">Anexar documentos</label>
                        <input type="text" class="p-2" id="documentos" name="documentos" required>
                    </div>
                </div>

            </form>

            <div class="row justify-content-center align-self-end my-5 mt-md-5">
                <img class="linha-branca align-self-center d-none d-xl-block" src="../images/linha-branca.png" alt="">
                <button class="align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn btn-dark">
                    VOLTAR
                </button>
                <button class="btn-azul align-self-center col-xl-2 col-7 m-1 py-1 py-sm-2 btn">
                    CADASTRAR
                </button>
                <img class="linha-branca align-self-center d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
            </div>

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

    
</body>
</html>
