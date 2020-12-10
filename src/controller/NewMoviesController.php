<?php

class NewMoviesController
{
    private $title;
    private $model;

    public function __construct()
    {
        $this->title = "Ajouter un film";
        $this->model = new Model();
    }

    function manage()
    {
        if(isset($_POST['title']) && $_POST['title'] != '' && $_POST['img'] && $_POST['img'] != '' && $_POST['year'] && $_POST['year'] != '')
        {
            
            $this->model->addNewMovie($_POST['title'], $_POST['img'], $_POST['year']);
        }
        include(__DIR__ . "./../view/newMovies.php");
    }
}