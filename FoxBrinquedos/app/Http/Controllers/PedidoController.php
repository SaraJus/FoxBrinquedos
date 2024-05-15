<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\CarrinhoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{
    public function criar(Request $request)
    {
        $usuario_id = Auth::id();
        $itensCarrinho = CarrinhoItem::where('USUARIO_ID', $usuario_id)->get();

        $pedido = Pedido::create([
            'USUARIO_ID' => $usuario_id,
            'ENDERECO_ID' => $request->input('endereco_id'),
            'STATUS_ID' => 1, // Status "Pendente"
            'PEDIDO_DATA' => now(),
        ]);

        foreach ($itensCarrinho as $item) {
            PedidoItem::create([
                'PEDIDO_ID' => $pedido->PEDIDO_ID,
                'PRODUTO_ID' => $item->PRODUTO_ID,
                'ITEM_QTD' => $item->ITEM_QTD,
                'ITEM_PRECO' => $item->produto->PRODUTO_PRECO,
            ]);
        }

        CarrinhoItem::where('USUARIO_ID', $usuario_id)->delete();

        return redirect()->route('pedido.show', $pedido->PEDIDO_ID)->with('success', 'Pedido realizado com sucesso!');
    }

    public function show($id)
    {
        $pedido = Pedido::with('itens.produto')->findOrFail($id);
        return view('pedido.show', compact('pedido'));
    }
}