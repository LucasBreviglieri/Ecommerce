<?php

class Conexao extends Config
{
    private $host, $user, $senha, $banco;

    protected $obj, $itens = array(), $prefix;

    public $paginacao_links, $limite, $inicio, $totalpags;

    function __construct()
    {
        $this->host = self::BD_HOST;
        $this->user = self::BD_USER;
        $this->senha = self::BD_SENHA;
        $this->banco = self::BD_BANCO;
        $this->prefix = self::BD_PREFIX;

        try {
            if ($this->Conectar() == null) {
                $this->Conectar();
            }
        } catch (Exception $e) {
            exit($e->getMessage() . '<H2> ERRO NA CONEXÃO COM O BANCO, FAÇA A CONEXAO COM O BANCO !! </H2>');
        }
    }

    private function Conectar()
    {
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
        );

        $link = new PDO("mysql:host={$this->host}; dbname={$this->banco}", $this->user, $this->senha, $options);
        return $link;
    }

    function ExecuteSQL($query, array $params = NULL)
    {
        $this->obj = $this->Conectar()->prepare($query);

        if ($params !== NULL && count($params) > 0) {
            foreach ($params as $key => $value) {
                $this->obj->bindValue($key, $value);
            }
        }

        return $this->obj->execute();
    }

    function ListarDados()
    {
        return $this->obj->fetch(PDO::FETCH_ASSOC);
    }

    function TotalDados()
    {
        return $this->obj->rowCount();
    }

    function GetItens()
    {
        return $this->itens;
    }

    function PaginacaoLinks($campo, $tabela)
    {
        $pag = new Paginacao();
        $pag->GetPaginacao($campo, $tabela);
        $this->paginacao_links = $pag->link;

        $this->totalpags = $pag->totalpags;
        $this->limite    = $pag->limite;
        $this->inicio    = $pag->inicio;

        $inicio = $pag->inicio;
        $limite = $pag->limite;

        if ($this->totalpags > 0) {
            return " limit {$inicio}, {$limite}";
        } else {
            return "";
        }
    }

    protected function Paginacao($paginas = array(), $paginaAtual = 1)
    {
        $pag = '<ul class="pagination d-flex justify-content-center mt-5">';
        $pag .= '<li class="page-item"><a class="page-link" href="?p=1" aria-label="Página inicial"> Início</a></li>';

        foreach ($paginas as $p) :
            $activeClass = ($p == $paginaAtual) ? ' active' : '';
            $pag .= '<li class="page-item' . $activeClass . '"><a class="page-link" href="?p=' . $p . '">' . $p . '</a></li>';
        endforeach;

        $pag .= '<li class="page-item"><a class="page-link"  href="?p=' . $p . '" aria-label="Última página"> ...</a></li>';
        $pag .= '<li class="page-item"><a class="page-link" href="?p='. $this->totalpags .'" aria-label="Última página"> Final </a></li>';
        $pag .= '</ul>';

        if($this->totalpags > 1){
            return $pag;
        }
       
    }

    function ShowPaginacao()
    {
        return $this->Paginacao($this->paginacao_links);
    }
}
?>