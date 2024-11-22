<?php

use Entities\Company;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

$product = new Company();
$product->setName('Companie 1');

$entityManager->persist($product);
$entityManager->flush();

echo "fin du script";
