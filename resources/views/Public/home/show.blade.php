@extends('layouts.extra')

@section('content')
    <div class="container-fluid bg-dark text-light py-5" style="height: 100vh;">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-white text-dark">
                    <div class="card-body">
                        <h1 class="card-title">Produto: {{$produto->nome}}</h1>
                        <p class="card-text">Detalhe do produto</p>
                        <ul class="list-unstyled">
                            <li><strong>Nome:</strong> {{ $produto->nome }}</li>
                            <li><strong>Foto:</strong> {{ $produto->foto }}</li>
                            <li><strong>Valor:</strong> {{ $produto->valor }}</li>
                            <li><strong>Categoria:</strong> {{ $produto->categoria->nome }}</li>
                            <li><strong>Quantidade:</strong> {{ $produto->quantidade }}</li>
                        </ul>
                        <a href="{{ route('lojas.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
