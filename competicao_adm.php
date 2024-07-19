<?php
include_once('system/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$nome = $_POST['nome'];
$data = $_POST['datac'];
$dso = $_POST['dso'];
$stage = $_POST['stage'];
$target = $_POST['target'];
$target1 = $_POST['target1'];
$shots = $_POST['shots'];

$extensao = strtolower(substr($_FILES['imagem']['name'], -4));
$novo_nome = date('d-m-Y-H-i-s') . $extensao;
$diretorio = DIR_APPLICATION . '/asset/img/';

if(move_uploaded_file($_FILES['imagem']['tmp_name'], $diretorio.$novo_nome)) {
    $imagesrc = "asset/img/".$novo_nome;
} else {
    $imagesrc = "asset/img/padrao.png";
}

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao`  WHERE `nomeevento` = '$nome'");

if($consulta->num_rows) {
     header("Location: /competicao.php?msg=1");

     die();  
} else {

    $banco->query("INSERT INTO `" . DB_PREFIX . "competicao` SET `nomeevento` = '$nome', `dataevento` = '$data', `dso_id` = '$dso', `stage` = '$stage', `target` = '$target', `target1` = '$target1', `shots` = '$shots', `image` = '$imagesrc'");
    header("Location: /competicao.php?msg=2");

    die(); 
}

} else {
    
    echo "ERROR";
}
?>