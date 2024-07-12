<?php
include_once('system/config.php');
session_start();
header("Content-type: application/json; charset=utf-8");

$div = $_GET['divisao_id'];

$user_id = $_SESSION["user_id"];

$json = array();

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "atletas` WHERE `divisao_id` = '$div' AND `user_id` = '$user_id' ORDER BY `nome`");

if($consulta->num_rows) {

  $json = array(
 'zone' => $consulta->rows
  );
}

echo json_encode($json);
?>