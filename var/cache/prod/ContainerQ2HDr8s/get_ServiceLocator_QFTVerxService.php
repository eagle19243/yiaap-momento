<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.qFTVerx' shared service.

return $this->privates['.service_locator.qFTVerx'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'router' => ['services', 'router', 'getRouterService', false],
    'services' => ['privates', 'App\\Service\\AppServices', 'getAppServicesService', false],
    'translator' => ['services', 'translator', 'getTranslatorService', false],
], [
    'router' => '?',
    'services' => 'App\\Service\\AppServices',
    'translator' => '?',
]);
