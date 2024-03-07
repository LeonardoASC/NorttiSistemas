<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Venda;

class VendaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $vendas = [
                [
                    'produto_id' => 1,
                    'quantidade' => 2,
                    'preco_total' => 39.98,
                ],
                [
                    'produto_id' => 2,
                    'quantidade' => 3,
                    'preco_total' => 89.97,
                ],
                [
                    'produto_id' => 3,
                    'quantidade' => 1,
                    'preco_total' => 39.99,
                ],
            ];

            foreach ($vendas as $venda) {
               Venda::create($venda);
            }
    }
}
