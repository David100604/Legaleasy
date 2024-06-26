<?php
use App\Http\Controllers\MessageController;
use Illuminate\Support\Facades\Route;

// HOMEPAGES

Route::controller(App\Http\Controllers\HomeController::class)->group(function() {
    Route::get('/home-advogado/{usuario_id}', 'advogado')->name('home-advogado');
    Route::get('/home/{usuario_id}', 'cliente')->name('home-cliente');
});

Route::get('/download/{filename}', [App\Http\Controllers\FileController::class, 'download'])->name('file.download');

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
    Route::post('/caso/pesquisar/{usuario_id}', 'search')->name('caso.pesquisar');
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

Route::controller(App\Http\Controllers\AdvogadoController::class)->group(function() {
    Route::get('/advogados/{usuario_id}', 'index')->name('advogados.index');
    Route::post('/advogados/pesquisar/{usuario_id}', 'search')->name('advogados.pesquisar');
});
 
// TELA INICIAL

Route::get('/', function () {
    return view('home-pages.tela-inicial');
})->name('home');

// PERFIL

Route::controller(App\Http\Controllers\PerfilController::class)->group(function() {
    Route::get('/perfil-advogado/{usuario_id}', 'advogado')->name('perfil-advogado');
    Route::get('/perfil-cliente/{usuario_id}', 'cliente')->name('perfil-cliente');
});

Route::get('/perfil-advogado-cliente', function () {
    return view('perfil.visto-pelo.advogado');
})->name('advogado');

Route::get('/perfil-cliente-advogado', function () {
    return view('perfil.visto-pelo.cliente');
})->name('cliente');

use App\Http\Controllers\ChatController;
Route::get('/chat', [ChatController::class, 'index'])->name('chat');
