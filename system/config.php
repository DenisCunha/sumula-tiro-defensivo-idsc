<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

include_once('registry.php');
include_once('db.php');
include_once('db/mysqli.php');
require_once('helper/general.php');
require_once('helper/utf8.php');

define('DIR_APPLICATION', '/var/www/html/idsc');

// DB
define('DB_DRIVER', 'mysqli');
define('DB_HOSTNAME', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '123456@@');
define('DB_DATABASE', 'idsc');
define('DB_PORT', '3306');
define('DB_PREFIX', '');

$banco = new DB(DB_DRIVER, DB_HOSTNAME, DB_USERNAME, DB_PASSWORD, DB_DATABASE, DB_PORT);
?>