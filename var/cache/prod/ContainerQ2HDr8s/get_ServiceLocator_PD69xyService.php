<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private '.service_locator.PD6_9xy' shared service.

return $this->privates['.service_locator.PD6_9xy'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'feedBuilder' => ['privates', 'Debril\\RssAtomBundle\\Response\\FeedBuilder', 'getFeedBuilderService.php', true],
    'provider' => ['privates', 'debril.rss_atom.provider', 'getDebril_RssAtom_ProviderService.php', true],
], [
    'feedBuilder' => 'Debril\\RssAtomBundle\\Response\\FeedBuilder',
    'provider' => '?',
]);
