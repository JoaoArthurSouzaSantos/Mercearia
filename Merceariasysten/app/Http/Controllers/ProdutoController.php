<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function index()
    {
        // Listar todos os produtos
        return view('produtos.index', ['produtos' => Produto::all()]);
    }

    public function create()
    {
        // Formulário para criar produto
        return view('produtos.create');
    }

    public function store(Request $request)
    {
        // Validar e salvar novo produto
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'codigo_barras' => 'required|unique:produtos|max:255',
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        Produto::create($validated);
        return redirect()->route('produtos.index')->with('success', 'Produto cadastrado com sucesso!');
    }

    public function show(Produto $produto)
    {
        // Mostrar detalhes de um produto
        return view('produtos.show', ['produto' => $produto]);
    }

    public function edit(Produto $produto)
    {
        // Formulário para editar produto
        return view('produtos.edit', ['produto' => $produto]);
    }

    public function update(Request $request, Produto $produto)
    {
        // Validar e atualizar produto
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'descricao' => 'nullable',
            'preco' => 'required|numeric|min:0',
            'estoque' => 'required|integer|min:0',
            'codigo_barras' => 'required|unique:produtos,codigo_barras,' . $produto->id,
            'categoria_id' => 'nullable|exists:categorias,id',
        ]);

        $produto->update($validated);
        return redirect()->route('produtos.index')->with('success', 'Produto atualizado com sucesso!');
    }

    public function destroy(Produto $produto)
    {
        // Excluir produto
        $produto->delete();
        return redirect()->route('produtos.index')->with('success', 'Produto excluído com sucesso!');
    }
}
