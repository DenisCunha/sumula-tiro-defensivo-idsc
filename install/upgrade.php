<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


if (file_exists('../system/config.php')) {
	if (filesize('../system/config.php') > 0) {
		$upgrade = true;
	} else  {
    $upgrade = false;
  }
}

// Configuration
if (is_file('../system/config.php')) {
	require_once('../system/config.php');
}

$error = array();

if (!is_writable('../system/config.php')) {
  $error['config'] = 'Aviso: system/config.php precisa ser gravável para que o Sistema seja instalado!';
}

if (phpversion() < '5.6') {
  $error['php'] = 'Aviso: Você precisa usar PHP5.6 ou superior para que o Sistema funcione!';
}

if (!ini_get('file_uploads')) {
  $error['upload'] = 'Aviso: file_uploads precisa estar habilitado!';
}

if (ini_get('session.auto_start')) {
  $error['session'] = 'Aviso: O sistema não funcionará com session.auto_start habilitado!';
}

if (!array_filter(array('mysql', 'mysqli', 'pdo', 'pgsql'), 'extension_loaded')) {
  $error['bd'] = 'Aviso: Uma extensão de banco de dados precisa ser carregada no php.ini para que o OpenCart funcione!';
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Competição IDSC - Atualização</title>
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</head>
<body class="bg-light">
<div class="container">
<?php if($upgrade) { ?> 
<h3>Sistema Atualizado</h3>
<script type="text/javascript">
setTimeout(() => {
 window.location.href = "/";
}, "3000");
</script>
<?php } else { ?>
<br>
<?php if(isset($error) && $error) { ?>
  <fieldset>
<legend>Corrija os erros apresentados para prosseguir com a instalação do sistema!</legend>
</fieldset>
  <?php foreach ($error as $erro => $vl) { ?>
  <?php  if (!empty($vl)) { ?>
  <div class="alert alert-danger" role="alert"><?php echo $erro . ': '. $vl; ?></div><br>
  <?php } ?>
  <?php } ?>
<?php } else { ?>

<?php } ?>
<?php } ?>
<br>
<center><span><b>Versão:</b> 1.1.0.0 - <b>Data:</b> 11/07/2024</span></center>
<br><br>
  </div>
</body>
</html>