<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.fEPQQuL' shared service.

return $this->privates['.service_locator.fEPQQuL'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'mailer' => ['services', 'swiftmailer.mailer.default', 'getSwiftmailer_Mailer_DefaultService.php', true],
    'services' => ['privates', 'App\\Service\\AppServices', 'getAppServicesService', false],
    'translator' => ['services', 'translator', 'getTranslatorService', false],
], [
    'mailer' => '?',
    'services' => 'App\\Service\\AppServices',
    'translator' => '?',
]);