@extends('layouts.app')

@section('content')
    
        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
            <h1 id="titulo" class="titulo col-xl-4 text-center">LISTA DE ADVOGADOS</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
        </div>

        <form action="{{ route('advogados.pesquisar', ['usuario_id' => $usuario->usuario_id])  }}" method="POST">
            @csrf
            <div id="inputs-pesquisa" class="my-2 row justify-content-center mt-1">
                <div class="col-9 text-left d-flex flex-column">
                    <select id="tipo-advogado" name="tipoAdvogado" class="form-select" aria-label="">
                        <option disabled selected class="opcoes">Selecione uma categoria</option>
                        <option value="Administrativo" class="opcoes">Administrativo</option>
                        <option value="Ambiental" class="opcoes">Ambiental</option>
                        <option value="Civil" class="opcoes">Civil</option>
                        <option value="Comercial" class="opcoes">Comercial</option>
                        <option value="Constitucional" class="opcoes">Constitucional</option>
                        <option value="Contratual" class="opcoes">Contratual</option>
                        <option value="Relações Internacionais" class="opcoes">Relações Internacionais</option>
                        <option value="Direitos do Consumidor" class="opcoes">Direitos do Consumidor</option>
                        <option value="Digital" class="opcoes">Digital</option>
                        <option value="Eleitoral" class="opcoes">Eleitoral</option>
                        <option value="Penal" class="opcoes">Penal</option>
                        <option value="Previdenciário" class="opcoes">Previdenciário</option>
                        <option value="Trabalhista" class="opcoes">Trabalhistas</option>
                        <option value="Tributário" class="opcoes">Tributário</option>
                        <option value="Criminal" class="opcoes">Criminal</option>
                    </select>
                </div>

                <div class="my-2 col-9 d-flex justify-content-between">
                    <div class="col-8  d-flex flex-column">
                        <input type="text" class="p-2" id="nome" name="nome" 
                        placeholder="Insira o nome do profissioal">
                    </div>
                
                    <div class="col-3 d-flex flex-column">
                        <button class="btn btn-azul">PESQUISAR</button>
                    </div>
                </div>
            </div>
        </form>

        <div class="row justify-content-center f-texto">
            <p class="col-9 text-left d-none d-lg-block">
                Clique em um advogado da lista para abrir seu perfil.    
            </p>
        </div>

        <div class="row justify-content-center f-advogados">
            @foreach($advogados as $advogado)
                @if($advogado)
                    <div class="col-9 card p-2 mt-2">
                        <div class="row">
                            <div class="col-6" style="border-right: 1px solid gray;">
                                <p class="m-0 nome-advogado">{{ $advogado->nome }}</p>
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
                                <p class="m-0">Número de avaliações: 7</p>
                                <p class="m-0">Serviços: {{ $advogado->advogado->tipoAdvogado }}</p>
                            </div>
                            <div class="row col-5 ms-2">
                                <div class="col-4">
                                    <img src="{{ asset('images/' . $advogado->foto) }}" width="100px;" height="100px;">
                                </div>
                                <div class="col-8">
                                    <p class="mt-1 m-0 nome-advogado">Sobre o Profissional</p>
                                    <p class="m-0">{{ $advogado->descricao }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>

    
@endsection