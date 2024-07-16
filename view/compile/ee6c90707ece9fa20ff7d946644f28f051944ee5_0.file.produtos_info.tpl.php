<?php
/* Smarty version 3.1.48, created on 2024-07-12 00:22:31
  from 'C:\wamp64\www\ecommerce\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_669077478bf028_16747350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee6c90707ece9fa20ff7d946644f28f051944ee5' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\view\\produtos_info.tpl',
      1 => 1720743748,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_669077478bf028_16747350 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Inclua os estilos do Slick Carousel -->
<link rel="stylesheet" type="text/css" href="plugins/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="plugins/slick/slick-theme.css"/>

<!-- Seção de Detalhes do Produto e Mais Imagens -->
<section class="single-product">
    
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
    <div class="container">
        <h1 style="margin: 50px 0; margin-left: 380px;"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h1>
        <div class="row mt-20">
            <div class="col-md-6 order-md-2">
                
                <div class="single-product-slider">
                    <div class="carousel" id="carousel-custom-<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" class="img-fluid" alt="product-img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-product-details">
                    <h2><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</h2>
                    <p class="product-price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                    <p class="product-description mt-20">
                        <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>

                    </p>
                    <div class="product-quantity d-flex align-items-center">
                        <div class="quantity-container mr-3 d-flex align-items-center">
                            <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                            <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Exemplo de texto com botão addon" aria-describedby="button-addon1">
                            <button class="btn btn-outline-black increase" type="button">&plus;</button>
                        </div>
                        <a href="#" class="btn btn-main mt-20 ml-3">Adicionar ao carrinho</a>
                    </div>
                </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
            <div class="col-md-6 order-md-1">
                <section class="products related-products section" style="margin-bottom: 110px;">
                    <div class="container">
                        
                        <div class="row justify-content-center">
                            <div class="col-md-12">
                                <div class="carousel" id="related-images-carousel">
                                    <div class="carousel-inner">
                                        <ul class="list-unstyled">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGES']->value, 'I');
$_smarty_tpl->tpl_vars['I']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['I']->value) {
$_smarty_tpl->tpl_vars['I']->do_else = false;
?>
                                            <li class="mb-3 text-center">
                                                <img src="<?php echo $_smarty_tpl->tpl_vars['I']->value['img_nome'];?>
" alt="" class="thumbnail img-fluid" style="border: 1px solid #ddd; box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);">
                                            </li>
                                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<!-- Seção de Produtos Relacionados -->
<section class="products related-products section" style="margin-bottom: 110px;">
    <div class="container">
        <div class="row">
            <div class="title text-center">
                <h2>Você pode gostar</h2>
            </div>
        </div>
        <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CATEGORIAS']->value, 'C');
$_smarty_tpl->tpl_vars['C']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['C']->value) {
$_smarty_tpl->tpl_vars['C']->do_else = false;
?>
            <div class="col-md-3">
                <div class="product-item" style="text-align: center;">
                    <div class="product-thumb">
                        <img class="card-img-top" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" alt="product-img" />
                    </div>
                    <div class="product-content">
                        <h4><a href="#"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</a></h4>
                        <p class="price"><?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</p>
                    </div>
                </div>
            </div>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</section>


<!-- Inclua o jQuery -->
<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>

<!-- Inclua o Bootstrap JS -->
<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>

<!-- Inclua o Slick Carousel JS -->
<?php echo '<script'; ?>
 src="plugins/slick/slick.min.js"><?php echo '</script'; ?>
>

<!-- Inicialização do Slick Carousel -->
<?php echo '<script'; ?>
>
    $(document).ready(function(){
        // Inicialização do Slick para o carousel de imagens relacionadas
        $('#related-images-carousel').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 1200,
                    settings: {
                        slidesToShow: 3
                    }
                },
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 576,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
    });
<?php echo '</script'; ?>
>
<?php }
}
