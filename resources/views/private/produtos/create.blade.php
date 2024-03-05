@extends('layouts.app')

@section('content')
<div class="container">
        <h1>Criar Produto</h1>
        <form action="{{ route('produtos.store') }}" method="POST" >
            @csrf
            <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" class="form-control" required>
            </div>
            
            <div class="form-group">
                <label for="valor">Valor</label>
                <input type="number" name="valor" id="valor" class="form-control" required>
            </div>
           
            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control" required>
                    <option value="">Selecione a categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="quantidade">Quantidade</label>
                <input type="number" name="quantidade" id="quantidade" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" class="form-control" required>
            </div>
            
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>

            <button type="submit" class="btn btn-primary">Criar</button>
        </form>
    </div>
@endsection
