<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categoria() {
        return view('categoria.categoria')-> with('categorias', Categoria::all());
    }

    public function show(Categoria $categoria){
        return view ('categoria.show') -> with ('categoria', $categoria);

    }
}
