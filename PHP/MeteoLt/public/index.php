<?php

define('ROOT_PATH', dirname(__DIR__));
define("METEO_API", "https://api.meteo.lt/v1/places");
ini_set('error_reporting', E_ALL);

ini_set('log_errors', 1);
ini_set('error_log', sprintf('%s/logs/error-%s.log', ROOT_PATH, date('Y-m-d')));

ob_start();

require_once ROOT_PATH . '/vendor/autoload.php';

require_once ROOT_PATH . '/src/app.php';

require_once ROOT_PATH . '/views/index.phtml';
