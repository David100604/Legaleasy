@extends('layouts.app')

@section('content')

        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="titulo col-10 col-xl-4 text-center">LISTA DE CASOS ABERTOS</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>
        
        <form action="{{ route('caso.pesquisar', ['usuario_id' => $usuario->usuario_id])  }}" method="POST">
            @csrf
            <div id="inputs-pesquisa" class="my-2 row justify-content-center mt-1">
                <div class="col-9 text-left d-flex flex-column">
                    <select id="tipo-caso" name="tipoCaso" class="form-select" aria-label="">
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

                <div class="my-2 col-9 row justify-content-between">
                    <div class="col-12 col-xl-8 d-flex flex-column">
                        <input type="text" class="p-2" id="titulo-caso" name="titulo"
                        placeholder="Insira o código ou título do caso">
                    </div>

                    <div class="col-12 col-xl-3 d-flex mt-xl-0 mt-2 flex-column">
                        <button type="submit" class="btn btn-azul">PESQUISAR</button>
                    </div>
                </div>

            </div>
        </form>

        <section class="row justify-content-center">
            <div class="row col-9 justify-content-left">
                @foreach($casos as $caso)
                    @if($caso)
                    <div class="px-2 col-12 col-xl-4 my-3">
                        <div class="card f-campos">
                            <h5 class="card-header text-center">{{ $caso->titulo}}</h5>
                            <div class="card-body">
                                <p><span class="nome-campo">Cliente:</span> {{ $caso->cliente}}</p>
                                <p><span class="nome-campo">Tipo:</span> {{ $caso->tipoCaso }}</p>
                                <p><span class="nome-campo">Descrição:</span> {{ $caso->descricao }}</p>
                            </div>
                            <a href="{{ route('caso', ['caso_id' => $caso->caso_id, 'usuario_id' => $usuario->usuario_id]) }}" class="btn btn-dark">Visualizar detalhes</a>
                        </div>
                    </div>
                    @endif
                @endforeach

            </div>
        </section>

@endsection
