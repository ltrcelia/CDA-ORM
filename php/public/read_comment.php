<?php

use Entities\Comment;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$commentRepository = $entityManager->getRepository(Comment::class);
$comments = $commentRepository->findAll();

foreach ($comments as $comment) {
    echo $comment->getContent() . "\n";
    echo "<br />";
};

$entityManager->persist($comment);
$entityManager->flush();
