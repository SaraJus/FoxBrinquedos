<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\EnderecoController;
use App\Http\Controllers\PedidoController;



Route::get('', [IndexController::class, 'index'])->name('index');
Route::get('/pesquisar-produto', 'App\Http\Controllers\ProdutoController@pesquisar')->name('pesquisar.produto');

Route::get('/produto', [ProdutoController::class, 'produto'])->name('produto.index');

Route::get('/produto/{produto}', [ProdutoController::class, 'show'])->name('produto.show');

Route::get('/endereco', [EnderecoController::class, 'create'])->name('endereco.create');

Route::post('/endereco', [EnderecoController::class, 'store'])->name('endereco.store');

Route::get('/categoria/{categoria_nome}', [ProdutoController::class, 'categoria'])->name('categoria');

Route::get('/contato', [ContatoController::class, 'contato'])->name('contato.index');

Route::get('/finalizar', [CarrinhoController::class,'finalizar'])->name('finalizar');

Route::post('/pedido/finalizar', [PedidoController::class, 'finalizar'])->name('pedido.finalizar');

Route::get('/pedido/concluido', [PedidoController::class, 'concluido'])->name('pedido.concluido');

Route::get('/pedidos',[PedidoController::class, 'pedidos'])->name('pedidos.index');

Route::middleware('auth')->group(function () {
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/carrinho', [CarrinhoController::class, 'carrinho'])->name('carrinho.index');
    Route::post('/carrinho/adicionar', [CarrinhoController::class, 'adicionar'])->name('carrinho.adicionar');
    Route::post('/carrinho/aumentar/{produtoId}', [CarrinhoController::class, 'aumentar'])->name('carrinho.aumentar');
    Route::post('/carrinho/diminuir/{produtoId}', [CarrinhoController::class, 'diminuir'])->name('carrinho.diminuir');
    Route::post('/carrinho/remover/{produtoId}', [CarrinhoController::class, 'remover'])->name('carrinho.remover');
});

require __DIR__ . '/auth.php';
