<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'liip_imagine.filter.loader.resample' shared service.

include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/liip/imagine-bundle/Imagine/Filter/Loader/ResampleFilterLoader.php';

return $this->services['liip_imagine.filter.loader.resample'] = new \Liip\ImagineBundle\Imagine\Filter\Loader\ResampleFilterLoader(($this->privates['liip_imagine.gd'] ?? $this->load('getLiipImagine_GdService.php')));