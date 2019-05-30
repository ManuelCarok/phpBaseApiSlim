<?php

require_once 'vendor/autoload.php';
$app = new \Slim\App;

$app->get("/",function() use($app){
	echo 'Hola Mundo';
});

$app->get("/adios",function() use($app){
	echo 'Adios Mundo';
});

$app->map(['GET', 'POST'], '/books', function ($request, $response, $args) {
    // Create new book or list all book
	echo 'books';
});

$app->run();