<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'welp_mailchimp.command.synchronize_subscribers' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src/Command/SynchronizeSubscribersCommand.php';
include_once \dirname(__DIR__, 4).'/vendor/drewm/mailchimp-api/src/MailChimp.php';

$this->privates['welp_mailchimp.command.synchronize_subscribers'] = $instance = new \Welp\MailchimpBundle\Command\SynchronizeSubscribersCommand(($this->services['welp_mailchimp.list_synchronizer'] ?? $this->load('getWelpMailchimp_ListSynchronizerService.php')), ($this->services['welp_mailchimp.list_provider'] ?? $this->load('getWelpMailchimp_ListProviderService.php')), ($this->services['welp_mailchimp.mailchimp_master'] ?? ($this->services['welp_mailchimp.mailchimp_master'] = new \DrewM\MailChimp\MailChimp('542673602536197ee271b0d4d78164da-us20'))));

$instance->setName('welp:mailchimp:synchronize-subscribers');

return $instance;