<div class="col-md-2 col-lg-2 col-3 d-md-block bg-dark position-fixed vh-100">
    <div class="position-sticky">
        <!-- Foto no topo da sidebar -->
        <img src="https://nortti.net/assets/img/logo.png" alt="Foto" class="img-fluid mx-auto d-block mt-3 mb-3"
            style="width: 80px; height: auto;">

        <!-- Linha para separar do conteúdo -->
        <hr class="bg-white">

        <h5 class="my-4 text-white">Sidebar</h5>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link bg-white text-dark mb-2" href="{{ route('vendas.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                        <path d="M2.5 5a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0zm12 0a.5.5 0 1 1 1 0 .5.5 0 0 1-1 0zm-1.938 9.544c-.4.187-.862.293-1.362.293-.8 0-1.557-.26-2.175-.705-.606-.438-1.068-1.042-1.364-1.766l-5.74-12.32a.5.5 0 0 0-.922-.018l-2 4.5a.5.5 0 0 0 .34.67l1.52.48-1.23 2.77a.5.5 0 0 0 .24.67l3.02 1.51c.07.035.148.054.226.054h8.5a.5.5 0 0 0 .45-.29l1.5-3a.5.5 0 0 0-.29-.67l-1.4-.47.92-2.08a.5.5 0 0 0-.23-.67L9.5 3.02V3h4.276a2.5 2.5 0 1 1 .002 1H10v1h2.956a2.5 2.5 0 1 1 .001 1H9.5l-1.5 3h8.673a2.5 2.5 0 1 1 .002 1H9.5l-.537 1.21z"/>
                    </svg>
                    Vendas
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-white text-dark mb-2" href="{{ route('categorias.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tags-fill" viewBox="0 0 16 16">
                        <path d="M14.5 5.5a.5.5 0 0 1 0 1h-11a.5.5 0 0 1 0-1h11zM4 8a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm4-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm4-2a1 1 0 1 0 0-2 1 1 0 0 0 0 2zm0 2a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                    </svg>
                    Categorias
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link bg-white text-dark mb-2" href="{{ route('produtos.index') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                        <path d="M5.5 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v1h-5v-1zm5-1h-4A1.5 1.5 0 0 0 5 4v1h6V4a1.5 1.5 0 0 0-1.5-1.5zM4.486 7.002A1.5 1.5 0 0 0 6 8.5h4a1.5 1.5 0 0 0 1.514-1.498L12.998 5H3.002l1.484 2.002zM13 8.5a2.5 2.5 0 0 1-2.5 2.5H5.5A2.5 2.5 0 0 1 3 8.5v-1h10v1z"/>
                    </svg>
                    Produtos
                </a>
            </li>
        </ul>
    </div>
</div>
