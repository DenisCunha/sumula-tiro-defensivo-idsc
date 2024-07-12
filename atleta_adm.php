<?php
include_once('system/config.php');

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$nome = $_POST['nome'];

$divisao = $_POST['divisao'];

$user_id = $_POST['user_id'];

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "atletas`  WHERE `nome` = '$nome' AND `divisao_id` = '$divisao' AND `user_id` = '$user_id'");

if($consulta->num_rows) {
     header("Location: /atleta.php?msg=1");

     die();  
} else {
    $banco->query("INSERT INTO `" . DB_PREFIX . "atletas` SET `nome` = '$nome', `divisao_id` = '$divisao', `user_id` = '$user_id'");
     header("Location: /atleta.php?msg=2");

     die(); 
}

} else {

    echo "ERROR";
}
?>