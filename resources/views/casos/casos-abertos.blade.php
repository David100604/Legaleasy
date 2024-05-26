@extends('layouts.app')

@section('content')
    
        <div class="row justify-content-center">
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca.png" alt="">
            <h1 id="titulo" class="titulo col-xl-4 text-center">LISTA DE CASOS ABERTOS</h1>
            <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="../images/linha-branca-direita.png" alt="">
        </div>

        <div id="inputs-pesquisa" class="my-2 row justify-content-center mt-1">
            <div class="col-9 text-left d-flex flex-column">
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

            <div class="my-2 col-9 d-flex justify-content-between">
                <div class="col-8  d-flex flex-column">
                    <input type="text" class="p-2" id="tipo-caso" name="tipo-caso" 
                    placeholder="Insira o código ou título do caso">
                </div>
                
                <div class="col-3 d-flex flex-column">
                    <button class="btn btn-azul">PESQUISAR</button>
                </div>
            </div>

            
        </div>

        <section class="row justify-content-center">
            <div class="row col-9 justify-content-left">
                <div class="px-2 col-4 mt-4">
                    <div class="card f-campos">
                        <h5 class="card-header text-center">Cód - Título do caso</h5>
                        <div class="card-body"> 
                            <p><span class="nome-campo">Cliente:</span> Gordon Ramsay</p>
                            <p><span class="nome-campo">Tipo:</span> Direitos do Consumidor</p>
                            <p><span class="nome-campo">Descrição:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id minus blanditiis sed cupiditate ex quisquam dolores cumque impedit aut error.</p>
                            <p><span class="nome-campo">Gratificação:</span> R$ XXX,XX</p>
                            
                        </div>
                        <a href="#" class="btn btn-dark">Visualizar detalhes</a>
                    </div>
                </div>
                <div class="px-2 col-4 mt-4">
                    <div class="card f-campos">
                        <h5 class="card-header text-center">Cód - Título do caso</h5>
                        <div class="card-body"> 
                            <p><span class="nome-campo">Cliente:</span> Gordon Ramsay</p>
                            <p><span class="nome-campo">Tipo:</span> Direitos do Consumidor</p>
                            <p><span class="nome-campo">Descrição:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id minus blanditiis sed cupiditate ex quisquam dolores cumque impedit aut error.</p>
                            <p><span class="nome-campo">Gratificação:</span> R$ XXX,XX</p>
                            
                        </div>
                        <a href="#" class="btn btn-dark">Visualizar detalhes</a>
                    </div>
                </div>
                <div class="px-2 col-4 mt-4">
                    <div class="card f-campos">
                        <h5 class="card-header text-center">Cód - Título do caso</h5>
                        <div class="card-body"> 
                            <p><span class="nome-campo">Cliente:</span> Gordon Ramsay</p>
                            <p><span class="nome-campo">Tipo:</span> Direitos do Consumidor</p>
                            <p><span class="nome-campo">Descrição:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id minus blanditiis sed cupiditate ex quisquam dolores cumque impedit aut error.</p>
                            <p><span class="nome-campo">Gratificação:</span> R$ XXX,XX</p>
                            
                        </div>
                        <a href="#" class="btn btn-dark">Visualizar detalhes</a>
                    </div>
                </div>
                <div class="px-2 col-4 mt-4">
                    <div class="card f-campos">
                        <h5 class="card-header text-center">Cód - Título do caso</h5>
                        <div class="card-body"> 
                            <p><span class="nome-campo">Cliente:</span> Gordon Ramsay</p>
                            <p><span class="nome-campo">Tipo:</span> Direitos do Consumidor</p>
                            <p><span class="nome-campo">Descrição:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id minus blanditiis sed cupiditate ex quisquam dolores cumque impedit aut error.</p>
                            <p><span class="nome-campo">Gratificação:</span> R$ XXX,XX</p>
                            
                        </div>
                        <a href="#" class="btn btn-dark">Visualizar detalhes</a>
                    </div>
                </div>
                <div class="px-2 col-4 mt-4">
                    <div class="card f-campos">
                        <h5 class="card-header text-center">Cód - Título do caso</h5>
                        <div class="card-body"> 
                            <p><span class="nome-campo">Cliente:</span> Gordon Ramsay</p>
                            <p><span class="nome-campo">Tipo:</span> Direitos do Consumidor</p>
                            <p><span class="nome-campo">Descrição:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id minus blanditiis sed cupiditate ex quisquam dolores cumque impedit aut error.</p>
                            <p><span class="nome-campo">Gratificação:</span> R$ XXX,XX</p>
                            
                        </div>
                        <a href="#" class="btn btn-dark">Visualizar detalhes</a>
                    </div>
                </div>
                <div class="px-2 col-4 mt-4">
                    <div class="card f-campos">
                        <h5 class="card-header text-center">Cód - Título do caso</h5>
                        <div class="card-body"> 
                            <p><span class="nome-campo">Cliente:</span> Gordon Ramsay</p>
                            <p><span class="nome-campo">Tipo:</span> Direitos do Consumidor</p>
                            <p><span class="nome-campo">Descrição:</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Id minus blanditiis sed cupiditate ex quisquam dolores cumque impedit aut error.</p>
                            <p><span class="nome-campo">Gratificação:</span> R$ XXX,XX</p>
                            
                        </div>
                        <a href="#" class="btn btn-dark">Visualizar detalhes</a>
                    </div>
                </div>
            </div>
        </section>
    
@endsection