<?php

$smarty = new template();
$smarty->assign('INICIO','Pagina dos inicio');
$smarty->display('inicio.tpl');

include_once ROTAS::get_Pasta_Controller() . '/produtos.php';





?>

 