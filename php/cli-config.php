<?php

use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Tools\Console\EntityManagerProvider\SingleManagerProvider;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\CreateCommand;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\UpdateCommand;
use Doctrine\ORM\Tools\Console\Command\SchemaTool\DropCommand;
use Symfony\Component\Console\Application;

require_once 'vendor/autoload.php';

/** @var EntityManagerInterface $entityManager */
$entityManager = require __DIR__ . '/config/bootstrap.php';

// Fournisseur d'EntityManager
$managerProvider = new SingleManagerProvider($entityManager);

// Application Symfony Console
$application = new Application('Doctrine CLI');

// Ajout des commandes
$application->add(new CreateCommand($managerProvider));
$application->add(new UpdateCommand($managerProvider));
$application->add(new DropCommand($managerProvider));

// Lancement de l'application
$application->run();
