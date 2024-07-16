<?php
/* Smarty version 3.1.48, created on 2024-07-16 22:37:41
  from 'C:\wamp64\www\ecommerce\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6696f635e7f4e8_01984809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e328b0a03a6dd47b8ba677c5f00465cad1876497' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\view\\produtos.tpl',
      1 => 1721169455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6696f635e7f4e8_01984809 (Smarty_Internal_Template $_smarty_tpl) {
?><style>
    /* Estilos para a paginação */
    .pagination .page-link {
        color: #3b5d50;
        /* Cor do texto dos botões */
        background-color: transparent;
        /* Fundo transparente */
        border-color: #3b5d50;
        /* Cor da borda */
        margin-right: 5px;
        /* Espaçamento entre os botões */
    }

    .pagination .page-item.active .page-link {
        background-color: #3b5d50;
        /* Cor de fundo do botão ativo */
        border-color: #3b5d50;
        /* Cor da borda do botão ativo */
    }

    .pagination .page-link:hover {
        color: #fff;
        /* Cor do texto ao passar o mouse */
        background-color: #3b5d50;
        /* Cor de fundo ao passar o mouse */
        border-color: #3b5d50;
        /* Cor da borda ao passar o mouse */
    }
</style>
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Produtos</h1>
                    <p class="mb-4">Aqui você irá encontrar tudo que busca para sua casa! <br> Móveis maravilhosos para
                        aumentar a beleza, estilo e modernidade de sua casa.</p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/images/couch.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Fim da Seção Hero -->
<!-- Shopping dos Sofás Início -->

<div class="container py-5">
    <h1 class="mb-4 text-center" style="height: -200px;">Shopping dos Sofás</h1>

    <div class="row g-4">
        <div class="col-lg-3">

            <div class="mb-3 text-center">
                <h2>Categorias</h2>
            </div>
            <ul class="list-unstyled" style="padding-left: 0; margin-top: 30px;">
                <li class="mb-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
"
                        class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-couch me-2"></i> Todos
                        <span class="badge bg-link rounded-pill">o</span>
                    </a>
                </li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
                <li class="mb-3">
                    <a href="<?php echo $_smarty_tpl->tpl_vars['C']->value['cate_link'];?>
"
                        class="btn btn-light d-flex justify-content-between align-items-center w-100">
                        <i class="fas fa-couch me-2"></i> <?php echo $_smarty_tpl->tpl_vars['C']->value['cate_nome'];?>

                        <span class="badge bg-link rounded-pill">o</span>
                    </a>
                </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
            <div class="row g-4" style="margin-top:30px;">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <div class="col-md-6 col-lg-4">
                    <div class="card">
                        <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" class="card-img-top" alt="Imagem do Produto">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h5>
                            <p class="card-text"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</p>
                            <p class="card-text" style="font-weight: bold;"><small class="text-muted">R$
                                    <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</small></p>
                            <div class="d-flex justify-content-between align-items-center">
                                <button class="btn btn-primary btn-sm adicionar-carrinho" data-product-id="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
"
                                    data-product-name="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
" data-product-desc="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
"
                                    data-product-value="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
"
                                    data-product-image="http://localhost/ecommerce/view/temas/images/thumb.php?src=<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
&w=550&h=550&zc="
                                    style="font-size: 10px;">
                                    <i class="fa fa-shopping-bag me-2"></i> Adicionar ao carrinho
                                </button>
                                <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
"
                                    class="btn btn-outline-info btn-sm mais-informacoes" style="font-size: 10px;">
                                    <i class="fa fa-info-circle me-1"></i> Mais informações
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </div>
    </div>
    <?php if ($_smarty_tpl->tpl_vars['PRO_TOTAL']->value < 1) {?> <H4 class="alert alert-danger">NENHUM PRODUTO ENCONTRADO !</H4>
        <?php }?>
</div>
</div>

<div class="col-12">
    <nav aria-label="Paginação" class="d-flex justify-content-center mt-5">
        <?php echo $_smarty_tpl->tpl_vars['PAGINAS']->value;?>

    </nav>
</div>

</div>
<?php }
}
