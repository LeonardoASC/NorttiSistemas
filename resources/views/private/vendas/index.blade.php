@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Minhas Vendas</h1>

        @if ($vendas->isEmpty())
            <p>Você ainda não fez nenhuma compra.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th>Preço Total</th>
                        <th>Data da Compra</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($vendas as $venda)
                        <tr>
                            <td>{{ $venda->produto->nome }}</td>
                            <td>{{ $venda->quantidade }}</td>
                            <td>{{ $venda->preco_total }}</td>
                            <td>{{ $venda->created_at->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
