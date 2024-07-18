<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include_once('../system/db.php');
include_once('../system/db/mysqli.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $options['db_driver']   = $_POST['db_driver'];
  $options['db_hostname'] = $_POST['db_hostname'];
  $options['db_username'] = $_POST['db_username'];
  $options['db_password'] = $_POST['db_password'];
  $options['db_database'] = $_POST['db_database'];
  $options['db_port']     = $_POST['db_port'];
  $options['db_prefix']   = $_POST['db_prefix'];
  $options['username']    = strtolower($_POST['username']);
  $options['password']    = md5($_POST['password']);


  instalacao($options);
}

function instalacao($options) {
    database($options);
    create_file($options);
    header("Location: /install");   
}

function database($options) {
  $db = new DB($options['db_driver'], $options['db_hostname'], $options['db_username'], $options['db_password'], $options['db_database']);

  $file = 'idsc.sql';

  if (!file_exists($file)) {
    exit('Could not load sql file: ' . $file);
  }

  $lines = file($file);

  if ($lines) {
    $sql = '';

    foreach($lines as $line) {
      if ($line && (substr($line, 0, 2) != '--') && (substr($line, 0, 1) != '#')) {
        $sql .= $line;

        if (preg_match('/;\s*$/', $line)) { 
          $sql = str_replace("CREATE TABLE IF NOT EXISTS `", "CREATE TABLE IF NOT EXISTS `" . $options['db_prefix'], $sql);
          $sql = str_replace("INSERT INTO `", "INSERT INTO `" . $options['db_prefix'], $sql);
          $sql = str_replace("ALTER TABLE `", "ALTER TABLE `" . $options['db_prefix'], $sql);

          $db->query($sql);

          $sql = '';
        }
      }
    }

    $db->query("SET CHARACTER SET utf8");

    $db->query("SET @@session.sql_mode = 'MYSQL40'");
    $db->query("INSERT INTO `" . $options['db_prefix'] . "usuarios` SET `login` = '" .  $options['username'] . "', `senha` = '" . $options['password'] . "', `nivel` = '1'");
  }

}

function create_file($options) {
	$output  = "<?php" . "\n";
  $output .= "include_once('error.php');" . "\n\n";

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