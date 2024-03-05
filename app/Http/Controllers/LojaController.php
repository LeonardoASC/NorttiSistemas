<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use App\Models\Venda;
use App\Models\Produto;
use App\Http\Requests\StoreLojaRequest;
use App\Http\Requests\UpdateLojaRequest;
use Illuminate\Http\Request;
class LojaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produtos = Produto::with('categoria')->get();
        return view('public.home.index', compact('produtos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLojaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $produto = Produto::with('categoria')->findOrFail($id);

        return view('public.home.show', compact('produto'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Loja $loja)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {

        // $request->validate([
        //     'produto_id' => 'required|exists:produtos,id',
        //     'quantidade' => 'required|integer|min:1',
        //     'preco_total' => 'required|numeric|min:0',
        // ]);

        $produto = Produto::findOrFail($id);
        if ($produto->quantidade > 0) {
            $produto->quantidade -= 1;
            $produto->save();

            // $venda = new Venda();
            // $venda->produto_id = $request->produto_id;
            // $venda->quantidade = $request->quantidade;
            // $compra->preco_total = $produto->valor * $request->quantidade;

            // $venda->save();

            return redirect()->route('lojas.index')->with('success', 'Produto comprado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Este produto está fora de estoque!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loja $loja)
    {
        //
    }
}
