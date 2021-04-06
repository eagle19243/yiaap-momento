<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'security.firewall.map.context.main' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallContext.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Util/TargetPathTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ExceptionListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/EntryPoint/AuthenticationEntryPointInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/hwi/oauth-bundle/Security/Http/EntryPoint/OAuthEntryPoint.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Authorization/AccessDeniedHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/src/Security/AccessDeniedHandler.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/AbstractListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/ListenerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LegacyListenerTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Firewall/LogoutListener.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutSuccessHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/DefaultLogoutSuccessHandler.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-bundle/Security/FirewallConfig.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/LogoutHandlerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/security-http/Logout/SessionLogoutHandler.php';

$a = ($this->services['security.token_storage'] ?? $this->getSecurity_TokenStorageService());
$b = ($this->privates['security.http_utils'] ?? $this->getSecurity_HttpUtilsService());
$c = new \Symfony\Component\Security\Http\Firewall\LogoutListener($a, $b, new \Symfony\Component\Security\Http\Logout\DefaultLogoutSuccessHandler($b, '/'), ['csrf_parameter' => '_csrf_token', 'csrf_token_id' => 'logout', 'logout_path' => 'fos_user_security_logout']);
$c->addHandler(($this->privates['security.logout.handler.csrf_token_clearing'] ?? $this->load('getSecurity_Logout_Handler_CsrfTokenClearingService.php')));
$c->addHandler(($this->privates['security.logout.handler.session'] ?? ($this->privates['security.logout.handler.session'] = new \Symfony\Component\Security\Http\Logout\SessionLogoutHandler())));
$c->addHandler(($this->privates['security.authentication.rememberme.services.simplehash.main'] ?? $this->load('getSecurity_Authentication_Rememberme_Services_Simplehash_MainService.php')));

return $this->privates['security.firewall.map.context.main'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallContext(new RewindableGenerator(function () {
    yield 0 => ($this->privates['security.channel_listener'] ?? $this->load('getSecurity_ChannelListenerService.php'));
    yield 1 => ($this->privates['security.context_listener.1'] ?? $this->load('getSecurity_ContextListener_1Service.php'));
    yield 2 => ($this->privates['security.authentication.listener.form.main'] ?? $this->load('getSecurity_Authentication_Listener_Form_MainService.php'));
    yield 3 => ($this->privates['hwi_oauth.authentication.listener.oauth.main'] ?? $this->load('getHwiOauth_Authentication_Listener_Oauth_MainService.php'));
    yield 4 => ($this->privates['security.authentication.listener.rememberme.main'] ?? $this->load('getSecurity_Authentication_Listener_Rememberme_MainService.php'));
    yield 5 => ($this->privates['security.authentication.listener.anonymous.main'] ?? $this->load('getSecurity_Authentication_Listener_Anonymous_MainService.php'));
    yield 6 => ($this->privates['security.authentication.switchuser_listener.main'] ?? $this->load('getSecurity_Authentication_SwitchuserListener_MainService.php'));
    yield 7 => ($this->privates['security.access_listener'] ?? $this->load('getSecurity_AccessListenerService.php'));
}, 8), new \Symfony\Component\Security\Http\Firewall\ExceptionListener($a, ($this->privates['security.authentication.trust_resolver'] ?? ($this->privates['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver(NULL, NULL))), $b, 'main', new \HWI\Bundle\OAuthBundle\Security\Http\EntryPoint\OAuthEntryPoint(($this->services['http_kernel'] ?? $this->getHttpKernelService()), $b, 'fos_user_security_login', false), NULL, new \App\Security\AccessDeniedHandler(($this->services['router'] ?? $this->getRouterService())), ($this->privates['monolog.logger.security'] ?? $this->load('getMonolog_Logger_SecurityService.php')), false), $c, new \Symfony\Bundle\SecurityBundle\Security\FirewallConfig('main', 'security.user_checker', '.security.request_matcher.3UEFixr', true, false, 'security.user.provider.concrete.chain_provider', 'main', 'hwi_oauth.authentication.entry_point.oauth.main', 'App\\Security\\AccessDeniedHandler', NULL, [0 => 'switch_user', 1 => 'form_login', 2 => 'oauth', 3 => 'remember_me', 4 => 'anonymous'], ['parameter' => '_switch_user', 'role' => 'ROLE_ALLOWED_TO_SWITCH', 'stateless' => false]));
