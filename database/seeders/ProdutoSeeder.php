<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Produto;

class ProdutoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $produtos = [
            [
                'nome' => 'Produto 1',
                'categoria_id' => 1, 
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 19.99,
                'quantidade' => 10,
            ],
            [
                'nome' => 'Produto 2',
                'categoria_id' => 2,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 29.99,
                'quantidade' => 20,
            ],
            [
                'nome' => 'Produto 3',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 4',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 5',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 6',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 7',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 8',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 9',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
            [
                'nome' => 'Produto 10',
                'categoria_id' => 3,
                'foto' => 'https://media.istockphoto.com/id/1316134499/pt/foto/a-concept-image-of-a-magnifying-glass-on-blue-background-with-a-word-example-zoom-inside-the.jpg?s=2048x2048&w=is&k=20&c=eOlrw2emTUBuhGaWgOCIyJ0UTn842-gS2Bn8_n9_vK0=',
                'valor' => 39.99,
                'quantidade' => 30,
            ],
        ];

        foreach ($produtos as $produto) {
            Produto::create($produto);
        }
    }
}
