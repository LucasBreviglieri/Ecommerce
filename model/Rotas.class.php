<?php 

class Rotas {
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';

    static function get_SiteHOME() {
        return Config::SITE_URL . '/' . Config::SITE_PASTA;
    }

    static function get_SiteRAIZ() { 
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_PASTA;
    }

    static function get_SiteTEMA() { 
        return self::get_SiteHOME() . '/' . self::$pasta_view;
    }

    static function pag_Carrinho() { 
       return self::get_SiteHOME() . '/carrinho';
    }

    static function pag_SobreNos() { 
        return self::get_SiteHOME() . '/sobrenos';
    }

    static function pag_Inicio() { 
        return self::get_SiteHOME() . '/inicio';
    }

    static function pag_Produtos() { 
        return self::get_SiteHOME() . '/produtos';
    }

    static function pag_Contato() { 
        return self::get_SiteHOME() . '/contato';
    }

    static function pag_Login() { 
        return self::get_SiteHOME() . '/' . self::$pasta_view. '/login';
    }

    static function get_Pagina() {
        if (isset($_GET['pag'])) {
            $pagina = $_GET['pag'];
        } else {
            $pagina = 'inicio'; // Defina a página padrão aqui
        }

        self::$pag = explode('/', $pagina);
        $pagina = 'controller/' . self::$pag[0] . '.php';

        if (file_exists($pagina)) {
            include $pagina;
        } else {
            include 'erro.php';
        }
    }
}
?>
    


