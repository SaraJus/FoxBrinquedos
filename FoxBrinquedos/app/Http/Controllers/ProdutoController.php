<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produto()
    {
        // Buscar apenas produtos ativos
        $produtos = Produto::where('PRODUTO_ATIVO', true)->paginate(10);
        return view('produto.produto')->with('produtos', $produtos);
    }

    public function show(Produto $produto)
    {
        $categoria = $produto->categoria;

        // Buscar produtos relacionados que também estão ativos
        $produtosRelacionados = Produto::where('CATEGORIA_ID', $categoria->CATEGORIA_ID)
            ->where('PRODUTO_ID', '!=', $produto->PRODUTO_ID)
            ->where('PRODUTO_ATIVO', true)
            ->inRandomOrder()
            ->take(5)
            ->get();

        return view('produto.show', compact('produto', 'produtosRelacionados'));
    }

    public function categoria($categoria_nome)
    {
        $categoria = Categoria::where('CATEGORIA_NOME', $categoria_nome)->firstOrFail();

        // Buscar apenas produtos ativos na categoria fornecida
        $produtos = Produto::where('CATEGORIA_ID', $categoria->CATEGORIA_ID)
            ->where('PRODUTO_ATIVO', true)
            ->get();

        return view('categoria', compact('produtos', 'categoria'));
    }

    public function pesquisar(Request $request)
    {
        $termoPesquisa = $request->input('q');

        // Buscar apenas produtos ativos que correspondam ao termo de pesquisa
        $produtos = Produto::where('PRODUTO_NOME', 'like', '%' . $termoPesquisa . '%')
            ->where('PRODUTO_ATIVO', true)
            ->get();

        return view('resultado_pesquisa')->with('produtos', $produtos)->with('termoPesquisa', $termoPesquisa);
    }
}
