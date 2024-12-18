<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        // Listar todos os clientes
        return view('clientes.index', ['clientes' => Cliente::all()]);
    }

    public function create()
    {
        // Retornar o formulário para criar um cliente
        return view('clientes.create');
    }

    public function store(Request $request)
    {
        // Validar e salvar um novo cliente
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'nullable|email',
            'telefone' => 'nullable|max:20',
            'endereco' => 'nullable|max:255',
            'cpf_cnpj' => 'required|unique:clientes|max:20',
        ]);

        Cliente::create($validated);
        return redirect()->route('clientes.index')->with('success', 'Cliente cadastrado com sucesso!');
    }

    public function show(Cliente $cliente)
    {
        // Exibir um cliente específico
        return view('clientes.show', ['cliente' => $cliente]);
    }

    public function edit(Cliente $cliente)
    {
        // Retornar o formulário para editar um cliente
        return view('clientes.edit', ['cliente' => $cliente]);
    }

    public function update(Request $request, Cliente $cliente)
    {
        // Validar e atualizar um cliente
        $validated = $request->validate([
            'nome' => 'required|max:255',
            'email' => 'nullable|email',
            'telefone' => 'nullable|max:20',
            'endereco' => 'nullable|max:255',
            'cpf_cnpj' => 'required|unique:clientes,cpf_cnpj,' . $cliente->id . '|max:20',
        ]);

        $cliente->update($validated);
        return redirect()->route('clientes.index')->with('success', 'Cliente atualizado com sucesso!');
    }

    public function destroy(Cliente $cliente)
    {
        // Excluir um cliente
        $cliente->delete();
        return redirect()->route('clientes.index')->with('success', 'Cliente excluído com sucesso!');
    }
}
