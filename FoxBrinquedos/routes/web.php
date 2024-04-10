<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutoController;

Route::get ('index', [IndexController::class, 'index'])->name('index');

Route::get('cadastro',[CadastroController::class,'cadastro'])->name('cadastro.index');

Route::get ('TelaLogin', [LoginController::class, 'TelaLogin'])->name('Login.index');

Route::get ('produto', [ProdutoController::class, 'produto'])->name('produto.index');

Route::get ('carrinho', [CarrinhoController::class, 'carrinho'])->name('carrinho.index');

