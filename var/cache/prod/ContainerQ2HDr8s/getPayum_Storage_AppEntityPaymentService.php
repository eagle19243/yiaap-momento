<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.storage.app_entity_payment' shared service.

include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Storage/StorageInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Storage/AbstractStorage.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Doctrine/Storage/DoctrineStorage.php';

return $this->services['payum.storage.app_entity_payment'] = new \Payum\Core\Bridge\Doctrine\Storage\DoctrineStorage(($this->services['doctrine.orm.default_entity_manager'] ?? $this->getDoctrine_Orm_DefaultEntityManagerService()), 'App\\Entity\\Payment');
