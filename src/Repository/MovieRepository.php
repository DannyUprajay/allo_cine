<?php

namespace App\Repository;

use App\Service\PDOService;
use App\Models\Movie;
use PDO;
class Movie_repository
{
    private PDOService $PDOService;
    private string $queryAll ="SELECT * FROM movie";


    public function __construct()
    {
        $this->PDOService = new PDOService();
    }



    public function findAllMovies():array
    {
        return $this->PDOService->getPDO()->query($this->queryAll)->fetchAll();
    }

    public function findOne():Movie
    {
        return $this->PDOService->getPDO()->query($this->queryAll)->fetchObject(Movie::class);
    }

    public function findAll():array
    {
        return $this->PDOService->getPDO()->query($this->queryAll)->fetchAll(PDO::FETCH_CLASS, Movie::class);
    }



}