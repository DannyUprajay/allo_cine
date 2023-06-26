<?php

namespace App\Service;

use PDO;

class PDOService
{
    protected PDO $pdo;

    private string $dsn = 'xampp:host=127.0.0.1:3306;dbname=allo_cine';
    private string $user = 'root';
    private string $pwd = '';
}
