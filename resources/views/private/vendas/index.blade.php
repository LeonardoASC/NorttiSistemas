@extends('layouts.app')
@section('title', 'Vendas')
@section('content')
    <div class="container">
        <div class="container mt-4 ">
            <div class="row d-flex justify-content-center align-items-center py-2 bg-dark rounded">

                <div class="col-md-4 ">
                    <div class="card bg-secondary text-white text-center p-3" style="font-size: 1.2rem;">
                        <div class="card-body">
                            <h5 class="card-title">Segundo Produto Mais Utilizado</h5>
                            @if (isset($detalhes_produtos_mais_utilizados[1]))
                                <p>{{ $detalhes_produtos_mais_utilizados[1]->nome }}</p>
                                <p>Total de Vendas: {{ $detalhes_produtos_mais_utilizados[1]->total_vendas }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card bg-primary text-white text-center p-5" style="font-size: 1.5rem;">
                        <div class="card-body">
                            <h5 class="card-title">Produto Mais Utilizado</h5>
                            @if (isset($detalhes_produtos_mais_utilizados[0]))
                                <p>{{ $detalhes_produtos_mais_utilizados[0]->nome }}</p>
                                <p>Total de Vendas: {{ $detalhes_produtos_mais_utilizados[0]->total_vendas }}</p>
                            @endif
                        </div>
                    </div>
                </div>

                <div class="col-md-4 ">
                    <div class="card bg-secondary text-white text-center p-3" style="font-size: 1.2rem;">
                        <div class="card-body">
                            <h5 class="card-title">Terceiro Produto Mais Utilizado</h5>
                            @if (isset($detalhes_produtos_mais_utilizados[2]))
                                <p>{{ $detalhes_produtos_mais_utilizados[2]->nome }}</p>
                                <p>Total de Vendas: {{ $detalhes_produtos_mais_utilizados[2]->total_vendas }}</p>
                            @endif
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container mt-4">
            <h1>Minhas Vendas</h1>

            @if ($vendas->isEmpty())
                <p>Você ainda não fez nenhuma compra.</p>
            @else
                <table class="table">
                    <thead>
                        <tr>
                            <th class="row">
                                <p class="col">Produto <span class="fw-light">(Preço unitário)</span></p>
                            </th>
                            <th>Quantidade</th>
                            <th>Preço Total</th>
                            <th>Data da Compra</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($vendas as $venda)
                            <tr>
                                <td>
                                    <p class="col">{{ $venda->produto->nome }} <span class="fw-light">({{ $venda->produto->valor }})</span></p>
                                </td>
                                <td>{{ $venda->quantidade }}</td>
                                <td>{{ $venda->preco_total }}</td>
                                <td>{{ $venda->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @endif


        </div>
    </div>
@endsection
