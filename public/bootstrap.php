<?php
#define("CONTENT_MODEL", "WildfireContent");
#define("URL_MAP_MODEL", "WildfireUrlMap");

require_once 'vendor/autoload.php';
AutoLoader::bootstrap();
require_once 'app/config/environment.php';
AutoLoader::run_application();
?>