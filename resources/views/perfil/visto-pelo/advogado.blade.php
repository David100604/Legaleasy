@extends('layouts.perfils')

@section('content')



<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <img src="../images/foto-de-perfil.jpeg" class="rounded-circle mb-3" alt="Profile Picture" width="150">
                <h3>Rhuan Bryan</h3>
                <p>Serra, Espírito Santo, Brasil</p>
            </div>
            <div class="col-md-9">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Sobre</h5>
                        <p class="card-text">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae lorem hendrerit, cursus ligula et, porta lacus. Phasellus ut tellus.
                        </p>
                        <p class="card-text">
                            <strong>Serviços que atende:</strong>
                            <ul>
                                <li>Cível</li>
                                <li>Trabalhista</li>
                                <li>Imobiliário</li>
                                <li>Ambientalista</li>
                                <li>Consumidor</li>
                                <li>Criminalista</li>
                                <li>Previdenciário</li>
                                <li>Digital</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">Feedback dos clientes</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teste 1</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teste 2</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <button type="button" class="btn btn-outline-primary">Enviar mensagem</button>
            </div>
        </div>
    </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">Certificados</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teste 1</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teste 2</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card mb-4">
                    <div class="card-header">Casos (finalizados)</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teste 1</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card mb-2">
                                    <div class="card-body">
                                        <h5 class="card-title">Teste 2</h5>
                                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <button class="btn btn-primary">Notificações</button>
                        <button class="btn btn-secondary">Mensagens</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>




@endsection