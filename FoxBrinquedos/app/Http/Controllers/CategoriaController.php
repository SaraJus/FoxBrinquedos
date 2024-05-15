<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use App\Models\Produto;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria() {
        return view('categoria')-> with('categorias', Categoria::all());
    }


}
