<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'welp_mailchimp.provider.factory' shared service.

include_once \dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src/Provider/ProviderFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src/Provider/ProviderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src/Provider/FosSubscriberProvider.php';

$this->services['welp_mailchimp.provider.factory'] = $instance = new \Welp\MailchimpBundle\Provider\ProviderFactory();

$instance->addProvider('eventic_mailchimp_fos_subscriber_provider', new \Welp\MailchimpBundle\Provider\FosSubscriberProvider(($this->services['fos_user.user_manager'] ?? $this->load('getFosUser_UserManagerService.php'))));

return $instance;