@extends('layouts.app')

@section('title', 'Categorias')

@section('content')
    <div class="container">
        
        <a href="{{ route('categorias.create') }}" class="btn btn-primary">Cadastrar categoria</a>
        <a href="{{ url('/') }}" class="btn btn-primary">Voltar</a>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Codigo</th>
                    <th>Icone</th>
                    <th>Descricao</th>
                </tr>
            </thead>
            <tbody>
                @if ($categorias->isEmpty())
                    <tr>
                        <td colspan="5">Nenhum categoria cadastrado</td>
                    </tr>
                @else
                    @foreach ($categorias as $categoria)
                        <tr>
                            <td>{{ $categoria->nome }}</td>
                            <td>{{ $categoria->codigo }}</td>
                            <td><img src="{{ $categoria->icone }}" alt="{{ $categoria->nome }}" width="50"></td>

                            <td>{{ $categoria->descricao }}</td>
                            <td><a href="{{ route('categorias.show', $categoria->id) }}"
                                    class="btn btn-primary">Visualizar</a></td>
                            <td><a href="{{ route('categorias.edit', $categoria->id) }}" class="btn btn-primary">Editar</a>
                            </td>
                            <td>
                                <!-- Botão para abrir o modal -->
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal"
                                    data-bs-target="#confirmDeleteModal{{ $categoria->id }}">Excluir</button>

                                <!-- Modal de confirmação de exclusão -->
                                <div class="modal fade" id="confirmDeleteModal{{ $categoria->id }}" tabindex="-1"
                                    aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar Exclusão</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Fechar"></button>
                                            </div>
                                            <div class="modal-body">
                                                Tem certeza de que deseja excluir esta categoria?
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Cancelar</button>
                                                <!-- Formulário de exclusão -->
                                                <form action="{{ route('categorias.destroy', $categoria->id) }}"
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

    <!-- Modal de erro -->
    <div class="modal fade" id="errorModal" tabindex="-1" aria-labelledby="errorModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="errorModalLabel">Erro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
                </div>
                <div class="modal-body">
                    <p id="errorMessage"></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var errorMessage = "{{ session('error') }}";
                document.getElementById('errorMessage').innerText = errorMessage;
                var errorModal = new bootstrap.Modal(document.getElementById('errorModal'));
                errorModal.show();
            });
        </script>
    @endif

@endsection
