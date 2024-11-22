<?php

use Entities\Product;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$product = new Product();
$product->setName('Laptop');
$product->setPrice('1800');

$entityManager->persist($product);
$entityManager->flush();

echo "fin du script";
