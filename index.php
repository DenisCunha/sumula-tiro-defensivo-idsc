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
$stages = $banco->query("SELECT * FROM `" . DB_PREFIX . "competicao`  WHERE `evento_id`= '" . $competicao_id . "'");
$divisao = $banco->query("SELECT * FROM `" . DB_PREFIX . "divisao`  WHERE 1 ORDER BY `nome` ASC");

foreach ($divisao->rows as $row) {
$result[$row['divisao_id']] = $banco->query("SELECT * FROM `" . DB_PREFIX . "pistas`  WHERE `divisao` = '" . $row['divisao_id'] . "' AND `competicao_id` = '" . $competicao_id . "' ORDER BY `total` ASC");
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
<?php  if($competicao_id) { ?>
  <?php 
  function randomHexColor() {
  $letters = '0123456789ABCDEF';
  $color = '#';
  for ($i = 0; $i < 6; $i++) {
      $color .= $letters[rand(0, 15)];
  }
  return $color;
}
$cores = array();
for ($i = 0; $i < 25; $i++) {
    $cores[] = randomHexColor();
}
?>
<?php foreach ($divisao->rows as $row) { ?>
<?php if($result[$row['divisao_id']]->num_rows) { ?>
  <?php $divisaonome[$row['divisao_id']] = $banco->query("SELECT * FROM `" . DB_PREFIX . "divisao`  WHERE  `divisao_id` = '" . $row['divisao_id'] ."' "); ?>
  
  <?php for ($i =1; $i <= $stages->row['stage']; $i ++) { ?>
<div class="content">
    <table class="rTable">
        <thead> <tr style="background:<?php echo $cores[$row['divisao_id']]; ?>;color:#fff;"><th colspan="3">Pista <?php echo $i .' - ' . $divisaonome[$row['divisao_id']]->row['nome']; ?></th></tr>
            <tr>

                <th>Nome </th>
                <th>Tempo Timer</th>
                <th>Tempo Total</th>
            </tr>
        </thead>

        <tbody>
            
            <?php foreach ($result[$row['divisao_id']]->rows as $row[$row['divisao_id']]) { ?>
            
            <?php if($row[$row['divisao_id']]['stage'] == $i) { ?>
            
            <?php $nome = $banco->query("SELECT * FROM `" . DB_PREFIX . "atletas` WHERE `id` = '" . $row[$row['divisao_id']]['nome'] . "' "); ?>
            <tr>
                <td><?php echo $nome->row['nome']; ?> <?php if($row[$row['divisao_id']]['dq']) { echo "<span class='dq'>*</span>"; } ?></td>
                <td><?php echo $row[$row['divisao_id']]['timer']; ?></td>
                <td><?php echo $row[$row['divisao_id']]['total']; ?></td>
            </tr>
            <?php } ?>
             
            <?php }  ?>

        </tbody>
    </table>

</div>
<?php }  ?>

<br>
<?php }  ?>

<?php } ?>
<?php } else { ?>
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
<?php } ?>
<br>
<center><span><?php include_once('system/version.php'); ?></span></center>
</body>
</html>