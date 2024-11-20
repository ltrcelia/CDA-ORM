<?php

use Doctrine\DBAL\DriverManager;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;
use Symfony\Component\Cache\Adapter\ArrayAdapter;
use Symfony\Component\Cache\Adapter\PhpArrayAdapter;

require_once __DIR__ . '/../vendor/autoload.php';

// Chemin vers les entités
$paths = [__DIR__ . '/../src/Entities'];

// Mode développement
$isDevMode = true;

// Fichier temporaire pour le cache
$tempCacheFile = sys_get_temp_dir() . '/doctrine_cache.php';

// Configuration du cache avec PhpArrayAdapter et ArrayAdapter comme fallback
$cache = new PhpArrayAdapter($tempCacheFile, new ArrayAdapter());

// Configuration des métadonnées
$config = ORMSetup::createAttributeMetadataConfiguration($paths, $isDevMode, null, $cache);

// Configuration de la base de données
$connection = DriverManager::getConnection([
    'driver'   => 'pdo_mysql',
    'host'     => 'mysql',
    'user'     => 'blog_user',
    'password' => 'blogupwd',
    'dbname'   => 'blog'
]);

// Création de l'EntityManager
$entityManager = new EntityManager($connection, $config);

return $entityManager;
