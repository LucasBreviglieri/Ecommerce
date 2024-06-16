<style>
    /* Estilos para a paginação */
    .pagination .page-link {
        color: #3b5d50; /* Cor do texto dos botões */
        background-color: transparent; /* Fundo transparente */
        border-color: #3b5d50; /* Cor da borda */
        margin-right: 5px; /* Espaçamento entre os botões */
    }

    .pagination .page-item.active .page-link {
        background-color: #3b5d50; /* Cor de fundo do botão ativo */
        border-color: #3b5d50; /* Cor da borda do botão ativo */
    }

    .pagination .page-link:hover {
        color: #fff; /* Cor do texto ao passar o mouse */
        background-color: #3b5d50; /* Cor de fundo ao passar o mouse */
        border-color: #3b5d50; /* Cor da borda ao passar o mouse */
    }

    
</style>

<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Produtos</h1>
                    <p class="mb-4">Aqui você irá encontrar tudo que busca para sua casa! <br> Móveis maravilhosos para aumentar a beleza, estilo e modernidade de sua casa.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="view/temas/images/couch.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fim da Seção Hero -->

<!-- Shopping dos Sofás Início -->
<div class="container py-5">
    <h1 class="mb-4 text-center" style="margin-top: 27px; margin-bottom: 27px;">Shopping dos Sofás</h1>
    <div class="row g-4">
        <div class="col-xl-3">
            <div class="input-group">
                <input type="search" class="form-control p-3" placeholder="Palavras-chave" aria-label="Pesquisar" aria-describedby="search-icon-1">
                <button class="btn btn-primary" type="button" id="search-icon-1"><i class="fa fa-search"></i></button>
            </div>
        </div>
        <div class="col-xl-3">
            <div class="bg-light p-3 rounded d-flex align-items-center justify-content-between mb-4">
                <label for="fruits" class="mb-0">Ordenação Padrão:</label>
                <select id="fruits" name="fruitlist" class="form-select form-select-sm bg-light border-0">
                    <option value="volvo">Nada</option>
                    <option value="saab">Popularidade</option>
                    <option value="opel">Orgânico</option>
                    <option value="audi">Fantástico</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row g-4">
        <div class="col-lg-3">
            <div class="mb-3 text-center">
                <h1 style="margin-top: -23px;">Categorias</h1>
            </div>
            <ul class="list-unstyled" style="padding-left: 0; margin-top: 30px;">
                <li class="mb-3">
                    <a href="#" class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-couch me-2"></i>Sofá Azul
                        <span class="badge bg-link rounded-pill">(3)</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="#" class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-couch me-2"></i>Sofazinho
                        <span class="badge bg-link rounded-pill">(5)</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="#" class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-couch me-2"></i>Sofazão
                        <span class="badge bg-link rounded-pill">(2)</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="#" class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-chair me-2"></i>Poltrona
                        <span class="badge bg-link rounded-pill">(8)</span>
                    </a>
                </li>
                <li class="mb-3">
                    <a href="#" class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-chair me-2"></i>Banquinha Estofada
                        <span class="badge bg-link rounded-pill">(5)</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="modal fade" id="produtoModal" tabindex="-1" aria-labelledby="produtoModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="produtoModalLabel">Detalhes do Produto</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="" class="img-fluid modal-imagem" id="produtoImagem" alt="Imagem do Produto">
                        <h6 class="mt-3">Descrição do Produto:</h6>
                        <p id="descricaoProduto"></p>
                        <h6>Valor:</h6>
                        <p id="valorProduto"></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
                        <a href="#" class="btn btn-secondary" id="confirmarCompraBtn">Confirmar Compra</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-9">
            <div class="row g-4">
                {foreach from=$PRO item=P}
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="{$P.pro_img}" class="card-img-top" alt="Imagem do Produto">
                        <div class="card-body">
                            <h5 class="card-title">{$P.pro_nome}</h5>
                            <p class="card-text">{$P.pro_desc}</p>
                            <p class="card-text"><small class="text-muted">R$ {$P.pro_valor}</small></p>
                            <button class="btn btn-primary adicionar-carrinho"
                                data-product-id="{$P.pro_id}"
                                data-product-name="{$P.pro_nome}"
                                data-product-desc="{$P.pro_desc}"
                                data-product-value="{$P.pro_valor}"
                                data-product-image="http://localhost/ecommerce/view/temas/images/thumb.php?src={$P.pro_img}&w=550&h=550&zc=">
                                <i class="fa fa-shopping-bag me-2"></i> Adicionar ao carrinho
                            </button>
                        </div>
                    </div>
                </div>
                {/foreach}
            </div>
        </div>
        
        
    </div>

    <div class="col-12">
        <nav aria-label="Paginação" class="d-flex justify-content-center mt-5">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- Fim do Shopping dos Sofás -->
