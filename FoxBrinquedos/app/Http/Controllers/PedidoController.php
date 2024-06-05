<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrinhoItem;
use App\Models\Endereco;
use App\Models\Pedido;
use App\Models\PedidoItem;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PedidoController extends Controller
{
    public function concluido()
    {
        return view('pedido.concluido');
    }

    public function finalizar(Request $request)
    {
        $request->validate([
            'endereco_id' => 'required|exists:ENDERECO,ENDERECO_ID',
        ]);

        $usuarioId = Auth::id();
        $enderecoId = $request->input('endereco_id');

        // Cria o pedido
        $pedido = new Pedido();
        $pedido->USUARIO_ID = $usuarioId;
        $pedido->ENDERECO_ID = $enderecoId;
        $pedido->STATUS_ID = 1; // Valor padrão para STATUS_ID
        $pedido->PEDIDO_DATA = Carbon::now(); // Define a data do pedido
        $pedido->save();

        // Adiciona os itens do carrinho ao pedido
        $carrinhoItens = CarrinhoItem::where('USUARIO_ID', $usuarioId)
                                     ->where('ITEM_QTD', '>', 0)
                                     ->get();

        foreach ($carrinhoItens as $item) {
            PedidoItem::create([
                'PEDIDO_ID' => $pedido->PEDIDO_ID, // Usa o ID do pedido recém-criado
                'PRODUTO_ID' => $item->PRODUTO_ID,
                'ITEM_QTD' => $item->ITEM_QTD,
                'ITEM_PRECO' => $item->produto->PRODUTO_PRECO,
            ]);

        }

        $item->ITEM_QTD = 0;
        $item->save();

        return redirect()->route('pedido.concluido');
    }

    public function pedidos()
    {
        return view('pedidos');
    }
}