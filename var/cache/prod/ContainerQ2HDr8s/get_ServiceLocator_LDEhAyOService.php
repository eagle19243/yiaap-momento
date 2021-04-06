<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.LDEhAyO' shared service.

return $this->privates['.service_locator.LDEhAyO'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'assetsManager' => ['privates', 'assets.packages', 'getAssets_PackagesService', false],
    'passwordEncoder' => ['services', 'security.password_encoder', 'getSecurity_PasswordEncoderService.php', true],
    'services' => ['privates', 'App\\Service\\AppServices', 'getAppServicesService', false],
    'translator' => ['services', 'translator', 'getTranslatorService', false],
], [
    'assetsManager' => '?',
    'passwordEncoder' => '?',
    'services' => 'App\\Service\\AppServices',
    'translator' => '?',
]);
