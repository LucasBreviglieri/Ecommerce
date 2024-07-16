<?php

$smarty = new template();

// Instância de Produtos
$produtos = new Produtos();
$produtos->GetProdutosID(Rotas::$pag[1]);

// Instância de imagens
$image = new ProdutosImages();
$image->GetImagePRO(Rotas::$pag[1]);

// Instância de Categorias
$categorias = new Categorias();
$categorias->GetCategorias(); 

// Atribuições ao Smarty
$smarty->assign('PRO',          $produtos->GetItens()); 
$smarty->assign('CATEGORIAS',   $categorias->GetItens()); 
$smarty->assign('GET_TEMA',     Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME',     Rotas::get_SiteHOME());
$smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos());
$smarty->assign('PRO_INFO',     Rotas::pag_ProdutosInfo());
$smarty->assign('PRO_TOTAL',    $produtos->TotalDados());
$smarty->assign('IMAGES',       $image->GetItens());

// Exibe o template
$smarty->display('produtos_info.tpl');

?>
