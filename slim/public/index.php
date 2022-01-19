<?php

use Slim\Factory\AppFactory;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();
$app->addErrorMiddleware(true,true,false);

$indexRouter = require __DIR__ . '/../routers/index.php';
$indexRouter($app);

$usersRouter = require __DIR__ . '/../routers/users.php';
$usersRouter($app);

$app->run();