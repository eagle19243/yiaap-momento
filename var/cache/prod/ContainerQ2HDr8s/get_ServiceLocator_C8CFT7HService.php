<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.c8CFT7H' shared service.

return $this->privates['.service_locator.c8CFT7H'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'kernel' => ['services', 'kernel', 'getKernelService', false],
    'translator' => ['services', 'translator', 'getTranslatorService', false],
], [
    'kernel' => '?',
    'translator' => '?',
]);
