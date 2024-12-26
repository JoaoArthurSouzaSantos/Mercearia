<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    public function index()
    {
        return view('categorias.index', ['categorias' => Categoria::all()]);
    }

    public function create()
    {
        return view('categorias.create');
    }

    public function store(StoreCategoriaRequest $request)
    {
        Categoria::create($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoria cadastrada com sucesso!');
    }

    public function show(Categoria $categoria)
    {
        return view('categorias.show', ['categoria' => $categoria]);
    }

    public function edit(Categoria $categoria)
    {
        return view('categorias.edit', ['categoria' => $categoria]);
    }

    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->update($request->validated());
        return redirect()->route('categorias.index')->with('success', 'Categoria atualizada com sucesso!');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria excluída com sucesso!');
    }
}
