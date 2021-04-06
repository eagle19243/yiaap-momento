<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'jms_translation.controller.translate_controller' shared service.

include_once \dirname(__DIR__, 4).'/vendor/jms/translation-bundle/JMS/TranslationBundle/Controller/TranslateController.php';

$this->services['jms_translation.controller.translate_controller'] = $instance = new \JMS\TranslationBundle\Controller\TranslateController(($this->services['jms_translation.config_factory'] ?? $this->load('getJmsTranslation_ConfigFactoryService.php')), ($this->privates['jms_translation.loader_manager'] ?? $this->load('getJmsTranslation_LoaderManagerService.php')));

$instance->setSourceLanguage('en');

return $instance;
