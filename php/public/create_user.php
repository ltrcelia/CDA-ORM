<?php

use Entities\User;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$user = new User();
$user->setUsername('Kiwi12');
$user->setEmail('kiwi12@gmail.com');
$user->setPassword('kiwi12345');
$user->setIsAdmin(false);
$user->setCreatedAt(new DateTime('now'));

$entityManager->persist($user);
$entityManager->flush();

echo "fin du script";
