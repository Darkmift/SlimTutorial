<?php

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
//$app->get('/[{name}]', function (Request $request, Response $response, array $args) {
//    // Sample log message
//    $this->logger->info("Slim-Skeleton '/' route");
//
//    // Render index view
//    return $this->renderer->render($response, 'index.phtml', $args);
//});
//$app->get('/home', function() {
//    return 'HomeBoy';
//});
require_once '../vendor/autoload.php';


//echo $twig->render('twig.html', array('name' => 'Fabien'));

$app->get('/home', function($request, $response) {
    return $this->renderer->render($response,'views/home.twig');
//    $loader = new Twig_Loader_Filesystem(__DIR__ . '/../templates/views');
//    $twig = new Twig_Environment($loader, array(
//        'cache' => false,
//    ));
//    return $twig->render('home.twig', array('name' => 'Fabien'));
});
