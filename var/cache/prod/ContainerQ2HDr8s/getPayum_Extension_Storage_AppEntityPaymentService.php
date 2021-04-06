<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.extension.storage.app_entity_payment' shared service.

include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Extension/ExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Extension/StorageExtension.php';

return $this->services['payum.extension.storage.app_entity_payment'] = new \Payum\Core\Extension\StorageExtension(($this->services['payum.storage.app_entity_payment'] ?? $this->load('getPayum_Storage_AppEntityPaymentService.php')));