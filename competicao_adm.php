<?php
include_once('system/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$evento_id = $_POST['evento_id'];

$nome = $_POST['nome'];
$data = $_POST['datac'];
$dso = $_POST['dso'];

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao`  WHERE `nomeevento` = '$nome'");

if($consulta->num_rows) {
     header("Location: /competicao.php?msg=1");

     die();  
} else {
    $banco->query("INSERT INTO `" . DB_PREFIX . "competicao` SET `evento_id` = '$evento_id', `nomeevento` = '$nome', `dataevento` = '$data', `dso_id` = '$dso'");
     header("Location: /competicao.php?msg=2");

     die(); 
}

} else {
    
    echo "ERROR";
}
?>