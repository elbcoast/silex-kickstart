<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

require_once __DIR__.'/../app/config/config.php';
require_once __DIR__.'/../app/controller.php';

// definitions

$app->run();