<?php

use Entities\Member;
use Entities\Comment;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$memberRepository = $entityManager->getRepository(Member::class);
$members = $memberRepository->findAll();

foreach ($members as $member) {
    echo "Username : " . $member->getUsername() . "<br/>";
    echo  "Email : " . $member->getEmail() . "<br/>";
    echo  "Password : " . $member->getPassword() . "<br/>";
    $comments = $member->getComment();
    foreach ($comments as $comment) {
        echo "Commentaire(s) : " . $comment->getContent() . "<br/>";
    }
    echo "<br />";
};

$entityManager->persist($member);
$entityManager->flush();
