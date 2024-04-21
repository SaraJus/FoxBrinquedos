<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('welcome');
});

Route::get ('index', [IndexController::class, 'index'])->name('index');

Route::get('cadastro',[CadastroController::class,'cadastro'])->name('cadastro.index');

Route::get ('TelaLogin', [LoginController::class, 'TelaLogin'])->name('Login.index');

Route::get ('produto', [ProdutoController::class, 'produto'])->name('produto.index');

Route::get ('show', [ProdutoController::class, 'show'])->name('produto.show');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get ('produto', [ProdutoController::class, 'produto'])->name('produto.index');

Route::get ('show', [ProdutoController::class, 'show'])->name('show.index');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get ('carrinho', [CarrinhoController::class, 'carrinho'])->name('carrinho.index');
});

require __DIR__.'/auth.php';
