@extends('layouts.extra')

@section('title', 'Página Inicial')

@section('content')
<div class="container-fluid bg-dark" style="height: 100vh;">
    <div class="row">
        <div class="col-12 text-center py-5 bg-light">
            <h1 class="display-1 mt-5 text-dark">Nortti Sistemas</h1>
            <p class="lead text-dark">Este é um sistema de gerenciamento de produtos e categorias desenvolvido com Laravel 10.x e Bootstrap 5.</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Administrador</h5>
                    <p class="card-text text-center">Cadastre, edite, exclua e visualize produtos, categorias e veja as vendas.</p>
                    <a href="{{ route('produtos.index') }}" class="btn btn-primary d-block mx-auto">Entrar</a>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="card border-0 mt-5">
                <div class="card-body">
                    <h5 class="card-title text-center">Loja</h5>
                    <p class="card-text text-center">Compre itens da loja para ver suas vendas na área do administrador.</p>
                    <a href="{{ route('lojas.index') }}" class="btn btn-primary d-block mx-auto">Entrar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
