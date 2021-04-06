<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.extension.logger' shared service.

include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Extension/ExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Psr/Log/LoggerExtension.php';

$a = new \Symfony\Bridge\Monolog\Logger('payum');
$a->pushHandler(($this->privates['monolog.handler.console'] ?? $this->getMonolog_Handler_ConsoleService()));
$a->pushHandler(($this->privates['monolog.handler.main'] ?? $this->getMonolog_Handler_MainService()));

return $this->services['payum.extension.logger'] = new \Payum\Core\Bridge\Psr\Log\LoggerExtension($a);
