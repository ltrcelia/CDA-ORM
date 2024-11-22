<?php

use Entities\Article;
use Entities\Comment;
use Entities\Member;
use Entities\User;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$comment = new Comment();
$comment->setContent('Trop bien !');
$comment->setCreatedAt(new DateTime("now"));

$user = $entityManager->find(User::class, 1);
$comment->setUser($user);

$article = $entityManager->find(Article::class, 1);
$comment->setArticle($article);

$member = $entityManager->find(Member::class, 1);
$comment->setMember($member);

$entityManager->persist($comment);
$entityManager->flush();

echo "fin du script";
