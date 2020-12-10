<?php

class Model
{
    private $handle;

    public function __construct()
    {
        $db = BddAcces::getInstance();
        $this->handle = $db->getHandle();
    }

    public function addNewMovie($title, $img, $year)
    {
        try
        {
            $request = $this->handle->prepare('INSERT INTO movies (movies_name, movies_url, movies_release)
            VALUES (?, ?, ?)');

            $request->execute(array(
                $title,
                $img,
                $year
            ));
        }
        catch (PDOException $e)
        {
            var_dump('erreur lors de la requête SQL : ' . $e->getMessage());
        }
    }

    public function getAllMovies()
    {
        try
        {
            $request = $this->handle->prepare('SELECT * FROM movies');
            $request->execute();

            $data = $request->fetchAll();
            return $data;
        }
        catch (PDOException $e)
        {
            var_dump('erreur lors de la requête SQL : ' . $e->getMessage());
        }
    }
}