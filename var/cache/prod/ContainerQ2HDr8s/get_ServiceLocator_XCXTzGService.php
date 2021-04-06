<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.XC_xTzG' shared service.

return $this->privates['.service_locator.XC_xTzG'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
    'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService.php', true],
    'services' => ['privates', 'App\\Service\\AppServices', 'getAppServicesService', false],
    'translator' => ['services', 'translator', 'getTranslatorService', false],
], [
    'authChecker' => '?',
    'paginator' => '?',
    'services' => 'App\\Service\\AppServices',
    'translator' => '?',
]);
