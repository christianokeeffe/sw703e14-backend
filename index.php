<?php
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();


$app = new \Slim\Slim();


// GET route
$app->get('/hello/:name/:lastname', function ($name, $lastname) {
    echo json_encode("Hello, $name, $lastname");
});


$app->run();
