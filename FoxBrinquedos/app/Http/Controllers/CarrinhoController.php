<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrinhoItem;
use Illuminate\Support\Facades\Auth;

class CarrinhoController extends Controller
{
    public function carrinho()
    {
        $usuarioId = auth()->id();
        $carrinhoItens = CarrinhoItem::where('USUARIO_ID', $usuarioId)->with('produto')->get();

        return view('carrinho', compact('carrinhoItens'));
    }

    public function adicionar(Request $request)
    {
        $usuarioId = auth()->id();
        $produtoId = $request->input('produto_id');
        $quantidade = $request->input('quantidade', 1);

        if (is_null($produtoId)) {
            return redirect()->back()->with('error', 'Produto não encontrado.');
        }

        $carrinhoItem = CarrinhoItem::where('USUARIO_ID', $usuarioId)
                                     ->where('PRODUTO_ID', $produtoId)
                                     ->first();

        if ($carrinhoItem) {
            $carrinhoItem->ITEM_QTD += $quantidade;
        } else {
            CarrinhoItem::create([
                'USUARIO_ID' => $usuarioId,
                'PRODUTO_ID' => $produtoId,
                'ITEM_QTD' => $quantidade
            ]);
        }

        return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho!');
    }

    public function remover(Request $request, $produtoId)
    {
        $usuarioId = auth()->id();
        CarrinhoItem::where('USUARIO_ID', $usuarioId)->where('PRODUTO_ID', $produtoId)->delete();

        return redirect()->route('carrinho.index')->with('success', 'Produto removido do carrinho!');
    }
}