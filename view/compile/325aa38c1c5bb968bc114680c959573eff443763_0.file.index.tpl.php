<?php
/* Smarty version 3.1.48, created on 2024-06-24 22:18:34
  from 'C:\wamp64\www\ecommerce\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6679f0baef6579_11814618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '325aa38c1c5bb968bc114680c959573eff443763' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\view\\index.tpl',
      1 => 1719267514,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6679f0baef6579_11814618 (Smarty_Internal_Template $_smarty_tpl) {
?><!doctype html> 
<html lang="pt-BR">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/favicon.png">
  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/css/tiny-slider.css" rel="stylesheet">
  <link href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/css/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">   
  <link href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css" rel="stylesheet">    
  <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"><?php echo '</script'; ?>
>
  <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/css/styleModal.css">
  <title>Loja ECOMMERCE</title>


</head>
<body>
  <nav class="custom-navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">
    <div class="container">
      <a class="navbar-brand" href="#">Ecommerce<span>.</span></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsFurni">
        <ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
          <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['GET_Inicio']->value;?>
">Início</a></li>
          <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_PRODUTOS']->value;?>
">Produtos</a></li>
          <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_SobreNos']->value;?>
">Sobre nós</a></li>
          <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
">Contato</a></li>
        </ul>
        <ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
          <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/images/user.svg"></a></li>
          <li><a class="nav-link" href="<?php echo $_smarty_tpl->tpl_vars['PAG_CARRINHO']->value;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/images/cart.svg"></a></li>
        </ul>
      </div>
    </div>
  </nav>

  <?php 
  Rotas::get_Pagina();
  ?>

  <footer class="footer-section">
    <div class="container relative">
      <div class="sofa-img">
        <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/images/sofa.png" alt="Imagem" class="img-fluid">
      </div>
      <div class="row">
        <div class="col-lg-8">
      </div>
      <div class="row g-5 mb-5">
        <div class="col-lg-4">
          <div class="mb-4 footer-logo-wrap"><a href="#" class="footer-logo">Furni<span>.</span></a></div>
          <p class="mb-4">Transforme seu espaço com nossos designs exclusivos e inovadores. Criamos ambientes funcionais e esteticamente agradáveis.</p>
          <ul class="list-unstyled custom-social">
            <li><a href="#"><span class="fa fa-brands fa-facebook-f"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-twitter"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-instagram"></span></a></li>
            <li><a href="#"><span class="fa fa-brands fa-linkedin"></span></a></li>
          </ul>
        </div>
        <div class="col-lg-8">
          <div class="row links-wrap">
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Sobre nós</a></li>
                <li><a href="#">Serviços</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><a href="#">Minha conta</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Suporte</a></li>
                <li><a href="#">Base de conhecimento</a></li>
                <li><a href="#">Chat ao vivo</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Trabalhe Conosco</a></li>
                <li><a href="#">Nossa equipe</a></li>
                <li><a href="#">Liderança</a></li>
                <li><a href="#">Política de Privacidade</a></li>
              </ul>
            </div>
            <div class="col-6 col-sm-6 col-md-3">
              <ul class="list-unstyled">
                <li><a href="#">Cadeira Nórdica</a></li>
                <li><a href="#">Kruzo Aero</a></li>
                <li><a href="#">Cadeira Ergonômica</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="border-top copyright">
        <div class="row pt-4">
          <div class="col-lg-6">
            <p class="mb-2 text-center text-lg-start">Copyright &copy;<?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
>. Todos os Direitos Reservados.</p>
          </div>
          <div class="col-lg-6 text-center text-lg-end">
            <ul class="list-unstyled d-inline-flex ms-auto">
              <li class="me-4"><a href="#">Termos &amp; Condições</a></li>
              <li><a href="#">Política de Privacidade</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
 
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/js/bootstrap.bundle.min.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/js/tiny-slider.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/js/custom.js"><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/temas/js/Modal.js"><?php echo '</script'; ?>
>
  
</body>
</html>
  <?php }
}
