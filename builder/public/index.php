<?php
require('../vendor/autoload.php');

use App\MySQLQueryBuilder;

// Creer un QueryBuilder
$queryBuilder = new MySQLQueryBuilder();

// Ecrire une requête en chainant des methodes
$query = $queryBuilder->select('*')
    ->from('users')
    ->where('id = 1')
    ->getQuery();

// Afficher la requête
echo $query; // Output: SELECT * FROM users WHERE id = 1
