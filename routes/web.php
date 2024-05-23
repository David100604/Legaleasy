<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('cadastro.nova-conta');
});

Route::get('/dadospessoais', function () {
    return view('cadastro.dados-pessoais');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

