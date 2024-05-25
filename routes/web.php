<?php

use Illuminate\Support\Facades\Route;

Route::get('/cadastro', function () {
    return view('cadastro.nova-conta');
});

Route::get('/cadastro/dados-pessoais', function () {
    return view('cadastro.dados-pessoais');
});

Route::get('/cadastro/endereco', function () {
    return view('cadastro.endereco');
});

Route::get('/cadastro/dados-curriculares', function () {
    return view('cadastro.dados-curriculares');
});

Route::get('/homepage-advogado', function () {
    return view('home-pages.homepage-advogado');
});

Route::get('/casos', function () {
    return view('casos.casos-abertos');
});

Route::get('/login', function () {
    return view('cadastro.login');
});

Route::get('/teste', function () {
    return view('home-pages.teste');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

