<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cadastro.nova-conta');
});

Route::get('/dadospessoais', function () {
    return view('cadastro.dados-pessoais');
});

Route::get('/homepage-advogado', function () {
    return view('home-pages.homepage-advogado');
});

Route::get('/login', function () {
    return view('cadastro.login');
});

Route::get('/teste', function () {
    return view('home-pages.teste');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

