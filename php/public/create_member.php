<?php

use Entities\Comment;
use Entities\Member;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$member = new Member();
$member->setUsername('LolaDu18');
$member->setEmail('loladu18@gmail.com');
$member->setPassword(password_hash("loladu181920", PASSWORD_BCRYPT));


$member->setCreatedAt(new DateTime('now'));

$entityManager->persist($member);
$entityManager->flush();

echo "fin du script";
