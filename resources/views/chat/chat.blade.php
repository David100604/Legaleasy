@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <!-- Sidebar de Contatos -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">CONTATOS</div>
                <div class="card-body">
                    <p>Clique em um contato para abrir uma janela de conversa</p>
                    <input type="text" class="form-control mb-3" placeholder="Pesquisar por nome">
                    <div class="list-group">
                        <!-- Exemplo de contato -->
                        <a href="#" class="list-group-item list-group-item-action">
                            <img src="https://via.placeholder.com/40" class="rounded-circle mr-2" alt="Avatar">
                            <div class="d-inline-block">
                                <strong>Nome do contato</strong><br>
                                <small>Última mensagem... - 4h</small>
                            </div>
                        </a>
                        <!-- Repetir para outros contatos -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Janela de Chat -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div>
                        <img src="https://via.placeholder.com/40" class="rounded-circle mr-2" alt="Avatar">
                        <strong>George Washington</strong>
                    </div>
                    <button class="btn btn-secondary">VOLTAR</button>
                </div>
                <div class="card-body chat-window">
                    <!-- Exemplo de mensagens -->
                    <div class="message my-message">
                        <img src="https://via.placeholder.com/40" class="rounded-circle mr-2" alt="Avatar">
                        <span>Olá, como vai?</span>
                    </div>
                    <div class="message other-message">
                        <img src="https://via.placeholder.com/40" class="rounded-circle mr-2" alt="Avatar">
                        <span>Tudo bem, e você?</span>
                    </div>
                    <!-- Repetir para outras mensagens -->
                </div>
                <div class="card-footer">
                    <form action="#" method="POST">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Digite uma mensagem">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">ENVIAR</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

