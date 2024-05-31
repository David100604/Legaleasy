<?php

use Illuminate\Support\Facades\Route;

// HOMEPAGES

Route::get('/home-cliente', function () {
    return view('home-pages.home-cliente');
});

Route::get('/home-advogado', function () {
    return view('home-pages.homepage-advogado');
});

// CADASTROS

// nova conta
Route::get('/cadastro', function () {return view('cadastro.nova-conta');});

Route::post('/cadastro/incluir', [App\Http\Controllers\TipoContaController::class, 'store'])->name('tipo-conta.incluir');

// dados pessoais

Route::post('/cadastro/dados-pessoais/incluir', [App\Http\Controllers\UsuarioController::class, 'store'])->name('usuario.incluir');

Route::get('/cadastro/dados-pessoais/{tipoConta_id}', [App\Http\Controllers\UsuarioController::class, 'index'])->name('dados-pessoais');

// endereço

Route::post('/cadastro/endereco/incluir', [App\Http\Controllers\EnderecoController::class, 'store'])->name('endereco.incluir');

Route::get('/cadastro/endereco/{usuario_id}', [App\Http\Controllers\EnderecoController::class, 'index'])->name('endereco');

// dados curriculares

Route::post('/cadastro/dados-curriculares/incluir', [App\Http\Controllers\DadosCurricularesController::class, 'store'])->name('dados-curriculares.incluir');

Route::get('/cadastro/dados-curriculares/{usuario_id}', [App\Http\Controllers\DadosCurricularesController::class, 'index'])->name('dados-curriculares');

//CASOS

// casos abertos

Route::get('/casos-abertos', function () {
    return view('casos.casos-abertos');
});

// registrar caso

Route::get('/registrar-caso', function () {
    return view('casos.registrar-caso');
});

// exibir caso

Route::get('/caso', function () {
    return view('casos.caso');
});

// LOGIN

Route::get('/login', function () {
    return view('cadastro.login');
});

Route::get('/teste', function () {
    return view('home-pages.teste');
});

// ADVOGADOS

// lista advogados

Route::get('/advogados', function () {
    return view('advogados.advogados');
});

// TELA INICIAL

Route::get('/', function () {
    return view('home-pages.tela-inicial');
})->name('home');
