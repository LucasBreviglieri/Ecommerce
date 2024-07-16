    <?php

    $smarty = new template();

    $categorias = new Categorias();
    $categorias->GetCategorias(); 

    $produtos = new Produtos();
    if(isset(Rotas::$pag[1])){
        $produtos ->GetProdutosCateID(Rotas::$pag[1]);
    }else{
        $produtos ->GetProdutos();
    }

    $smarty->assign('GET_TEMA',     Rotas::get_SiteTEMA      ());
    $smarty->assign('GET_HOME',     Rotas::get_SiteHOME      ());
    $smarty->assign('PAG_CARRINHO', Rotas::pag_Carrinho      ());
    $smarty->assign('PAG_PRODUTOS', Rotas::pag_Produtos      ());
    $smarty->assign('PRO',          $produtos ->GetItens     ());
    $smarty->assign('CATEGORIAS',   $categorias->GetItens    ()); 
    $smarty->assign('PRO_INFO',     Rotas::pag_ProdutosInfo  ());
    $smarty->assign('PRO_TOTAL',    $produtos->TotalDados    ());
    $smarty->assign('PAGINAS',      $produtos->ShowPaginacao ());

    $smarty->display('produtos.tpl');
    
    ?>  