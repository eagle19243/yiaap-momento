<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.KKI27we' shared service.

return $this->privates['.service_locator.KKI27we'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'authChecker' => ['services', 'security.authorization_checker', 'getSecurity_AuthorizationCheckerService', false],
], [
    'authChecker' => '?',
]);