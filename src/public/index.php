<?php

use DI\Container;
use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$indexRouter = require __DIR__ . '/../app/Routers/index.php';
$indexRouter($app);

//$usersRouter = require __DIR__ . '/../app/Routers/users.php';
//$usersRouter($app);

$app->run();