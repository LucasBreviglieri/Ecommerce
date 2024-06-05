<?php
/* Smarty version 3.1.48, created on 2024-06-04 23:22:12
  from 'C:\wamp64\www\ecommerce\view\contato.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_665fa1a48d0cf9_50755329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7b075eaa56065777958086066f51023a5fcc020c' => 
    array (
      0 => 'C:\\wamp64\\www\\ecommerce\\view\\contato.tpl',
      1 => 1717543329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_665fa1a48d0cf9_50755329 (Smarty_Internal_Template $_smarty_tpl) {
?><!-- Início da Seção Hero -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Contato</h1>
                    <p class="mb-4">Entre em contato conosco para qualquer dúvida ou informação. Nossa equipe está pronta para ajudar você com o que for necessário.</p>
                    <p><a href="" class="btn btn-secondary me-2">Compre Agora</a><a href="#" class="btn btn-white-outline">Explore</a></p>
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
<!-- Fim da Seção Hero -->

<!-- Início do Formulário de Contato -->
<div class="untree_co-section">
    <div class="container">

        <div class="block">
            <div class="row justify-content-center">

                <div class="col-md-8 col-lg-8 pb-4">

                    <div class="row mb-5">
                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt-fill" viewBox="0 0 16 16">
                                        <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>R. Não é da sua conta, nº123, Av. Ainda não é da sua conta</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                                        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z"/>
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>ecommercerobo@gmail.com</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>

                        <div class="col-lg-4">
                            <div class="service no-shadow align-items-center link horizontal d-flex active" data-aos="fade-left" data-aos-delay="0">
                                <div class="service-icon color-1 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                                        <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                    </svg>
                                </div> <!-- /.icon -->
                                <div class="service-contents">
                                    <p>+55 19 98765-4321</p>
                                </div> <!-- /.service-contents-->
                            </div> <!-- /.service -->
                        </div>
                    </div>

                    <form action="envio">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="fname">Primeiro Nome</label>
                                    <input name="txtinputnome" type="text" class="form-control" id="fname">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label class="text-black" for="lname">Sobrenome</label>
                                    <input type="text" class="form-control" id="lname">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="text-black" for="txtinputemail">Endereço de Email</label>
                            <input type="email" class="form-control" id="email" name="txtinputemail">
                        </div>

                        <div class="form-group mb-5">
                            <label class="text-black" for="message">Tire sua duvida !</label>
                            <textarea name="" class="form-control" id="message" cols="30" rows="5"></textarea>
                        </div>

                        <button type="submit" name="txtinputarea" class="btn btn-primary-hover-outline">Enviar Mensagem</button>
                    </form>

                </div>

            </div>

        </div>

    </div>

</div>
<!-- Fim do Formulário de Contato -->
<?php }
}
