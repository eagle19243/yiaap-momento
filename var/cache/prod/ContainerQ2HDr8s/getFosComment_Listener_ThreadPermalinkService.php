<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_comment.listener.thread_permalink' shared service.

include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/EventListener/ThreadPermalinkListener.php';

return $this->privates['fos_comment.listener.thread_permalink'] = new \FOS\CommentBundle\EventListener\ThreadPermalinkListener(($this->services['request_stack'] ?? ($this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack())));