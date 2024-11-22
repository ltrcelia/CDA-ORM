<?php

use Entities\Category;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$category = new Category();
$category->setName('Fantasy');
$category->setCreatedAt(new DateTime('now'));

$entityManager->persist($category);
$entityManager->flush();

echo "fin du script";
