<?php
if (file_exists('../system/config.php')) {
	if (filesize('../system/config.php') > 0) {
		$install = true;
	} else  {
    $install = false;
  }
}

$options['db_driver'] = 'mysqli';
$options['db_hostname'] = 'localhost';
$options['db_username'] = 'root';
$options['db_password'] = '123456@@';
$options['db_database'] = 'idsc';
$options['db_port'] = '3306';
$options['db_prefix'] = '';

if (!$install) {
  create_file($options);
}

function create_file($options) {
	$output  = "<?php" . "\n";

	$output .= "ini_set('display_errors', 1);" . "\n";
	$output .= "error_reporting(E_ALL);" . "\n\n";

  $output .= "// INCLUDES" . "\n";
  $output .= "include_once('registry.php');" . "\n";
  $output .= "include_once('db.php');" . "\n";
  $output .= "include_once('db/mysqli.php');" . "\n";
  $output .= "require_once('helper/general.php');" . "\n";
  $output .= "require_once('helper/utf8.php');" . "\n\n";

  $diretorio = str_replace("/install", "", getcwd());
	$output .= "// DIR APPLICATION" . "\n";
	$output .= "define(\"DIR_APPLICATION\", \"" . $diretorio . "\");" . "\n\n";
	
	$output .= "// DB" . "\n";
	$output .= "define(\"DB_DRIVER\", \"" . addslashes($options['db_driver']) . "\");" . "\n";
	$output .= "define(\"DB_HOSTNAME\", \"" . addslashes($options['db_hostname']) . "\");" . "\n";
  $output .= "define(\"DB_USERNAME\", \"" . addslashes($options['db_username']) . "\");" . "\n";
  $output .= "define(\"DB_PASSWORD\", \"" . addslashes($options['db_password']) . "\");" . "\n";
  $output .= "define(\"DB_DATABASE\", \"" . addslashes($options['db_database']) . "\");" . "\n";
  $output .= "define(\"DB_PORT\", \"" . addslashes($options['db_port']) . "\");" . "\n";
  $output .= "define(\"DB_PREFIX\", \"" . addslashes($options['db_prefix']) . "\");" . "\n\n";

  $output .= '$banco = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);' . "\n";

	$output .= "?>";

	$file = fopen('../system/config.php', 'w');

	fwrite($file, $output);

	fclose($file);
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Pista Competição IDSC - Instalação</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="asset/style.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
<?php if($install) { ?> 
<h3>Sistema já instalado</h3>
<script type="text/javascript">
setTimeout(() => {
 // window.location.href = "/";
}, "3000");
</script>
<?php } ?>
<br>
<center><span><b>Versão:</b> 1.0.0.0 - <b>Data:</b> 11/07/2024</span></center>
</body>
</html>