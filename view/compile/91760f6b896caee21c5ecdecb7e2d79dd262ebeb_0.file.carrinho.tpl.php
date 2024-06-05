<?php
/* Smarty version 3.1.48, created on 2024-06-03 22:30:46
  from 'C:\wamp64\www\ecommerce\view\carrinho.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_665e44162fa5a8_30521900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91760f6b896caee21c5ecdecb7e2d79dd262ebeb' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\view\\carrinho.tpl',
      1 => 1717453760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665e44162fa5a8_30521900 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Seu Carrinho</h1>
                    <p class="mb-4">Veja os itens no seu carrinho e prossiga para o checkout quando estiver pronto.</p>
                    <p><a href="#" class="btn btn-secondary me-2">Finalizar Compra</a><a href="#" class="btn btn-white-outline">Continuar Comprando</a></p>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="hero-img-wrap">
                  <img src="view/temas/images/couch.png" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Hero Section -->

    <div class="untree_co-section before-footer-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Imagem</th>
                    <th class="product-name">Produto</th>
                    <th class="product-price">Preço</th>
                    <th class="product-quantity">Quantidade</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remover</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="product-thumbnail">
                      <img src="view/temas/images/product-1.png" alt="Imagem" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Produto 1</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Exemplo de texto com botão addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-black increase" type="button">&plus;</button>
                        </div>
                      </div>
                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                  </tr>

                  <tr>
                    <td class="product-thumbnail">
                      <img src="view/temas/images/product-2.png" alt="Imagem" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black">Produto 2</h2>
                    </td>
                    <td>$49.00</td>
                    <td>
                      <div class="input-group mb-3 d-flex align-items-center quantity-container" style="max-width: 120px;">
                        <div class="input-group-prepend">
                          <button class="btn btn-outline-black decrease" type="button">&minus;</button>
                        </div>
                        <input type="text" class="form-control text-center quantity-amount" value="1" placeholder="" aria-label="Exemplo de texto com botão addon" aria-describedby="button-addon1">
                        <div class="input-group-append">
                          <button class="btn btn-outline-black increase" type="button">&plus;</button>
                        </div>
                      </div>
                    </td>
                    <td>$49.00</td>
                    <td><a href="#" class="btn btn-black btn-sm">X</a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-6 mb-3 mb-md-0">
                <button class="btn btn-black btn-sm btn-block">Atualizar Carrinho</button>
              </div>
              <div class="col-md-6">
                <button class="btn btn-outline-black btn-sm btn-block">Continuar Comprando</button>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Cupom</label>
                <p>Insira seu código de cupom se você tiver um.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Código do Cupom">
              </div>
              <div class="col-md-4">
                <button class="btn btn-black">Aplicar Cupom</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Totais do Carrinho</h3>
                  </div>
                </div>
                <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black">$230.00</strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-black btn-lg py-3 btn-block" onclick="window.location='checkout.html'">Proceder para o Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<?php }
}
