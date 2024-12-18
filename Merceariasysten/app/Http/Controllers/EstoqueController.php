<?php

namespace App\Http\Controllers;

use App\Models\Estoque;
use App\Models\Produto;
use Illuminate\Http\Request;

class EstoqueController extends Controller
{
    public function index()
    {
        // Listar movimentações de estoque
        $estoques = Estoque::with('produto')->get();
        return view('estoques.index', compact('estoques'));
    }

    public function create()
    {
        // Formulário para registrar movimentação
        $produtos = Produto::all(); // Produtos disponíveis
        return view('estoques.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        // Validar e salvar movimentação
        $validated = $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer',
            'tipo_movimento' => 'required|in:entrada,saida',
            'descricao' => 'nullable|string|max:255',
            'data_movimento' => 'required|date',
        ]);

        Estoque::create($validated);

        return redirect()->route('estoques.index')->with('success', 'Movimentação de estoque registrada com sucesso!');
    }

    public function edit(Estoque $estoque)
    {
        // Formulário para editar movimentação
        $produtos = Produto::all();
        return view('estoques.edit', compact('estoque', 'produtos'));
    }

    public function update(Request $request, Estoque $estoque)
    {
        // Validar e atualizar movimentação
        $validated = $request->validate([
            'produto_id' => 'required|exists:produtos,id',
            'quantidade' => 'required|integer',
            'tipo_movimento' => 'required|in:entrada,saida',
            'descricao' => 'nullable|string|max:255',
            'data_movimento' => 'required|date',
        ]);

        $estoque->update($validated);

        return redirect()->route('estoques.index')->with('success', 'Movimentação de estoque atualizada com sucesso!');
    }

    public function destroy(Estoque $estoque)
    {
        // Excluir movimentação
        $estoque->delete();

        return redirect()->route('estoques.index')->with('success', 'Movimentação de estoque excluída com sucesso!');
    }
}
