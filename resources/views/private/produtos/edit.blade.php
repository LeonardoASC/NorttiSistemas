@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edição do Produto: {{$produto->nome}}</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="nome" id="name" class="form-control" value="{{ $produto->nome ?? old('nome')}}">
            </div>
            {{ $errors->has('nome') ? $errors->first('nome') : '' }}
            <div class="form-group">
                <label for="price">Valor</label>
                <input type="number" name="valor" id="price" class="form-control" value="{{ $produto->valor }}">
            </div>
            {{ $errors->has('valor') ? $errors->first('valor') : '' }}
            <div class="form-group">
                <label for="categoria_id">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control" required>
                    <option value="">Selecione a categoria</option>
                    @foreach($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nome }}</option>
                    @endforeach
                </select>
            </div>
            {{ $errors->has('categoria') ? $errors->first('categoria') : '' }}
            <div class="form-group">
                <label for="quantity">Quantidade</label>
                <input type="number" name="quantidade" id="quantity" class="form-control" value="{{ $produto->quantidade }}">
            </div>
            {{ $errors->has('quantidade') ? $errors->first('quantidade') : '' }}
            <div class="form-group">
                <label for="photo">Foto</label>
                <input type="file" name="foto" id="photo" class="form-control" value="{{ $produto->foto }}">
            </div>
            {{ $errors->has('foto') ? $errors->first('foto') : '' }}
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
