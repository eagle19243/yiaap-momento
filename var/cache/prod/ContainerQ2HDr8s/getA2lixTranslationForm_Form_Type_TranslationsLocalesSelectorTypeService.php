<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'a2lix_translation_form.form.type.translations_locales_selector_type' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/form/FormTypeInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/form/AbstractType.php';
include_once \dirname(__DIR__, 4).'/vendor/a2lix/translation-form-bundle/src/Form/Type/TranslationsLocalesSelectorType.php';

return $this->privates['a2lix_translation_form.form.type.translations_locales_selector_type'] = new \A2lix\TranslationFormBundle\Form\Type\TranslationsLocalesSelectorType(($this->privates['a2lix_translation_form.locale.simple_provider'] ?? $this->load('getA2lixTranslationForm_Locale_SimpleProviderService.php')));