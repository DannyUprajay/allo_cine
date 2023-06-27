<?php

namespace App\Service;

use PDO;
use App\Models\Movie;

class PDOService
{
    private PDO $pdo;

    private string $dsn = 'mysql:host=127.0.0.1:3306;dbname=allo_cine';
    private string $user = 'root';
    private string $pwd = '';

    public function __construct()
    {
        $this->pdo = new PDO($this->dsn, $this->user, $this->pwd);
    }

  
    public function getPDO(): PDO
    {
        return $this->pdo;
    }

    public function getDsn(): string
    {
        return $this->dsn;
    }

    public function getUser(): string
    {
        return $this->user;
    }

    public function getPwd(): string
    {
        return $this->pwd;
    }
    


    // public function findAllMovies(){
    //     return $this->pdo->query("SELECT * FROM movie")->fetchAll();
    // }

    public function findAll(): Movie
    {
        return $this->pdo->query("SELECT * FROM movie")->fetchObject(Movie::class);
    }
}
