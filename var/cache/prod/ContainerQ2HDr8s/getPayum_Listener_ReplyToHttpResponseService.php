<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'payum.listener.reply_to_http_response' shared service.

include_once \dirname(__DIR__, 4).'/vendor/payum/payum-bundle/EventListener/ReplyToHttpResponseListener.php';
include_once \dirname(__DIR__, 4).'/vendor/payum/core/Payum/Core/Bridge/Symfony/ReplyToSymfonyResponseConverter.php';

return $this->services['payum.listener.reply_to_http_response'] = new \Payum\Bundle\PayumBundle\EventListener\ReplyToHttpResponseListener(($this->services['payum.converter.reply_to_http_response'] ?? ($this->services['payum.converter.reply_to_http_response'] = new \Payum\Core\Bridge\Symfony\ReplyToSymfonyResponseConverter())));
