<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;

require __DIR__ . '/../test/vendor/autoload.php';

$app = AppFactory::create();

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/dividir', function (Request $request, Response $response, $args) {
    $queryParams = $request->getQueryParams();
    $numerador = isset($queryParams['numerador']) ? (float)$queryParams['numerador'] : 0;
    $denominador = isset($queryParams['denominador']) ? (float)$queryParams['denominador'] : 1;

    if ($denominador == 0) {
        $response->getBody()->write("Error: División por cero no permitida.");
        return $response->withStatus(400);
    }

    $resultado = $numerador / $denominador;
    $response->getBody()->write("Resultado: " . $resultado);
    return $response;
});

$app->run();
