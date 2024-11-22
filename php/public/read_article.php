<?php

use Entities\Article;

require_once __DIR__ . '/../config/bootstrap.php';

/**
 * @var \Doctrine\ORM\EntityManager $entityManager
 */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

if (isset($_GET['id'])) {
    $article_id = (int)$_GET['id'];

    $articleRepository = $entityManager->getRepository(Article::class);
    $article = $articleRepository->find($article_id);

    echo "<br> Vous êtes sur la page de l'article " . $article->getTitle() . "<br><br>";
    echo "Catégorie : " . $article->getCategory()->getName() . "<br><br>";
    echo "Ecrit par : " . $article->getUser()->getUsername() . "<br><br>";
    echo "Tags : ";

    $tags = $article->getTags();
    if (count($tags)) {
        foreach ($tags as $tag) {
            echo $tag->getName();
        }
    }
} else {
    echo "aucun article sélectionné";
}
