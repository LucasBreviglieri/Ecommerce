<?php

Class ProdutosImages extends Conexao {
    function GetImagePRO($pro) {

        $query = "SELECT * FROM {$this->prefix}imagens WHERE img_pro_id = :pro";

        $params = array(':pro' => (int)$pro);

        $this->ExecuteSQL($query, $params);

        return $this->GetLista();
    }

    private function GetLista() {
        $i = 1;
        while($lista = $this->ListarDados()):
            $this->itens[$i] = array(
                'img_id'     => $lista['img_id'],
                'img_pro_id' => $lista['img_pro_id'],
                'img_nome'   => ROTAS::ImageLink($lista['img_nome'], 150, 150),
                'img_link'   => ROTAS::ImageLink($lista['img_nome'], 350, 350),
                'img_arquivo'   => $lista['img_nome'],
            );
            $i++;
        endwhile;

        return $this->itens;
    }
}

?>
