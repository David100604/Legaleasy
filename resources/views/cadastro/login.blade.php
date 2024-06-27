@extends('layouts.cadastros')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

<section class="d-flex flex-column justify-content-center">

    <div class="row justify-content-center">
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
        <h1 id="titulo-login" class="titulo col-10 col-xl-4 text-center">FAÇA LOGIN NA PLATAFORMA</h1>
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
    </div>

    <div class="row justify-content-center f-texto">
        <div class="text-left col-9">
            <p id="info-login" class="text-center col-12">
                Insira seus dados de login nos campos abaixo:
            </p>
        </div>
    </div>

    <form action="{{ route('login.store') }}" method="post">
        @csrf
        <div id="inputs-cadastro" class="row justify-content-center mt-1">
            <div class="col-5 col-md-4 text-left d-flex flex-column position-relative">
                <label for="email" class="f-texto">Email</label>
                <i class="fa-solid fa-envelope position-absolute" style="top: 40px; left: 8px;"></i>
                <input type="text" name="email" class="p-2 ps-4" placeholder="Insira seu email" value="{{ old('email') }}">
                @if ($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                @endif
            </div>
        </div>

        <div id="inputs-cadastro" class="row justify-content-center mt-3">
            <div class="col-5 col-md-4 text-left d-flex flex-column position-relative">
                <label for="senha" class="f-texto">Senha</label>
                <i class="fa-solid fa-key position-absolute" style="top: 40px; left: 8px;"></i>
                <input type="password" name="senha" class="p-2 ps-4" placeholder="Insira sua senha">
                @if ($errors->has('senha'))
                    <span class="text-danger">{{ $errors->first('senha') }}</span>
                @endif
            </div>
        </div>

        @include('componentes.botoes')
    </form>

</section>

@endsection

{{-- @extends('layouts.cadastros')

@section('content')

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<section class="d-flex flex-column justify-content-center">

    <div class="row justify-content-center">
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca.png') }}" alt="">
        <h1 id="titulo-login" class="titulo col-10 col-xl-4 text-center">FAÇA LOGIN NA PLATAFORMA</h1>
        <img class="linha-branca align-self-center col-xl-4 d-none d-xl-block" src="{{ asset('images/linha-branca-direita.png') }}" alt="">
    </div>

    <div class="row justify-content-center f-texto">
        <div class="text-left col-9">
            <p id="info-login" class="text-center col-12">
                Insira seus dados de login nos campos abaixo:
            </p>
        </div>
    </div>

    <form id="login-form">
        @csrf
        <div id="inputs-cadastro" class="row justify-content-center mt-1">
            <div class="col-5 col-md-4 text-left d-flex flex-column position-relative">
                <label for="email" class="f-texto">Email</label>
                <i class="fa-solid fa-envelope position-absolute" style="top: 40px; left: 8px;"></i>
                <input type="text" name="email" id="email" class="p-2 ps-4" placeholder="Insira seu email" value="{{ old('email') }}">
                <span class="text-danger" id="email-error"></span>
            </div>
        </div>

        <div id="inputs-cadastro" class="row justify-content-center mt-3">
            <div class="col-5 col-md-4 text-left d-flex flex-column position-relative">
                <label for="senha" class="f-texto">Senha</label>
                <i class="fa-solid fa-key position-absolute" style="top: 40px; left: 8px;"></i>
                <input type="password" name="senha" id="senha" class="p-2 ps-4" placeholder="Insira sua senha">
                <span class="text-danger" id="senha-error"></span>
            </div>
        </div>

        @include('componentes.botoes')
    </form>

</section>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.getElementById('login-form').addEventListener('submit', function(event) {
        event.preventDefault();

        let formData = new FormData(this);
        let csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        fetch('{{ route("login.store") }}', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json',
            },
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Login bem-sucedido',
                    text: `Bem-vindo, ${data.tipo}!`,
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirecione para a página apropriada com base no tipo de conta
                        if (data.tipo === 'cliente') {
                            window.location.href = '/pagina_cliente';
                        } else if (data.tipo === 'advogado') {
                            window.location.href = '/pagina_advogado';
                        } else if (data.tipo === 'admin') {
                            window.location.href = '/pagina_admin';
                        }
                    }
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Falha no login',
                    text: data.message,
                    confirmButtonText: 'Tentar novamente'
                });
            }
        })
        .catch(error => {
            console.error('Erro:', error);
            Swal.fire({
                icon: 'error',
                title: 'Erro',
                text: 'Ocorreu um erro ao processar sua solicitação.',
                confirmButtonText: 'Tentar novamente'
            });
        });
    });
</script>

@endsection --}}
