<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with('cliente')->get(); // Obter todas as vendas com o cliente associado
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $clientes = Cliente::all(); // Obter todos os clientes
        return view('vendas.create', compact('clientes'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'cliente_id' => 'nullable|exists:clientes,id',
            'total' => 'required|numeric|min:0',
            'data_venda' => 'required|date',
        ]);

        Venda::create($validated);

        return redirect()->route('vendas.index')->with('success', 'Venda registrada com sucesso!');
    }

    public function show(Venda $venda)
    {
        $venda->load('cliente'); // Carregar o cliente associado
        return view('vendas.show', compact('venda'));
    }

    public function destroy(Venda $venda)
    {
        $venda->delete();
        return redirect()->route('vendas.index')->with('success', 'Venda excluída com sucesso!');
    }
}
