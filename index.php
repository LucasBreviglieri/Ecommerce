<?php

require_once './lib/autoload.php';

$smarty = new Template();
Rotas::get_Pagina();


//valores para o tamplate
$smarty->assign('NOME','LUCÃO');




$smarty->display('index.tpl');
?>
