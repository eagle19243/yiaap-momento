<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'App\Controller\bundles\FOSUserBundle\SecurityController' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/dependency-injection/ContainerAwareTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/ControllerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/Controller.php';
include_once \dirname(__DIR__, 4).'/src/Controller/bundles/FOSUserBundle/SecurityController.php';

return $this->services['App\\Controller\\bundles\\FOSUserBundle\\SecurityController'] = new \App\Controller\bundles\FOSUserBundle\SecurityController(($this->services['security.csrf.token_manager'] ?? $this->load('getSecurity_Csrf_TokenManagerService.php')));