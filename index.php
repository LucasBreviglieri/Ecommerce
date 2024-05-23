<?php

require_once './lib/autoload.php';

$smarty = new Template();


//valores para o tamplate
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('GET_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('GET_SobreNos', Rotas::pag_SobreNos());
$smarty->assign('GET_Inicio', Rotas::pag_Inicio());


$smarty->display('index.tpl');
?>



