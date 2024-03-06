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
                            <li class="list-group-item"><strong>Nome:</strong> {{ $produto->nome }}</li>
                            <li class="list-group-item"><strong>Foto:</strong> <img src="{{ $produto->foto }}"
                                alt="{{ $produto->nome }}" width="100"></li>
                            <li class="list-group-item"><strong>Valor:</strong> {{ $produto->valor }}</li>
                            <li class="list-group-item"><strong>Categoria:</strong> {{ $produto->categoria->nome }}</li>
                            <li class="list-group-item"><strong>Quantidade:</strong> {{ $produto->quantidade }}</li>
                        </ul>
                        <a href="{{ route('lojas.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
