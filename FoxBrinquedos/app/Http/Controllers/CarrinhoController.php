<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrinhoItem;
use App\Models\Produto;


class CarrinhoController extends Controller
{
    public function index()
    {
        $usuario_id = Auth::id();
        $itens = CarrinhoItem::with('produto')->where('USUARIO_ID', $usuario_id)->get();
        return view('carrinho.index', compact('itens'));
    }

    public function adicionar(Request $request, $produto_id)
    {
        $usuario_id = Auth::id();
        $produto = Produto::findOrFail($produto_id);

        $item = CarrinhoItem::updateOrCreate(
            ['USUARIO_ID' => $usuario_id, 'PRODUTO_ID' => $produto_id],
            ['ITEM_QTD' => \DB::raw('ITEM_QTD + 1')]
        );

        return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho!');
    }

    public function remover($id)
    {
        $item = CarrinhoItem::findOrFail($id);
        $item->delete();

        return redirect()->route('carrinho.index')->with('success', 'Produto removido do carrinho!');
    }
}

