<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\HelpCenterArticleType' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/src/Form/HelpCenterArticleType.php';

return $this->privates['App\\Form\\HelpCenterArticleType'] = new \App\Form\HelpCenterArticleType(($this->privates['App\\Service\\AppServices'] ?? $this->getAppServicesService()));
