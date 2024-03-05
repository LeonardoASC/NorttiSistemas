@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-dark text-light py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card bg-white text-dark">
                    <div class="card-body">
                        <h1 class="card-title">Categoria: {{$categoria->nome}}</h1>
                        <p class="card-text">Detalhe da categoria</p>
                        <ul class="list-group">
                            <li class="list-group-item"><strong>Nome:</strong> {{ $categoria->nome }}</li>
                            <li class="list-group-item"><strong>Foto:</strong> <img src="{{ $categoria->icone }}" alt="{{ $categoria->nome }}" width="100"></li>
                            <li class="list-group-item"><strong>Valor:</strong> {{ $categoria->codigo }}</li>
                            <li class="list-group-item"><strong>Descrição:</strong> {{ $categoria->descricao }}</li>
                        </ul>
                        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Voltar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
