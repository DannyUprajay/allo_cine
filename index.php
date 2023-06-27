<?php include_once 'component\header.php';

use App\Service\PDOService;


echo "rdd";
  
// dump(new PDOService());

$listMovie = new PDOService;

dump($listMovie->findAll());