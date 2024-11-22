<?php

use Entities\Product;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$productRepository = $entityManager->getRepository(Product::class);
$products = $productRepository->find(1);

$products->setName('New name');
echo $products->getName();

$entityManager->persist($products);
$entityManager->flush();

// foreach ($products as $product) {
//     echo $product->getName() . "\n";
//     echo "<br />";
// };
