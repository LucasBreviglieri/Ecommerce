<?php 

Class Rotas{

    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME(){
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    static function get_SiteRAIZ(){ 
        return $_SERVER['DOCUMENT_ROOT'] . '/' . config::SITE_PASTA;
    }

    static function get_SiteTEMA(){ 
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }

    static function pag_Carrinho(){ 
       return self::get_SiteHOME() . '/carrinho';
    }

    static function pag_SobreNos(){ 
        return self::get_SiteHOME() . '/SobreNos';
    }

    static function pag_Inicio(){ 
        return self::get_SiteHOME() . '/inicio';
    }
    




    static function get_Pagina(){
        if(isset($_GET['pag'])){

            $pagina = $_GET['pag'];

            self::$pag = explode('/', $pagina);

            //echo '<pre>';
            //var_dump(self::$pag);
            //echo '</pre>';

            $pagina = 'controller/' . self::$pag[0] . '.php';
            //$pagina = 'controller/' . $_GET['pag'] . '.php';

            if(file_exists($pagina)){

                include $pagina;

            }else{

            include 'erro.php';

            }
        }
    }
}


?>