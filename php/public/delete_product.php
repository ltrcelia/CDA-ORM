<?php

use Entities\Product;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$productRepository = $entityManager->getRepository(Product::class);
$products = $productRepository->findOneAndDelete(1);

$entityManager->persist($products);
$entityManager->flush();
