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
            $venda->quantidade = $quantidade_comprados;
            $venda->preco_total = $produto->valor * $quantidade_comprados;
            $venda->save();

            return true;
        }

        return false; // Produto fora de estoque
    }
}
