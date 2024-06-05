<?php

//inicio da camada do template
$smarty = new template();
$smarty->assign('PRODUTOS','Pagina dos produtos');
$smarty->display('produtos.tpl');
//fim da chamada do template

$produtos = new Produtos();
$produtos ->GetProdutos();

var_dump($produtos ->GetItens());
 





?>