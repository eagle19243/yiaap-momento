<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.form.type.gateway_factories_choice' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/Form/Type/GatewayFactoriesChoiceType.php';

return $this->services['payum.form.type.gateway_factories_choice'] = new \Payum\Core\Bridge\Symfony\Form\Type\GatewayFactoriesChoiceType([]);