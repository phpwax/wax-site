<?php
define("WAX_START_TIME",microtime(TRUE));
define("WAX_START_MEMORY",memory_get_usage());
define('WAX_ROOT', dirname(__DIR__)."/" );
require_once dirname(__DIR__)."/bootstrap.php";
?>