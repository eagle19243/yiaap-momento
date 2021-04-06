<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'debril.rss_atom.provider' shared autowired service.

include_once \dirname(__DIR__, 4).'/vendor/debril/rss-atom-bundle/Debril/RssAtomBundle/Provider/FeedProviderInterface.php';
include_once \dirname(__DIR__, 4).'/src/Feed/Provider.php';

return $this->privates['debril.rss_atom.provider'] = new \App\Feed\Provider(($this->privates['App\\Service\\AppServices'] ?? $this->getAppServicesService()), ($this->services['router'] ?? $this->getRouterService()), ($this->privates['assets.packages'] ?? $this->getAssets_PackagesService()));
