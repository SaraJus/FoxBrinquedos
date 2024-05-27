<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\PedidoItem;
use App\Models\CarrinhoItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PedidoController extends Controller
{public function finalizar(Request $request)
    {
        $carrinho = session()->get('carrinho');
        if (!$carrinho) {
            return redirect()->route('home')->with('error', 'Carrinho vazio');
        }

        $pedido = new Pedido();
        $pedido->USUARIO_ID = auth()->id();
        $pedido->STATUS_ID = 1; // Status inicial
        $pedido->PEDIDO_DATA = now();
        $pedido->save();

        foreach ($carrinho as $produtoId => $item) {
            PedidoItem::create([
                'PEDIDO_ID' => $pedido->PEDIDO_ID,
                'PRODUTO_ID' => $produtoId,
                'ITEM_QTD' => $item['quantidade'],
                'ITEM_PRECO' => $item['preco'],
            ]);
        }

        session()->forget('carrinho');
        return redirect()->route('home')->with('success', 'Pedido finalizado com sucesso');
    }
}