@extends('layouts.extra')

@section('content')
    <div class="container-fluid bg-dark" style="height: 100%">
        <div class="row">
            <div class="col-12 text-center py-5 bg-light">
                <h1>Bem vindo a loja</h1>
                <p class="lead text-dark">Nortti Sistemas</p>
            </div>
        </div>
        <div class="container-md">
            <div class="row mt-5">
                @foreach ($produtos as $produto)
                    <div class="col-md-4 mb-2">
                        <div style="{{ $produto->quantidade === 0 ? 'opacity: 0.5;' : '' }}" class="card">
                            <img src="{{ $produto->foto }}" class="card-img-top" alt="{{ $produto->nome }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $produto->nome }}</h5>
                                <p class="card-text ml-2">Price: ${{ $produto->valor }}</p>
                            </div>
                            <div class="card-footer text-muted d-flex justify-content-between">
                                @if ($produto->quantidade !== 0)
                                    <a href="{{ route('lojas.show', $produto->id) }}"
                                        class="btn-sm btn-primary text-xs text-decoration-none">View Details</a>
                                    <td> <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                            data-bs-target="#confirmDeleteModal{{ $produto->id }}">Comprar</button>

                                        <!-- Modal de confirmação de exclusão -->
                                        <div class="modal fade" id="confirmDeleteModal{{ $produto->id }}" tabindex="-1"
                                            aria-labelledby="confirmDeleteModalLabel" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="confirmDeleteModalLabel">Confirmar
                                                            Compra</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                            aria-label="Fechar"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        Tem certeza de que deseja comprar este produto?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary"
                                                            data-bs-dismiss="modal">Cancelar</button>                                          
                                                        <form action="{{ route('lojas.update', $produto->id) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PUT')
                                                            <button type="submit"
                                                                class="btn btn-success">Comprar</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <p>Sem estoque</p>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection