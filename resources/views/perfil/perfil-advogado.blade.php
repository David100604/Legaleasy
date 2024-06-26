@extends('layouts.perfils')

@section('content')
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />

<style>
    .edit-button {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: rgba(0, 0, 0, 0.5);
        border: none;
        border-radius: 50%;
        padding: 10px;
    }
    .edit-icon {
        color: white;
    }
    .profile-picture {
        position: relative;
        display: inline-block;
    }
</style>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3 text-center">
                <div class="profile-picture">
                    <img src="{{ asset('images/' . $usuario->foto) }}" class="rounded-circle mb-3" alt="Profile Picture" width="150">
                    <button class="edit-button" data-toggle="modal" data-target="#editProfilePictureModal">
                        <i class="fa fa-edit edit-icon"></i>
                    </button>
                </div>
                <h3>{{ $usuario->nome }}</h3>
                <p>Serra, Espírito Santo, Brasil</p>
            </div>
            <div class="col-md-9">
            
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Sobre</h5>
                        <p class="card-text" id="sobre-texto">
                            {{ $usuario->descricao }}
                        </p>
                        <button class="btn btn-dark mt-3 float-right" data-toggle="modal" data-target="#editSobreModal">Editar</button>
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
                <div class="card mb-4">
                    <div class="card-header">Histórico de casos (em andamento)</div>
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
                    <div class="card-header">Histórico de casos</div>
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
                <div class="card mb-4">
                    <div class="card-header">Histórico de casos (finalizados)</div>
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

    <div class="modal fade" id="editSobreModal" tabindex="-1" aria-labelledby="editSobreModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editSobreModalLabel">Editar Sobre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="editSobreForm" method="POST" action="{{ route('advogados.editar-sobre', ['usuario_id' => $usuario->usuario_id]) }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="sobre">Sobre</label>
                            <textarea class="form-control" id="sobre" name="sobre" rows="4" placeholder="Digite aqui o novo texto"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editProfilePictureModal" tabindex="-1" aria-labelledby="editProfilePictureModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editProfilePictureModalLabel">Editar Imagem de Perfil</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="editProfilePictureForm" method="POST" enctype="multipart/form-data" action="{{ route('advogados.editar-foto', ['usuario_id' => $usuario->usuario_id]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="imagem">Escolha uma nova imagem de perfil</label>
                                <input type="file" class="form-control-file" id="imagem" name="imagem" required>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-primary">Salvar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
</html>




@endsection