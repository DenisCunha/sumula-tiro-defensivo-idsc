<?php
include_once('system/config.php');
session_start();
header("Content-type: application/json; charset=utf-8");

$div = $_GET['evento_id'];

$user_id = $_SESSION["user_id"];

$json = array();
$response = array();

$consulta  = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao` WHERE `evento_id` = '$div' AND `dso_id` = '$user_id'");

if($consulta->num_rows) {

  for($i = 1; $i <= (int)$consulta->row['stage']; $i++) {
    $response[] = array('id' => $i, 'nome' => "Pista " .$i);
  }

  $json = array(

 'zone' => $response
  );
}

echo json_encode($json);
?>