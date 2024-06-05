<?php

$to       = Config::EMAIL_USER;
$subject  = 'Contato - Ecommerce';
$message  = 'Email de ' . $_GET['txtinputnome'] . "\r\n" . $_GET['txtinputarea'];
$dest     = $_GET['txtinputemail'];

$headers  = "From: " . $dest;

mail($to, $subject, $message, $headers);

?>

<script>alert('Email enviado com sucesso !!')</script>
<meta http-equiv="refresh" content="0; url=contato">