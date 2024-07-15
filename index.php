<?php
session_start();

// Configuration
if (is_file('system/config.php')) {
	require_once('system/config.php');
}

// Install
if (!defined('DIR_APPLICATION')) {
	header('Location: install/index.php');
	exit;
}

if(isset($_GET['competicao_id'])) {
    $competicao_id = $_GET['competicao_id'];
  } else {
    $competicao_id = 0;  
}

$competition = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao`  WHERE 1 ORDER BY `evento_id` DESC");

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
.imgs {padding:10px;display:inline-block;border:1px solid #fff;}
.imgs :hover{border:1px solid #ddd;}
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
<h3>Escolher a Competição</h3>

<br>
<center>
<?php foreach ($competition->rows as $row) { ?>
<a href="?competicao_id=<?php echo $row['evento_id']; ?>" class="imgs">
  <img src="<?php echo $row['image']; ?>" alt="<?php echo $row['nomeevento']; ?>"  /><br>
  <?php echo $row['nomeevento']; ?><br>
  <?php echo $row['dataevento']; ?>
</a> 
<?php } ?>
</center>

<br>
<center><span><b>Versão:</b> 1.0.0.0 - <b>Data:</b> 11/07/2024</span></center>
</body>
</html>