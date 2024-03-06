<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreVendaRequest;
use App\Http\Requests\UpdateVendaRequest;

class VendaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vendas = Venda::with('produto')->get();

        // Obter os 3 produtos mais utilizados
        $produtos_mais_utilizados = Venda::select('produto_id', DB::raw('COUNT(*) as total_vendas'))
            ->groupBy('produto_id')
            ->orderByDesc('total_vendas')
            ->take(3)
            ->get();

        // Carregar os detalhes dos produtos mais utilizados
        $detalhes_produtos_mais_utilizados = [];
        foreach ($produtos_mais_utilizados as $produto) {
            $detalhes_produto = Produto::find($produto->produto_id);
            $detalhes_produto->total_vendas = $produto->total_vendas;
            $detalhes_produtos_mais_utilizados[] = $detalhes_produto;
        }

        return view('private.vendas.index', compact('vendas', 'detalhes_produtos_mais_utilizados'));
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
    public function store(StoreVendaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Venda $venda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Venda $venda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVendaRequest $request, Venda $venda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Venda $venda)
    {
        //
    }
}
