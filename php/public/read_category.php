<?php

use Entities\Category;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$categoryRepository = $entityManager->getRepository(Category::class);
$categories = $categoryRepository->findAll();

foreach ($categories as $category) {
    echo $category->getName() . "\n";
    echo "<br />";
};

$entityManager->persist($category);
$entityManager->flush();
