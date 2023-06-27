<?php

namespace App\Service;

use PDO;

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

    public function findAllMovies(){
        return $this->pdo->query("SELECT * FROM movie")->fetchAll();
    }
}
