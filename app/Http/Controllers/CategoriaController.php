<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Http\Requests\StoreCategoriaRequest;
use App\Http\Requests\UpdateCategoriaRequest;

class CategoriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categorias = Categoria::all();
        return view('private.categorias.index', compact('categorias'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('private.categorias.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoriaRequest $request)
    {
        $categoria = new Categoria();
        $categoria->nome = $request->nome;
        $categoria->codigo = $request->codigo;
        $categoria->icone = $request->icone;
        $categoria->descricao = $request->descricao;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Categoria $categoria)
    {
        return view('private.categorias.show', compact('categoria'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Categoria $categoria)
    {
        return view('private.categorias.edit', compact('categoria'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoriaRequest $request, Categoria $categoria)
    {
        $categoria->nome = $request->nome;
        $categoria->codigo = $request->codigo;
        $categoria->icone = $request->icone;
        $categoria->descricao = $request->descricao;
        $categoria->save();

        return redirect()->route('categorias.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categoria $categoria)
    {
        if ($categoria->produtos()->exists()) {
            return back()->with('error', 'Não é possível excluir esta categoria porque existem produtos relacionados a ela.');
        }
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria excluída com sucesso.');
    }
}
