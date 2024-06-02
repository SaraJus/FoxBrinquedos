<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;

class EnderecoController extends Controller
{
    public function create()
    {
        return view('endereco');
    }

    public function store(Request $request)
    {
        $request->validate([
            'USUARIO_ID' => 'required|integer',
            'ENDERECO_LOGRADOURO' => 'required|string|max:255',
            'ENDERECO_NUMERO' => 'required|string|max:255',
            'ENDERECO_COMPLEMENTO' => 'nullable|string|max:255',
            'ENDERECO_CEP' => 'required|string|max:20',
            'ENDERECO_CIDADE' => 'required|string|max:255',
            'ENDERECO_ESTADO' => 'required|string|max:255',
        ]);

        Endereco::create($request->all());

        return redirect()->route('finalizar.index'); 
    }
}
