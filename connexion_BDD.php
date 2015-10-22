<?php

/* Connexion à une base ODBC avec l'invocation de pilote */
$dsn = 'mysql:dbname=photoexpressodb;host=sql.group1.estiam.com';
$user = 'yannick';
$password = 'estiam94';

try {
    $bdd = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}





?>


