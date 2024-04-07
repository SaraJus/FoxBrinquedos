<?php

namespace App\Http\Controllers;
use App\Models\Produto;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function produto(){
        return view('produto')->with('produtos', Produto::all());
    }
}
