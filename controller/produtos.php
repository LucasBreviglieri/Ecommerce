<?php

$smarty = new template();

$produtos = new Produtos();
$produtos ->GetProdutos();

$smarty->assign('PRO', $produtos ->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());
$smarty->display('produtos.tpl');


?>  