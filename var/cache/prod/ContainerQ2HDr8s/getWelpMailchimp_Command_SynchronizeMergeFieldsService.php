<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'welp_mailchimp.command.synchronize_merge_fields' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/console/Command/Command.php';
include_once \dirname(__DIR__, 4).'/vendor/welp/mailchimp-bundle/src/Command/SynchronizeMergeFieldsCommand.php';

$this->privates['welp_mailchimp.command.synchronize_merge_fields'] = $instance = new \Welp\MailchimpBundle\Command\SynchronizeMergeFieldsCommand(($this->services['welp_mailchimp.list_synchronizer'] ?? $this->load('getWelpMailchimp_ListSynchronizerService.php')), ($this->services['welp_mailchimp.list_provider'] ?? $this->load('getWelpMailchimp_ListProviderService.php')));

$instance->setName('welp:mailchimp:synchronize-merge-fields');

return $instance;
