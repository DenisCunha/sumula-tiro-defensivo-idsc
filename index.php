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
$resultado[$row['divisao_id']] = $banco->query("SELECT * FROM `" . DB_PREFIX . "total_prova` WHERE `divisao_id` = '" . $row['divisao_id'] . "' AND `competicao_id` = '" . $competicao_id . "' ORDER BY `soma` ASC");
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
.red {color: #870000;}
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
    <?php foreach ($result[$row['divisao_id']]->rows as $row[$row['divisao_id']]) { 
    if($row[$row['divisao_id']]['stage'] == $i) { 
     $exibe = true;
    } else {
     $exibe = false;
    }
    }
   ?>
<div class="content" style="<?php if($exibe) { } else { echo 'display:none;';} ?>">
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
                <td><?php echo $nome->row['nome']; ?></td>
                <?php if($row[$row['divisao_id']]['dq']) { $dq = true;?>
                <td><span class="red">DQ Desclassificado</span></td>
                <td></td>
                <?php } else { $dq = false; ?>
                <td><?php echo $row[$row['divisao_id']]['timer']; ?></td>
                <td><?php echo $row[$row['divisao_id']]['total']; ?></td>
                <?php } ?>
            </tr>
            <?php } ?>
             
            <?php }  ?>

        </tbody>
    </table>

</div>
<?php }  ?>
<hr><br>
<h3>Resultado Final <?php echo $divisaonome[$row['divisao_id']]->row['nome']; ?></h3>
<br>
<?php if($resultado[$row['divisao_id']]->num_rows) { ?>
<div class="content">
    <table class="rTable2">
        <thead> <tr style="background:<?php echo $cores[$row['divisao_id']]; ?>;color:#fff;"><th colspan="12">Resultado Prova - <?php echo $divisaonome[$row['divisao_id']]->row['nome']; ?></th></tr>
            <tr>
<?php foreach ($resultado[$row['divisao_id']]->rows as $row) { 
$p1 = $row['p1'];
$p2 = $row['p2'];
$p3 = $row['p3'];
$p4 = $row['p4'];
$p5 = $row['p5'];
$p6 = $row['p6'];
$p7 = $row['p7'];
$p8 = $row['p8'];
$p9 = $row['p9'];
$p10 = $row['p10'];
 } ?>
                <th>Nome </th>
                <th style="<?php if($p1 > 0) { } else { echo 'display:none;';} ?>">P1</th>
                <th style="<?php if($p2 > 0) { } else { echo 'display:none;';} ?>">P2</th>
                <th style="<?php if($p3 > 0) { } else { echo 'display:none;';} ?>">P3</th>
                <th style="<?php if($p4 > 0) { } else { echo 'display:none;';} ?>">P4</th>
                <th style="<?php if($p5 > 0) { } else { echo 'display:none;';} ?>">P5</th>
                <th style="<?php if($p6 > 0) { } else { echo 'display:none;';} ?>">P6</th>
                <th style="<?php if($p7 > 0) { } else { echo 'display:none;';} ?>">P7</th>
                <th style="<?php if($p8 > 0) { } else { echo 'display:none;';} ?>">P8</th>
                <th style="<?php if($p9 > 0) { } else { echo 'display:none;';} ?>">P9</th>
                <th style="<?php if($p10 > 0) { } else { echo 'display:none;';} ?>">P10</th>
                <th>Tempo Total</th>
            </tr>
        </thead>

        <tbody>
            
            <?php foreach ($resultado[$row['divisao_id']]->rows as $row2) { ?>
            
            <?php if($row2['divisao_id'] == $row['divisao_id']) { ?>
            
            <?php $nome = $banco->query("SELECT * FROM `" . DB_PREFIX . "atletas` WHERE `id` = '" . $row2['nome_id'] . "' "); ?>
            <tr>
                <td><?php echo $nome->row['nome']; ?></td>
                <?php if($dq) {  $des = "DQ: Desclassificado"; ?>    
                <td style="<?php if($p1 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p2 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p3 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p4 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p5 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p6 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p7 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p8 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p9 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <td style="<?php if($p10 > 0) { } else { echo 'display:none;';} ?>"><span class="red"><?php echo $des; ?></span></td>
                <?php } else { ?>
                <td style="<?php if($p1 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p1'] ; ?></td>
                <td style="<?php if($p2 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p2'] ; ?></td>
                <td style="<?php if($p3 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p3'] ; ?></td>
                <td style="<?php if($p4 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p4'] ; ?></td>
                <td style="<?php if($p5 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p5'] ; ?></td>
                <td style="<?php if($p6 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p6'] ; ?></td>
                <td style="<?php if($p7 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p7'] ; ?></td>
                <td style="<?php if($p8 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p8'] ; ?></td>
                <td style="<?php if($p9 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p9'] ; ?></td>
                <td style="<?php if($p10 > 0) { } else { echo 'display:none;';} ?>"><?php echo $row2['p10'] ; ?></td>
                <td><?php echo $row2['soma'] ; ?></td>
                <?php } ?>
            </tr>
            <?php } ?>
             
            <?php }  ?>

        </tbody>
    </table>

</div>

<br>
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