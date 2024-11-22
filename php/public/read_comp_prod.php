<?php

use Entities\Product;

require_once __DIR__ . '/../config/bootstrap.php';

/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../config/bootstrap.php';

// Trouver un produit par son ID
$product = $entityManager->find(Product::class, 3);

if ($product === null) {
    echo "Produit introuvable.";
    exit;
}

echo "Produit : " . $product->getName() . " - Prix : " . $product->getPrice() . "\n";
$company = $product->getCompany();
if ($company !== null) {
    echo "Compagnie : " . $company->getName() . "\n";
} else {
    echo "Aucune compagnie associée.\n";
}
