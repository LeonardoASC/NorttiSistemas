<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categorias = [
            [
                'nome' => 'Eletrônicos',
                'codigo' => 'ELE',
                'icone' => 'https://media.istockphoto.com/id/173893900/pt/foto/telemóvel-telefone.jpg?s=2048x2048&w=is&k=20&c=Dfuv2T9SwwJpord4AWBnjHqjfGbEAJq4M2qbAutB9S0=',
                'descricao' => 'Produtos eletrônicos em geral'
            ],
            [
                'nome' => 'Livros',
                'codigo' => 'LIV',
                'icone' => 'https://media.istockphoto.com/id/1375877799/pt/vetorial/3d-books-icon-for-web-design-isolated-education-and-online-class-concept.jpg?s=2048x2048&w=is&k=20&c=UBH84-iRydaztjAR_QoNPs_2ATYukAjoSR4uauFRytY=',
                'descricao' => 'Livros de todos os gêneros'
            ],
            [
                'nome' => 'Roupas',
                'codigo' => 'ROU',
                'icone' => 'https://media.istockphoto.com/id/471973362/pt/foto/varal-de-roupa-e-lavar-roupa.jpg?s=2048x2048&w=is&k=20&c=lKiIAIHzDK1xVxpLm0Gcksu2rH84o_SztjronJra66Y=',
                'descricao' => 'Roupas de todos os tamanhos'
            ],
            [
                'nome' => 'Alimentos',
                'codigo' => 'ALI',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Alimentos de todos os tipos'
            ],
            [
                'nome' => 'Móveis',
                'codigo' => 'MOV',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Móveis para todos os ambientes'
            ],
            [
                'nome' => 'Brinquedos',
                'codigo' => 'BRI',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Brinquedos para todas as idades'
            ],
            [
                'nome' => 'Ferramentas',
                'codigo' => 'FER',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Ferramentas para todos os tipos de trabalho'
            ],
            [
                'nome' => 'Esportes',
                'codigo' => 'ESP',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Artigos esportivos para todos os esportes'
            ],
            [
                'nome' => 'Beleza',
                'codigo' => 'BEL',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Produtos de beleza para todos os tipos de pele'
            ],
            [
                'nome' => 'Papelaria',
                'codigo' => 'PAP',
                'icone' => 'https://media.istockphoto.com/id/1267161539/pt/vetorial/meal-breaks-vector-line-icon-simple-thin-line-icon-premium-quality-design-element.jpg?s=2048x2048&w=is&k=20&c=yvmSYf7OJnWagFJ5v__5JyuLFR5ugE9Q3wwhhxIiV4s=',
                'descricao' => 'Artigos de papelaria para todas as idades'
            ]
        ];
        foreach ($categorias as $categoria) {
            Categoria::create($categoria);
        }
    }
}
