<?php
define("WAX_START_TIME",microtime(TRUE));
define("WAX_START_MEMORY",memory_get_usage());
require_once dirname(__FILE__).'/../app/config/environment.php';
$app = new Wax\Core\Application;
$app->run();