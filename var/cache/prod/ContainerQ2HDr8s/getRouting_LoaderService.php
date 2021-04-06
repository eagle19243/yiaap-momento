<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'routing.loader' shared service.

include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/Loader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/DelegatingLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/DelegatingLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolverInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/LoaderResolver.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/config/Loader/FileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/XmlFileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/YamlFileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/PhpFileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/GlobFileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/DirectoryLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ObjectLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/ContainerLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/LegacyRouteLoaderContainer.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/DirectoryRouteLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/RestRouteProcessor.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/RestRouteLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/Reader/RestControllerReader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/Reader/RestActionReader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Request/ParamReaderInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Request/ParamReader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Inflector/InflectorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Inflector/DoctrineInflector.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/RestYamlCollectionLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/friendsofsymfony/rest-bundle/Routing/Loader/RestXmlCollectionLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/coresphere/console-bundle/Routing/Loader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationClassLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Routing/AnnotatedRouteControllerLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationFileLoader.php';
include_once \dirname(__DIR__, 4).'/vendor/symfony/routing/Loader/AnnotationDirectoryLoader.php';

$a = new \Symfony\Component\Config\Loader\LoaderResolver();

$b = ($this->privates['file_locator'] ?? $this->load('getFileLocatorService.php'));
$c = new \Symfony\Component\Routing\Loader\YamlFileLoader($b);
$d = new \FOS\RestBundle\Routing\Loader\RestRouteProcessor();
$e = ($this->privates['annotations.cached_reader'] ?? $this->getAnnotations_CachedReaderService());
$f = new \Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader($e);

$a->addLoader(new \Symfony\Component\Routing\Loader\XmlFileLoader($b));
$a->addLoader($c);
$a->addLoader(new \Symfony\Component\Routing\Loader\PhpFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\GlobFileLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\DirectoryLoader($b));
$a->addLoader(new \Symfony\Component\Routing\Loader\ContainerLoader(new \Symfony\Bundle\FrameworkBundle\Routing\LegacyRouteLoaderContainer($this, new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'kernel' => ['services', 'kernel', 'getKernelService', false],
], [
    'kernel' => 'App\\Kernel',
]))));
$a->addLoader(new \FOS\RestBundle\Routing\Loader\DirectoryRouteLoader($b, $d));
$a->addLoader(new \FOS\RestBundle\Routing\Loader\RestRouteLoader($this, $b, ($this->privates['.legacy_controller_name_converter'] ?? ($this->privates['.legacy_controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(($this->services['kernel'] ?? $this->get('kernel', 1)), false))), new \FOS\RestBundle\Routing\Loader\Reader\RestControllerReader(new \FOS\RestBundle\Routing\Loader\Reader\RestActionReader($e, new \FOS\RestBundle\Request\ParamReader($e), new \FOS\RestBundle\Inflector\DoctrineInflector(), true, ['json' => false, 'xml' => false, 'html' => true], true), $e), NULL));
$a->addLoader(new \FOS\RestBundle\Routing\Loader\RestYamlCollectionLoader($b, $d, true, ['json' => false, 'xml' => false, 'html' => true], NULL));
$a->addLoader(new \FOS\RestBundle\Routing\Loader\RestXmlCollectionLoader($b, $d, true, ['json' => false, 'xml' => false, 'html' => true], NULL));
$a->addLoader(new \CoreSphere\ConsoleBundle\Routing\Loader($c));
$a->addLoader($f);
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationDirectoryLoader($b, $f));
$a->addLoader(new \Symfony\Component\Routing\Loader\AnnotationFileLoader($b, $f));

return $this->services['routing.loader'] = new \Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader($a, [], ['utf8' => true]);