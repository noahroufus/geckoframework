<?php namespace Gecko;

// Enable error
ini_set("display_errors", "1");

// Global definitions
define("DS", DIRECTORY_SEPARATOR);
define("SYS_ROOT", ".." . DS);
define("APP_ROOT", SYS_ROOT . "apps" . DS);

// Require autoloader
require_once SYS_ROOT . "vendor" . DS . "autoload.php";

// Run dispatcher
Core\Router::$dispatch = new Core\Dispatch;
Core\Router::$dispatch->Request($_SERVER);

?>