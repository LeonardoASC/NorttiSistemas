@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Edição do categoria: {{$categoria->nome}}</h1>

        <form action="{{ route('categorias.update', $categoria->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="nome" id="name" class="form-control" value="{{ $categoria->nome ?? old('nome')}}">
            </div>
            {{ $errors->has('nome') ? $errors->first('nome') : '' }}
            <div class="form-group">
                <label for="category">Codigo</label>
                <input type="text" name="codigo" id="category" class="form-control" value="{{ $categoria->codigo }}">
            </div>
            {{ $errors->has('codigo') ? $errors->first('codigo') : '' }}
            <div class="form-group">
                <label for="photo">Ícone (URL da Imagem)</label>
                <input type="text" name="icone" id="photo" class="form-control" value="{{ $categoria->icone }}">
            </div>
            {{ $errors->has('icone') ? $errors->first('icone') : '' }}
            <div class="form-group">
                <label for="quantity">Descricao</label>
                <input type="text" name="descricao" id="quantity" class="form-control" value="{{ $categoria->descricao }}">
            </div>
            {{ $errors->has('descricao') ? $errors->first('descricao') : '' }}
            <a href="{{ route('categorias.index') }}" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
