<?php

use Slim\App;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

return function (App $app) {
  $app->get('/users/${username}', function(Request $request, Response $response, $args) {
    $username = $args['username'];
    // TODO get info of user
    $response->getBody()->write("{$username}");
    return $response;
  });
};