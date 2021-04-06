<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.static_registry' shared service.

include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/GatewayRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/GatewayFactoryRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/StorageRegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/RegistryInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Registry/AbstractRegistry.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/ContainerAwareRegistry.php';

$this->services['payum.static_registry'] = $instance = new \Payum\Core\Bridge\Symfony\ContainerAwareRegistry([], ['App\\Entity\\Payment' => 'payum.storage.app_entity_payment'], []);

$instance->setContainer($this);

return $instance;