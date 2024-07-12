<?php
include_once('system/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$divisao_id = $_POST['divisao_id'];

$nome = $_POST['nome'];

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "divisao`  WHERE `nome` = '$nome'");

if($consulta->num_rows) {
     header("Location: /divisao.php?msg=1");

     die();  
} else {
    $banco->query("INSERT INTO `" . DB_PREFIX . "divisao` SET `divisao_id` = '$divisao_id', `nome` = '$nome'");
     header("Location: /divisao.php?msg=2");

     die(); 
}

} else {
    
    echo "ERROR";
}
?>