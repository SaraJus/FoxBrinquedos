<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CarrinhoItem;
use app\Models\Produto;
use Illuminate\Support\Facades\Auth;
use App\Models\Endereco;

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
        $quantidade = $request->input('quantidade');

        if (is_null($produtoId)) {
            return redirect()->back()->with('error', 'Produto não encontrado.');
        }

        $carrinhoItem = CarrinhoItem::where('USUARIO_ID', $usuarioId)
                                     ->where('PRODUTO_ID', $produtoId)
                                     ->first();

        if ($carrinhoItem) {
            $carrinhoItem->ITEM_QTD += $quantidade;
        } else {
            $carrinhoItem = new CarrinhoItem([
                'USUARIO_ID' => $usuarioId,
                'PRODUTO_ID' => $produtoId,
                'ITEM_QTD' => $quantidade
            ]);
        }

        $carrinhoItem->save();

        return redirect()->route('carrinho.index')->with('success', 'Produto adicionado ao carrinho!');
    }

    public function aumentar($produtoId)
    {
        $usuarioId = auth()->id();
        $carrinhoItem = CarrinhoItem::where('USUARIO_ID', $usuarioId)
                                     ->where('PRODUTO_ID', $produtoId)
                                     ->first();

        if ($carrinhoItem) {
            $carrinhoItem->ITEM_QTD += 1;
            $carrinhoItem->save();
        }

        return redirect()->route('carrinho.index');
    }

    public function diminuir($produtoId)
    {
        $usuarioId = auth()->id();
        $carrinhoItem = CarrinhoItem::where('USUARIO_ID', $usuarioId)
                                     ->where('PRODUTO_ID', $produtoId)
                                     ->first();

        if ($carrinhoItem) {
            
                $carrinhoItem->ITEM_QTD -= 1;
                $carrinhoItem->save();

        }

        return redirect()->route('carrinho.index');
    }

    public function remover($produtoId)
    {
        $usuarioId = auth()->id();
        CarrinhoItem::where('USUARIO_ID', $usuarioId)
                    ->where('PRODUTO_ID', $produtoId)
                    ->delete();

        return redirect()->route('carrinho.index')->with('success', 'Produto removido do carrinho!');
    }

    public function finalizar()
    {
        $usuarioId = Auth::id();
        
        $carrinhoItens = CarrinhoItem::where('USUARIO_ID', $usuarioId)
                                     ->where('ITEM_QTD', '>', 0)
                                     ->get();

        $quantidadeTotal = $carrinhoItens->sum('ITEM_QTD');
        $valorTotal = $carrinhoItens->sum(function($item) {
            return $item->ITEM_QTD * $item->produto->PRODUTO_PRECO;
        });

        $enderecos = Endereco::where('USUARIO_ID', $usuarioId)->get();

        return view('finalizar', compact('carrinhoItens', 'quantidadeTotal', 'valorTotal', 'enderecos'));
    }
}