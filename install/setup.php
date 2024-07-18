<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $options['db_driver']   = $_POST['db_driver'];
  $options['db_hostname'] = $_POST['db_hostname'];
  $options['db_username'] = $_POST['db_username'];
  $options['db_password'] = $_POST['db_password'];
  $options['db_database'] = $_POST['db_database'];
  $options['db_port']     = $_POST['db_port'];
  $options['db_prefix']   = $_POST['db_prefix'];
  
  $name = strtolower($_POST['username']);
  $pass = md5($_POST['password']);

  instalacao($options, $name, $pass, $install);
}

function instalacao($options, $name, $pass, $install) {
    create_file($options);

    $mysqli = new mysqli($_POST['db_hostname'], $_POST['db_username'], $_POST['db_password'], $_POST['db_database']);
    
    if ($mysqli->connect_errno) {
    die($mysqli->connect_error);
    $error['conect'] = ' ERROR = ' . $mysqli->connect_error ;
    exit();
    } else {
    
    $mysqli->query("INSERT INTO `usuario` SET `login` = '$name', `senha` = '$pass', `nivel` = '1' ");
    
    $mysqli->close();


    header("Location: /install");
    }
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