<?php

use Entities\Permission;
use Entities\Role;

require_once __DIR__ . './../../config/bootstrap.php';
/** @var \Doctrine\ORM\EntityManager $entityManager */
$entityManager = require __DIR__ . '/../../config/bootstrap.php';

$role = $entityManager->find(Role::class, 1);
$permission = $entityManager->find(Permission::class, 1);

$role->addPermission($permission);

$entityManager->persist($role);
$entityManager->flush();

echo "permission 1 has been associated with role 1";