<?php
require_once dirname(__DIR__).'/vendor/autoload.php';

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\ORMSetup;

$aPath = [
    dirname(__DIR__).'/src/Entity',
];
$isDevMode = false;

$aDbParam = [
    'driver'   => 'pdo_mysql',
    'user'     => 'root',
    'password' => '',
    'dbname'   => 'foo',
];

$config = ORMSetup::createAttributeMetadataConfiguration($aPath, $isDevMode);
$entityManager = EntityManager::create($aDbParam, $config);