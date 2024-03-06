@extends('layouts.app')

@section('title', 'Produtos')

@section('content')
<div class="container">


    <a href="{{ route('produtos.create') }}" class="btn btn-primary">Cadastrar Produto</a>
    <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Foto</th>
                <th>Valor</th>
                <th>Categoria</th>
                <th>Quantidade</th>
            </tr>
        </thead>
        <tbody>
            @if($produtos->isEmpty())
                <tr>
                    <td colspan="5">Nenhum produto cadastrado</td>
                </tr>
            @else
                @foreach ($produtos as $produto)
                    <tr>
                        <td>{{ $produto->nome }}</td>
                        <td><img src="{{ $produto->foto }}" alt="{{ $produto->foto }}" width="50"></td>
                        <td>{{ $produto->valor }}</td>
                        <td>{{ $produto->categoria->nome }}</td>
                        <td>{{ $produto->quantidade }}</td>
                        <td><a href="{{ route('produtos.show', $produto->id) }}" class="btn btn-primary">Visualizar</a></td>
                        <td><a href="{{ route('produtos.edit', $produto->id) }}" class="btn btn-primary">Editar</a></td>
                        <td><button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmDeleteModal{{ $produto->id }}">Excluir</button>


                         <!-- Modal de confirmação de exclusão -->
                         <div class="modal fade" id="confirmDeleteModal{{ $produto->id }}" tabindex="-1"
                             aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                 <div class="modal-content">
                                     <div class="modal-header">
                                         <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
                                         <button type="button" class="btn-close" data-bs-dismiss="modal"
                                             aria-label="Fechar"></button>
                                     </div>
                                     <div class="modal-body">
                                         Tem certeza de que deseja excluir esta produto?
                                     </div>
                                     <div class="modal-footer">
                                         <button type="button" class="btn btn-secondary"
                                             data-bs-dismiss="modal">Cancelar</button>
                                         <!-- Formulário de exclusão -->
                                         <form action="{{ route('produtos.destroy', $produto->id) }}"
                                             method="post">
                                             @csrf
                                             @method('DELETE')
                                             <!-- Botão para enviar o formulário -->
                                             <button type="submit" class="btn btn-danger">Excluir</button>
                                         </form>
                                     </div>
                                 </div>
                             </div>
                         </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
</div>
@endsection
