<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'App\EventListener\SitemapSubscriber' shared autowired service.

include_once \dirname(__DIR__, 4).'/src/EventListener/SitemapSubscriber.php';

return $this->privates['App\\EventListener\\SitemapSubscriber'] = new \App\EventListener\SitemapSubscriber(($this->services['router'] ?? $this->getRouterService()), ($this->privates['App\\Service\\AppServices'] ?? $this->getAppServicesService()));
