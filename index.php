<?php

require('src/controller/HomeController.php');
require('src/controller/NewMoviesController.php');
require('src/controller/MoviesController.php');
require('src/model/Model.php');
require('src/BddAcces.php');

$page = filter_input(INPUT_GET, "page");

$route = array(
    "home" => HomeController::class,
    "newMovies" => NewMoviesController::class,    
    "movies" => AllMoviesController::class
);

foreach($route as $routeValue => $className)
{
    if ($page === $routeValue)
    {
        $controller = new $className;
        $controller->manage();
        break;
    }
}

if(!isset($controller))
{
    $controller = new HomeController();
    $controller->manage();
}