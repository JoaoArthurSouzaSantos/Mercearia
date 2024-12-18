<?php

namespace App\Http\Controllers;

use App\Models\ItensVenda;
use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Http\Request;

class ItensVendaController extends Controller
{
    public function store(Request $request, $vendaId)
    {
        $validated = $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer|min:1',
            'preco_unitario' => 'required|numeric|min:0',
        ]);

        $venda = Venda::findOrFail($vendaId);

        $itensVenda = new ItensVenda([
            'venda_id' => $venda->id,
            'produto_id' => $validated['produto_id'],
            'quantidade' => $validated['quantidade'],
            'preco_unitario' => $validated['preco_unitario'],
        ]);
        $itensVenda->save();

        return redirect()->route('vendas.show', $vendaId)->with('success', 'Item adicionado à venda!');
    }

    public function destroy($vendaId, $itemId)
    {
        $itensVenda = ItensVenda::where('venda_id', $vendaId)->findOrFail($itemId);
        $itensVenda->delete();

        return redirect()->route('vendas.show', $vendaId)->with('success', 'Item excluído da venda!');
    }
}
