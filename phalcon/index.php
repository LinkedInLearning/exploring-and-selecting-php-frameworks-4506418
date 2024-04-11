<?php

use Phalcon\Autoload\Loader;

define('BASE_PATH', dirname(__DIR__ . '/..'));
define('APP_PATH', BASE_PATH . '/app');

$loader = new Loader();
$loader->setDirectories(
  [
    APP_PATH . '/controllers/',
    APP_PATH . '/models/',
  ]
);


$loader->register();
