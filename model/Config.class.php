<?php

class Config
{

    //Informações basicas do site
    const SITE_URL = "http://localhost";
    const SITE_PASTA = "ecommerce";
    const SITE_NOME = "Ecommerce Com MVC";
    const SITE_EMAIL_ADM = "ecommercerobo@gmail.com";
    const BD_LIMIT_POR_PAG = 6;

    //Informações do banco de dados
    const BD_HOST = "localhost",
        BD_USER = "root",
        BD_SENHA = "",
        BD_BANCO = "Ecommerce",
        BD_PREFIX = "lb_";

    //Informações para PHP MAILLER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "ecommercerobo@gmail.com";
    const EMAIL_NOME = "Contato loja";
    const EMAIL_SENHA = "Luluc@s10";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "ecommercerobo@gmail.com";
}

?>