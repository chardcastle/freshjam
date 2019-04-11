<?php

use Slim\Http\Request;
use Slim\Http\Response;
use App\Actions;
// Routes

$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");



    // Render index view
    return $this->renderer->render($response, 'index.phtml', [
        'operators' => $this->get('settings')['view_operators']
    ]);
});

$app->post('/calculate', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Calculating with vars", [$request->getParsedBody()]);
    return $response->withJson($request->getParsedBody());
});

$app->post('/add', AddAction);
$app->post('/subtract', 'SubtractAction');
$app->post('/divide', 'DivideAction');
$app->post('/multiply', 'MultiplyAction');