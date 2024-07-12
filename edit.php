<?php
session_start();
include_once('system/config.php');

    if(isset($_GET['atleta_id']) && $_GET['atleta_id'] > 0) {
    $id = $_GET['atleta_id'];
    $user_id = $_GET['user_id'];
    $result = $banco->query("SELECT * FROM `" . DB_PREFIX . "atletas` WHERE `id` = '$id'");
    

    if ($result->num_rows) {
    $act = true;
    $_SESSION["camponome"] = $result->row['nome'];
    $_SESSION["id"] = $id;
    $_SESSION["tipo"] = "atleta";

    header("Location: /edit.php");
    } else {
    $act = false;
    }

    die();
    }
    
    if(isset($_GET['divisao_id']) && $_GET['divisao_id'] > 0) {
    $id = $_GET['divisao_id'];
    $result = $banco->query("SELECT * FROM `" . DB_PREFIX . "divisao` WHERE `divisao_id` = '$id'");

    if ($result->num_rows) {
    $act = true;
    $_SESSION["camponome"] = $result->row['nome'];
    $_SESSION["id"] = $id;
    $_SESSION["tipo"] = "divisao";

    header("Location: /edit.php");
    } else {
    $act = false;
    }

    die();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if($_POST['tipo'] == "atleta") {    
    $nome = $_POST['nome'];
    $id = $_POST['id'];
    $banco->query("UPDATE `" . DB_PREFIX . "atletas` SET `nome` = '$nome' WHERE `id` = '$id'");
    header("Location: /atleta.php?msg=4");

     die(); 
    }

    if($_POST['tipo'] == "divisao") {    
        $nome = $_POST['nome'];
        $id = $_POST['id'];
        $banco->query("UPDATE `" . DB_PREFIX . "divisao` SET `nome` = '$nome' WHERE `divisao_id` = '$id'");
        header("Location: /divisao.php?msg=4");
    
         die(); 
        }

    }
    include_once('system/html.php');   
?>