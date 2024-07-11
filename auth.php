<?php
session_start();

if(!isset($_SESSION["user_id"]) || !isset($_SESSION["login"]) || !isset($_SESSION["nivel"])) {

header("Location: /login.php");
exit;

} 
?>