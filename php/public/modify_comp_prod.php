<?php

use Entities\Product;
use Entities\Company;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$company = new Company();
$company->setName('TechCorp');

$product = new Product();
$product->setName('Super Laptop');
$product->setPrice('12500.50');
$product->setCompany($company);

$entityManager->persist($company);
$entityManager->persist($product);
$entityManager->flush();

echo "Fin du script";
