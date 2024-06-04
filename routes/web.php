<?php

use Illuminate\Support\Facades\Route;

// HOMEPAGES

Route::get('/home-cliente', function () {
    return view('home-pages.home-cliente');
})->name('home-cliente');

Route::get('/home-advogado', function () {
    return view('home-pages.homepage-advogado');
})->name('home-advogado');

// CADASTROS

// nova conta
Route::controller(App\Http\Controllers\TipoContaController::class)->group(function(){
    Route::get('/cadastro', 'index')->name('tipo-conta');
    Route::post('/cadastro', 'store')->name('tipo-conta.incluir');
});

// dados pessoais
Route::controller(App\Http\Controllers\UsuarioController::class)->group(function(){
    Route::post('/cadastro/dados-pessoais', 'store')->name('usuario.incluir');
    Route::get('/cadastro/dados-pessoais/{tipoConta_id}', 'index')->name('dados-pessoais');
});

// endereço
Route::controller(App\Http\Controllers\EnderecoController::class)->group(function(){
    Route::post('/cadastro/endereco/incluir', 'store')->name('endereco.incluir');
    Route::get('/cadastro/endereco/{usuario_id}', 'index')->name('endereco');
});

// dados curriculares
Route::controller(App\Http\Controllers\DadosCurricularesController::class)->group(function(){
    Route::post('/cadastro/dados-curriculares', 'store')->name('dados-curriculares.incluir');
    Route::get('/cadastro/dados-curriculares/{usuario_id}', 'index')->name('dados-curriculares');
});


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

Route::controller(App\Http\Controllers\LoginController::class)->group(function() {
    Route::get('/login', 'index')->name('login.index');
    Route::post('/login', 'store')->name('login.store');
    Route::get('/logout', 'destroy')->name('login.destroy');
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

// PERFIL 

Route::get('/perfil-advogado', function () {
    return view('perfil.perfil-advogado');
})->name('perfil-advogado');

Route::get('/perfil-cliente', function () {
    return view('perfil.perfil-cliente');
})->name('perfil-cliente');