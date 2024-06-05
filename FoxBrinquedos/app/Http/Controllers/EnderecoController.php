<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Endereco;
use Illuminate\Support\Facades\Auth;

class EnderecoController extends Controller
{
    public function create()
    {
        return view('endereco');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ENDERECO_NOME' => 'required|string|max:255',
            'ENDERECO_LOGRADOURO' => 'required|string|max:255',
            'ENDERECO_NUMERO' => 'required|string|max:255',
            'ENDERECO_COMPLEMENTO' => 'nullable|string|max:255',
            'ENDERECO_CEP' => 'required|string|max:8',
            'ENDERECO_CIDADE' => 'required|string|max:255',
            'ENDERECO_ESTADO' => 'required|string|max:2',
        ]);

        Endereco::create([
            'USUARIO_ID' => Auth::id(),
            'ENDERECO_NOME' => ($request->ENDERECO_NOME),
            'ENDERECO_LOGRADOURO' => $request->ENDERECO_LOGRADOURO,
            'ENDERECO_NUMERO' => $request->ENDERECO_NUMERO,
            'ENDERECO_COMPLEMENTO' => $request->ENDERECO_COMPLEMENTO,
            'ENDERECO_CEP' => $request->ENDERECO_CEP,
            'ENDERECO_CIDADE' => $request->ENDERECO_CIDADE,
            'ENDERECO_ESTADO' => $request->ENDERECO_ESTADO,
        ]);

        return redirect()->route('finalizar'); 
    }
}