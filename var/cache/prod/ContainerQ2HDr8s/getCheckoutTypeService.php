<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\Form\CheckoutType' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/src/Form/CheckoutType.php';

return $this->privates['App\\Form\\CheckoutType'] = new \App\Form\CheckoutType(($this->privates['App\\Service\\AppServices'] ?? $this->getAppServicesService()));
