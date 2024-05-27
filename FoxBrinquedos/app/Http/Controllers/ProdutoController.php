<?php

namespace App\Http\Controllers;
use App\Models\Produto;
use App\Models\Categoria;


use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produto(){

        return view('produto.produto')->with('produtos', Produto::paginate(10));
     ;
    }

    public function show(Produto $produto){
         
         $categoria = $produto->categoria;

         $produtosRelacionados = Produto::where('CATEGORIA_ID', $categoria->CATEGORIA_ID)
             ->where('PRODUTO_ID', '!=', $produto->PRODUTO_ID) 
             ->inRandomOrder() 
             ->take(6) 
             ->get();
 
         return view('produto.show', compact('produto', 'produtosRelacionados'));
     }
        
    public function categoria($categoria_nome)
    {
        $categoria = Categoria::where('CATEGORIA_NOME', $categoria_nome)->firstOrFail();

        $produtos = Produto::where('CATEGORIA_ID', $categoria->CATEGORIA_ID)->get();

        return view('categoria', compact('produtos','categoria'));
    }
    public function pesquisar(Request $request)
    {
        $termoPesquisa = $request->input('q');
    
        $produtos = Produto::where('PRODUTO_NOME', 'like', '%' . $termoPesquisa . '%')->get();
    
        return view('resultado_pesquisa')->with('produtos', $produtos)->with('termoPesquisa', $termoPesquisa);
    }
    
}
