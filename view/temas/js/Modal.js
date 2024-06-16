$(document).ready(function () {
    $('.adicionar-carrinho').click(function () {
        var nomeProduto = $(this).data('product-name');
        var descricaoProduto = $(this).data('product-desc');
        var valorProduto = parseFloat($(this).data('product-value')).toFixed(2);
        var imagemProduto = $(this).data('product-image');

        // Limpa qualquer ocorrência duplicada no URL da imagem
        var cleanImageUrl = imagemProduto.replace(/(http:\/\/localhost\/ecommerce\/view\/temas\/images\/thumb.php\?src=)+/, "http://localhost/ecommerce/view/temas/images/thumb.php?src=");

        // Atualiza os elementos do modal com os detalhes do produto
        $('#produtoModal .modal-title').text(nomeProduto);
        $('#produtoModal .modal-body #produtoImagem').attr('src', cleanImageUrl);
        $('#produtoModal .modal-body #descricaoProduto').text(descricaoProduto);
        $('#produtoModal .modal-body #valorProduto').text(`R$ ${valorProduto}`);

        // Estiliza o modal
        $('#produtoModal').css({
            'padding': '0',
            'margin': '0',
            'overflow-y': 'auto'
        });

        // header do modal
        $('#produtoModal .modal-header').css({
            'background-color': '#3b5d50',
            'border-top': 'none',
            'justify-content': 'center',
            'padding': '10px 20px'
        });

        // imagem do produto
        $('#produtoModal .modal-body #produtoImagem').css({
            'max-width': '55%',
            'height': 'auto',
            'margin-bottom': '20px',
            'border-radius': '10px'
        });

        // título do modal
        $('#produtoModal .modal-title').css({
            'font-size': '24px',
            'font-weight': 'bold',
            'color': '#fff',
            'text-align': 'center'
        });

        // descrição do produto
        $('#produtoModal .modal-body #descricaoProduto').css({
            'font-size': '16px',
            'color': '#6c757d',
            'margin-bottom': '20px',
            'text-align': 'center'
        });

        // valor do produto
        $('#produtoModal .modal-body #valorProduto').css({
            'font-size': '20px',
            'font-weight': 'bold',
            'color': '#28a745',
            'margin-bottom': '10px',
            'text-align': 'center'
        });

        // footer do modal
        $('#produtoModal .modal-footer').css({
            'background-color': '#3b5d50',
            'border-top': 'none',
            'justify-content': 'center',
            'padding': '10px 20px'
        });

        $('#produtoModal .modal-footer .btn').css({
            'margin': '0 10px'
        });

        $('#produtoModal').modal('show');
    });

    $('#produtoModal .btn-close, #produtoModal .modal-footer .btn-secondary').click(function () {
        $('#produtoModal').modal('hide');
    });

    // Ação do botão de confirmar compra (link vazio)
    $('#confirmarCompraBtn').click(function () {
        // adicionar sua lógica para adicionar o produto ao carrinho de compras aqui
        console.log('Produto adicionado ao carrinho');
    });
});
