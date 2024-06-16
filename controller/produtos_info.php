<?php

$smarty = new template();

$produtos = new Produtos();
$produtos ->GetProdutosID(Rotas::$pag[1]);

$smarty->assign('PRO', $produtos ->GetItens());
$smarty->display('produtos_info.tpl');

var_dump($produtos -> GetItens());




?>  