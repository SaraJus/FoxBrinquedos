<?php

namespace App\Http\Controllers;
use App\Models\Produto;


use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produto(){
        return view('produto.produto')->with('produtos', Produto::paginate(10));

    }

    public function show(Produto $produto){
        return view('produto.show')->with('produto', $produto);
    }
    




}
