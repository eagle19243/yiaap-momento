<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'vich_uploader.namer_uniqid.event_image' shared service.

include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Naming/NamerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Naming/Polyfill/FileExtensionTrait.php';
include_once \dirname(__DIR__, 4).'/vendor/vich/uploader-bundle/Naming/UniqidNamer.php';

return $this->services['vich_uploader.namer_uniqid.event_image'] = new \Vich\UploaderBundle\Naming\UniqidNamer();
