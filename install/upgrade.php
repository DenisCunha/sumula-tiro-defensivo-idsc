<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);


if (file_exists('../system/config.php')) {
	if (filesize('../system/config.php') > 0) {
		$upgrade = true;
	} else  {
    $upgrade = false;
  }
} else {
  header("Location: /install/install.php");
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