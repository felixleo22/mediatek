<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
  $app->get('/users', function (Request $request, Response $response, array $args) {
    // TODO get info of user
    $response->getBody()->write("{test}");
    return $response;
  });
};