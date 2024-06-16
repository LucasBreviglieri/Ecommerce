<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (!isset($_GET['src']) || !isset($_GET['w']) || !isset($_GET['h']) || !isset($_GET['zc'])) {
    echo "Parâmetros não fornecidos corretamente.";
    exit;
}

$imagem = $_GET['src'];
$largura = $_GET['w'];
$altura = $_GET['h'];
$cortar = $_GET['zc'];

$caminhoImagem = $_SERVER['DOCUMENT_ROOT'] . '/ecommerce/view/temas/images/' . $imagem;

if (!file_exists($caminhoImagem)) {
    echo "Imagem não encontrada.";
    exit;
}

$extensao = pathinfo($caminhoImagem, PATHINFO_EXTENSION);

if ($extensao == "png") {
    $img_origem = imagecreatefrompng($caminhoImagem);
    imagealphablending($img_origem, true);
    imagesavealpha($img_origem, true); 
} elseif ($extensao == "jpg" || $extensao == "jpeg") {
    $img_origem = imagecreatefromjpeg($caminhoImagem);
} else {
    echo "Formato de imagem não suportado.";
    exit;
}

$origem_x = imagesx($img_origem);
$origem_y = imagesy($img_origem);

$nova_largura = $largura;
$nova_altura = $altura;

if ($cortar == 1) {
    $proporcao_origem = $origem_x / $origem_y;
    $proporcao_destino = $largura / $altura;

    if ($proporcao_origem > $proporcao_destino) {
        
        $novo_x = $origem_y * $proporcao_destino;
        $novo_y = $origem_y;
    } else {
        
        $novo_x = $origem_x;
        $novo_y = $origem_x / $proporcao_destino;
    }

    $img_final = imagecreatetruecolor($nova_largura, $nova_altura);
    imagealphablending($img_final, false); 
    imagesavealpha($img_final, true); 
    $transparente = imagecolorallocatealpha($img_final, 0, 0, 0, 127); 
    imagefill($img_final, 0, 0, $transparente); 
    imagecopyresampled($img_final, $img_origem, 0, 0, ($novo_x - $largura) / 2, ($novo_y - $altura) / 2, $nova_largura, $nova_altura, $novo_x, $novo_y);
} else {
    
    $img_final = imagecreatetruecolor($nova_largura, $nova_altura);
    imagealphablending($img_final, false); 
    imagesavealpha($img_final, true); 
    $transparente = imagecolorallocatealpha($img_final, 0, 0, 0, 127); 
    imagefill($img_final, 0, 0, $transparente); 
    imagecopyresampled($img_final, $img_origem, 0, 0, 0, 0, $nova_largura, $nova_altura, $origem_x, $origem_y);
}

header("Content-Type: image/$extensao");

if ($extensao == "png") {
    imagepng($img_final);
} elseif ($extensao == "jpg" || $extensao == "jpeg") {
    imagejpeg($img_final);
}

imagedestroy($img_origem);
imagedestroy($img_final);
?>
