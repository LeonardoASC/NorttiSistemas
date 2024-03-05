<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use App\Models\Categoria;
use App\Http\Requests\StoreProdutoRequest;
use App\Http\Requests\UpdateProdutoRequest;

class ProdutoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::all();
        return view('private.produtos.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Categoria::all();
        
        return view('private.produtos.create', compact('categorias'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProdutoRequest $request)
    {
        $produto = new Produto();
        $produto->nome = $request->nome;
        $produto->categoria_id = $request->categoria_id;
        $produto->foto = $request->foto;
        $produto->valor = $request->valor;
        $produto->quantidade = $request->quantidade;
        $produto->save();
        
        return redirect()->route('produtos.index');        
    }

    /**
     * Display the specified resource.
     */
    public function show(Produto $produto)
    {
        // dd($produto);
        return view('private.produtos.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Produto $produto)
    {
        //edit de produto
        $categorias = Categoria::all();
        return view('private.produtos.edit', compact('produto', 'categorias'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProdutoRequest $request, Produto $produto)
    {
        //update de produto
        $produto->nome = $request->nome;
        $produto->foto = $request->foto;
        $produto->valor = $request->valor;
        $produto->categoria_id = $request->categoria_id;
        $produto->quantidade = $request->quantidade;
        $produto->save();
        return redirect()->route('produtos.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Produto $produto)
    {
        //delete de produto
        $produto->delete();
        return redirect()->route('produtos.index');
    }
}
