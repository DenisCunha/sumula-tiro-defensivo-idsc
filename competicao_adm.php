<?php
include_once('system/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$evento_id = $_POST['evento_id'];

$nome = $_POST['nome'];
$data = $_POST['datac'];
$dso = $_POST['dso'];

$extensao = strtolower(substr( $_FILES['imagem']['name'], -4));
$novo_nome = date('d-m-Y-H:i:s') . $extensao;
$diretorio = getcwd() . '/isset/img/';


if (move_uploaded_file( $_FILES['imagem']['tmp_name'], $diretorio.$novo_nome)) {
    $imagesrc = "isset/img/".$novo_nome;
} else {
    $imagesrc = "erro de imagem" . $_FILES['imagem']['name'];
}



$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao`  WHERE `nomeevento` = '$nome'");

if($consulta->num_rows) {
     header("Location: /competicao.php?msg=1");

     die();  
} else {

    $banco->query("INSERT INTO `" . DB_PREFIX . "competicao` SET `nomeevento` = '$nome', `dataevento` = '$data', `dso_id` = '$dso', `image` = '$imagesrc'");
    header("Location: /competicao.php?msg=2");

    die(); 
}

} else {
    
    echo "ERROR";
}
?>