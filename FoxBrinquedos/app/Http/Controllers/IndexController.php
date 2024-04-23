<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class IndexController extends Controller
{
    public function index(){
        return view('index')->with('produtos', Produto::latest('PRODUTO_ID')->limit(8)->get());
    }
}
