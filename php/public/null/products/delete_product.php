<?php

use Entities\Product;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$product = $entityManager->find(Product::class, 1);
echo $product->getId();
echo " : ";
echo $product->getName();

$entityManager->remove($product);
$entityManager->flush();
