<?php

class Produtos extends Conexao
{
    public function __construct()
    {
        parent::__construct();
    }

    function GetProdutos()
    {
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id";

        $query .= " ORDER BY pro_id DESC";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix . "produtos");

        $this->ExecuteSQL($query);
        $this->GetLista();
    }

    function GetProdutosID($id)
    {
        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id ";
        $query .= "WHERE pro_id = :id";

        $params = array(':id' => (int)$id);

        $this->ExecuteSQL($query, $params);
        return $this->GetLista();
    }

    function GetProdutosCateID($id)
    {
        $id = filter_var($id, FILTER_SANITIZE_NUMBER_INT);

        $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c ON p.pro_categoria = c.cate_id ";
        $query .= "WHERE pro_categoria = :id";

        $query .= $this->PaginacaoLinks("pro_id", $this->prefix . "produtos WHERE pro_categoria=".(int)$id);

        $params = array(':id' => (int)$id);

        $this->ExecuteSQL($query, $params);
        return $this->GetLista();
    }

    private function GetLista()
    {
        $i = 1;
        while ($lista = $this->ListarDados()) :
            $this->itens[$i] = array(
                'pro_id'          => $lista['pro_id'],
                'pro_nome'        => $lista['pro_nome'],
                'pro_desc'        => $lista['pro_desc'],
                'pro_peso'        => $lista['pro_peso'],
                'pro_valor'       => Sistema::formatarValor($lista['pro_valor']),
                'pro_altura'      => $lista['pro_altura'],
                'pro_largura'     => $lista['pro_largura'],
                'pro_comprimento' => $lista['pro_comprimento'],
                'pro_slug'        => $lista['pro_slug'],
                'pro_ref'         => $lista['pro_ref'],
                'cate_nome'       => $lista['cate_nome'],
                'cate_id'         => $lista['cate_id'],
                'pro_img'         => ROTAS::ImageLink($lista['pro_img'], 550, 550),
                'pro_categoria'   => $lista['pro_categoria']
            );
            $i++;
        endwhile;

        return $this->itens;
    }
}
?>