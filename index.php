<?php
session_start();
include_once('system/config.php');

if(isset($_GET['clube_id'])) {
    $competicao_id = $_GET['clube_id'];  
  } else {
    $competicao_id = 0;  
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Competição IDSC - Resultado Competição</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="asset/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<style>
.imgs {padding:10px;}
.imgs :hover{border:1px solid #ddd;  }
</style>
</head>
<body>
<?php if(isset($_SESSION["login"])) { ?>
<div style="padding:10px;">
olá, <?php echo strtoupper($_SESSION["login"]);?> <a href="/painel.php" class="btn btn-warning" ><i class="bi bi-window"></i> Menu</a>
</div>
<br>
<?php } ?>
<hr>

<br>
<h3>Escolher o Clube</h3>

<br>
<center>
<a href="?clube_id=4" class="imgs"><img src="asset/img/logoclube.png" alt="Nome clube"  /></a>
</center>

<br>
<center><span><b>Versão:</b> 1.0.0.0 - <b>Data:</b> 11/07/2024</span></center>
</body>
</html>