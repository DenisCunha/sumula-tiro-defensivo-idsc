<?php
include_once('system/config.php');
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {

$usuario = $_POST['usuario'];

$senha = md5($_POST['senha']);

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "usuarios`  WHERE `login` = '$usuario' AND `senha` = '$senha'");

if($consulta->num_rows) {
        $_SESSION["user_id"] = $consulta->row['user_id'];
        $_SESSION["login"] = $consulta->row['login'];
        $_SESSION["nivel"] = $consulta->row['nivel'];

	    header("Location: /painel.php");
} else {

        header("Location: /login.php?msg=1"); 
}   

} else {
    
    echo "ERROR";
}

?>