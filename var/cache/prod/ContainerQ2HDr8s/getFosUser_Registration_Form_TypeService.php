<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'fos_user.registration.form.type' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/user-bundle/Form/Type/RegistrationFormType.php';

return $this->privates['fos_user.registration.form.type'] = new \FOS\UserBundle\Form\Type\RegistrationFormType('App\\Entity\\User');
