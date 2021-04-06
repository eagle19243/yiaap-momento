<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_translation.command.list_resources' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Command/ContainerAwareCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle/Command/ResourcesListCommand.php';

$this->privates['jms_translation.command.list_resources'] = $instance = new \JMS\TranslationBundle\Command\ResourcesListCommand();

$instance->setName('translation:list-resources');

return $instance;
