<?php
/* Smarty version 3.1.48, created on 2024-06-23 20:35:02
  from 'C:\wamp64\www\ecommerce\index.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_667886f6057f89_66878731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ae3665dba5a5210bb0a3c53045e81e10292ac687' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\index.php',
      1 => 1719174398,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_667886f6057f89_66878731 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php

';?>
require_once './lib/autoload.php';

$smarty = new Template();


$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_Inicio', Rotas::pag_Inicio());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_SobreNos', Rotas::pag_SobreNos());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_Login', Rotas::pag_Login());
$smarty->assign('PAG_CONTATO', Rotas::pag_contato());

$smarty->display('index.tpl');


<?php echo '?>';?>

<?php }
}
