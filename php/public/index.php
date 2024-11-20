<?php

$dsn = 'mysql:host=mysql;dbname=blog;charset=utf8';
$username = 'blog_user';
$password = 'blogupwd';

try {
    $pdo = new PDO($dsn, $username, $password);
    echo "Docker avec PHP, MySQL et Doctrine est prêt!";
    echo "<br>";
    echo "Connexion réussie à la base de données!";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}
