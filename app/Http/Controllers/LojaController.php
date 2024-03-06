<?php

namespace App\Http\Controllers;

use App\Models\Loja;
use App\Models\Venda;
use App\Models\Produto;
use App\Services\VendaService;
use App\Http\Requests\StoreLojaRequest;
use App\Http\Requests\UpdateLojaRequest;
use Illuminate\Http\Request;
class LojaController extends Controller
{
    protected $vendaService;

    public function __construct(VendaService $vendaService)
    {
        $this->vendaService = $vendaService;
    }

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Loja $loja)
    {
        //
    }

    public function comprarProduto(Request $request, Produto $produto)
    {
        $quantidade_comprados = $request->input('quantidade_comprados');
        
        if ($this->vendaService->comprarProduto($produto, $quantidade_comprados)) {
            return redirect()->route('lojas.index')->with('success', 'Produto comprado com sucesso!');
        } else {
            return redirect()->back()->with('error', 'Este produto está fora de estoque!');
        }
    }
}
