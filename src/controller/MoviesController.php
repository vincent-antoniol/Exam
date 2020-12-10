<?php

class AllMoviesController
{
    private $title;
    private $model;
    private $moviesList;

    public function __construct()
    {
        $this->title = "Liste de mes films";
        $this->model = new Model();
    }

    function manage()
    {
        $this->moviesList = $this->model->getAllMovies();
        include(__DIR__ . "./../view/movies.php");
    }
}