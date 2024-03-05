<?php
namespace App\Services;

use App\Models\Produto;
use App\Models\Venda;

class VendaService
{
    public function comprarProduto(Produto $produto, $quantidade_comprados)
    {

        if ($produto->quantidade > 0) {
            $produto->quantidade -= $quantidade_comprados;
            $produto->save();

            // Registra a venda
            $venda = new Venda();
            $venda->produto_id = $produto->id;
            $venda->quantidade = $quantidade_comprados; // Apenas um produto por venda neste exemplo
            $venda->preco_total = $produto->valor * $quantidade_comprados; // Considerando que o preço do produto não muda
            $venda->save();

            return true;
        }

        return false; // Produto fora de estoque
    }
}
