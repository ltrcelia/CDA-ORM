<?php

use Entities\Article;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$article = new Article();
$article->setTitle('LolaDu18');
$article->setExcerpt("Résumé de l\'article");
$article->setContent("Voici l\'article en entier[...]");

$entityManager->persist($article);
$entityManager->flush();

echo "fin du script";
