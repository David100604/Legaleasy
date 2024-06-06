<?php
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

// HOMEPAGES

Route::controller(App\Http\Controllers\HomeController::class)->group(function() {
    Route::get('/home-advogado/{usuario_id}', 'advogado')->name('home-advogado');
    Route::get('/home/{usuario_id}', 'cliente')->name('home-cliente');
});


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
    Route::post('/cadastro/endereco', 'store')->name('endereco.incluir');
    Route::get('/cadastro/endereco/{usuario_id}', 'index')->name('endereco');
});

// dados curriculares
Route::controller(App\Http\Controllers\DadosCurricularesController::class)->group(function(){
    Route::post('/cadastro/dados-curriculares', 'store')->name('dados-curriculares.incluir');
    Route::get('/cadastro/dados-curriculares/{usuario_id}', 'index')->name('dados-curriculares');
});


//CASOS

Route::controller(App\Http\Controllers\CasoController::class)->group(function(){
    Route::get('/registrar-caso/{usuario_id}', 'index')->name('registrar-caso');
    Route::post('/registrar-caso', 'store')->name('caso.incluir');
    Route::get('/casos-abertos/{usuario_id}', 'casosAbertos')->name('casos-abertos');
    Route::get('/caso/{caso_id}/{usuario_id}', 'caso')->name('caso');
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

use App\Http\Controllers\ChatController;
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
