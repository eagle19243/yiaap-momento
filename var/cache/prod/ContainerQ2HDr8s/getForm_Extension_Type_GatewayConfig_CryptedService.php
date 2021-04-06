<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'form.extension.type.gateway_config.crypted' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeExtensionInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractTypeExtension.php';
include_once \dirname(__DIR__, 4).'/src/Form/Extension/CryptedGatewayConfigTypeExtension.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Security/CypherInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Defuse/Security/DefuseCypher.php';

return $this->privates['form.extension.type.gateway_config.crypted'] = new \App\Form\Extension\CryptedGatewayConfigTypeExtension(($this->privates['payum.dynamic_gateways.cypher'] ?? ($this->privates['payum.dynamic_gateways.cypher'] = new \Payum\Core\Bridge\Defuse\Security\DefuseCypher($this->getEnv('PAYUM_CYPHER_KEY')))));