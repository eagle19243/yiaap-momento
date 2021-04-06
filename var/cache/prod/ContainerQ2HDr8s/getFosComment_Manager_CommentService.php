<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'fos_comment.manager.comment' shared service.

include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Model/CommentManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Acl/AclCommentManager.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Model/CommentManager.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Entity/CommentManager.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Sorting/SortingFactory.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Sorting/SortingInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Sorting/AbstractOrderSorting.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/comment-bundle/Sorting/DateSorting.php';

return $this->services['fos_comment.manager.comment'] = new \FOS\CommentBundle\Acl\AclCommentManager(new \FOS\CommentBundle\Entity\CommentManager(($this->services['event_dispatcher'] ?? $this->getEventDispatcherService()), new \FOS\CommentBundle\Sorting\SortingFactory(['date_asc' => new \FOS\CommentBundle\Sorting\DateSorting('ASC'), 'date_desc' => new \FOS\CommentBundle\Sorting\DateSorting('DESC')], 'date_desc'), ($this->privates['fos_comment.entity_manager'] ?? $this->load('getFosComment_EntityManagerService.php')), 'App\\Entity\\Comment'), ($this->services['fos_comment.acl.comment'] ?? $this->getFosComment_Acl_CommentService()), ($this->services['fos_comment.acl.thread'] ?? $this->getFosComment_Acl_ThreadService()));