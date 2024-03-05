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
                    'preco_total' => 100.00,
                ],
                [
                    'produto_id' => 2,
                    'quantidade' => 3,
                    'preco_total' => 150.00,
                ],
                [
                    'produto_id' => 3,
                    'quantidade' => 1,
                    'preco_total' => 50.00,
                ],
            ];

            foreach ($vendas as $venda) {
               Venda::create($venda);
            }
    }
}
