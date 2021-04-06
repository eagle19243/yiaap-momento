<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'hwi_oauth.resource_owner.google' shared service.

include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwnerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/AbstractResourceOwner.php';
include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/GenericOAuth2ResourceOwner.php';
include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/OAuth/ResourceOwner/GoogleResourceOwner.php';

return $this->services['hwi_oauth.resource_owner.google'] = new \HWI\Bundle\OAuthBundle\OAuth\ResourceOwner\GoogleResourceOwner(($this->services['hwi_oauth.http_client'] ?? $this->load('getHwiOauth_HttpClientService.php')), ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService()), ['client_id' => $this->getEnv('GOOGLE_ID'), 'client_secret' => $this->getEnv('GOOGLE_SECRET'), 'scope' => 'https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/userinfo.profile', 'paths' => [], 'options' => []], 'google', ($this->privates['hwi_oauth.storage.session'] ?? $this->load('getHwiOauth_Storage_SessionService.php')));