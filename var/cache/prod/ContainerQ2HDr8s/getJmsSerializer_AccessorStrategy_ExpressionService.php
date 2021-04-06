<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'jms_serializer.accessor_strategy.expression' shared service.

include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Accessor/AccessorStrategyInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Accessor/ExpressionAccessorStrategy.php';
include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/JMS/Serializer/Accessor/DefaultAccessorStrategy.php';

return $this->privates['jms_serializer.accessor_strategy.expression'] = new \JMS\Serializer\Accessor\ExpressionAccessorStrategy(($this->privates['jms_serializer.expression_evaluator'] ?? $this->load('getJmsSerializer_ExpressionEvaluatorService.php')), new \JMS\Serializer\Accessor\DefaultAccessorStrategy());
