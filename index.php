<?php
require_once './lib/autoload.php';

$smarty = new Template();

// valores para o template
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_Inicio', Rotas::pag_Inicio());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_SobreNos', Rotas::pag_SobreNos());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PAG_Login', Rotas::pag_Login());
$smarty->assign('PAG_CONTATO', Rotas::pag_contato());

$smarty->display('index.tpl');
?>
        