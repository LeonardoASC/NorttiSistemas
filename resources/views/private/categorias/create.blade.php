@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Criar Categoria</h1>
    <form action="{{ route('categorias.store') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" id="descricao" class="form-control" required>
        </div
        <div class="form-group">
            <label for="codigo">Código</label>
            <input type="text" name="codigo" id="codigo" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="icone">Icone</label>
            <input type="file" name="icone" id="icone" class="form-control" required>
        </div>
        <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancelar</a>

        <button type="submit" class="btn btn-primary">Criar</button>
    </form>
</div>
@endsection
