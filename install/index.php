<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


if (file_exists('../system/config.php')) {
	if (filesize('../system/config.php') > 0) {
		$install = true;
	} else  {
    $install = false;
  }
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
<title>Pista Competição IDSC - Instalação</title>
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
<?php if($install) { ?> 
<h3>Sistema já instalado</h3>
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

<form action="/install/setup.php" method="post" class="form-inline" autocomplete="off" enctype="multipart/form-data">
<div class="row form-row">

<fieldset>
<legend>Informações do Banco de dados</legend>
<br>
<div class="col">
<label>DB Drive: </label><input type="text" name="db_driver"  class="form-control" value="mysqli" required>
</div>

<div class="col">
<label>Hostname: </label><input type="text" name="db_hostname"  class="form-control" value="localhost" required>
</div>

<div class="col">
<label>DB Username: </label><input type="text" name="db_username"  class="form-control" value="" required>
</div>

<div class="col">
<label>DB Password: </label><input type="text" name="db_password"  class="form-control" value="" required>
</div>

<div class="col">
<label>DB Name: </label><input type="text" name="db_database"  class="form-control" value="" required>
</div>

<div class="col">
<label>DB Port: </label><input type="text" name="db_port"  class="form-control" value="3306" required>
</div>

<div class="col">
<label>DB Prefix: </label><input type="text" name="db_prefix"  class="form-control" value="">
</div>


</fieldset>

<fieldset>
<legend>Informações do usuário admin</legend>
<br>
<div class="col">
<label>Usuário: </label><input type="text" name="username"  class="form-control" value="" required>
</div>
<div class="col">
<label>Senha: </label><input type="text" name="password"  class="form-control" value="" required>
</div>

<br>
<div class="d-grid gap-2">
<input class="btn btn-primary btn-lg" type="submit" value="Enviar">
</div>
<br>
</fieldset>    
</div>


</form>
<?php } ?>
<?php } ?>
<br>
<center><span><b>Versão:</b> 1.0.0.0 - <b>Data:</b> 11/07/2024</span></center>
<br><br>
  </div>
</body>
</html>