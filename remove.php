<?php
include_once('system/config.php');

    if(isset($_GET['id']) && $_GET['id'] > 0) {
    $id = $_GET['id'];
    $user_id = $_GET['user_id'];
    $banco->query("DELETE FROM `" . DB_PREFIX . "atletas` WHERE `id` = '$id' AND `user_id` = '$user_id'");
    $banco->query("DELETE FROM `" . DB_PREFIX . "total_prova` WHERE `nome_id` = '$id'");
    $banco->query("DELETE FROM `" . DB_PREFIX . "pistas` WHERE `nome` = '$id'");
    
    header("Location: /atleta.php?msg=3");

    die();
    }
    
    if(isset($_GET['evento_id']) && $_GET['evento_id'] > 0) {
    $id = $_GET['evento_id'];
    $banco->query("DELETE FROM `" . DB_PREFIX . "competicao` WHERE `evento_id` = '$id'");
    header("Location: /competicao.php?msg=3");

    die();
    }
    
    if(isset($_GET['divisao_id']) && $_GET['divisao_id'] > 0) {
    $id = $_GET['divisao_id'];
    $banco->query("DELETE FROM `" . DB_PREFIX . "divisao` WHERE `divisao_id` = '$id'");
    header("Location: /divisao.php?msg=3");

    die();
    }
?>