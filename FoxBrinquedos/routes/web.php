<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('cadastro',[CadastroController::class,'cadastro'])->name('cadastro.index');

Route::get ('TelaLogin', [LoginController::class, 'TelaLogin'])->name('Login.index');

Route::get ('index', [IndexController::class, 'index'])->name('index');
