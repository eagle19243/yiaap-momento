<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AppLayoutSettings extends \App\Entity\AppLayoutSettings implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'id', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoFile', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoSize', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoMimeType', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoOriginalName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoDimensions', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconFile', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconSize', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconMimeType', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconOriginalName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconDimensions', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageFile', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageSize', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageMimeType', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageOriginalName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageDimensions', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'id', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoFile', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoSize', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoMimeType', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoOriginalName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'logoDimensions', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconFile', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconSize', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconMimeType', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconOriginalName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'faviconDimensions', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageFile', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageSize', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageMimeType', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageOriginalName', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'ogImageDimensions', '' . "\0" . 'App\\Entity\\AppLayoutSettings' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (AppLayoutSettings $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoFile(\Symfony\Component\HttpFoundation\File\File $logoFile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoFile', [$logoFile]);

        return parent::setLogoFile($logoFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoFile', []);

        return parent::getLogoFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoPath', []);

        return parent::getLogoPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaviconFile(\Symfony\Component\HttpFoundation\File\File $faviconFile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaviconFile', [$faviconFile]);

        return parent::setFaviconFile($faviconFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconFile', []);

        return parent::getFaviconFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconPath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconPath', []);

        return parent::getFaviconPath();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImageFile(\Symfony\Component\HttpFoundation\File\File $ogImageFile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImageFile', [$ogImageFile]);

        return parent::setOgImageFile($ogImageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImageFile', []);

        return parent::getOgImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImagePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImagePath', []);

        return parent::getOgImagePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoName', []);

        return parent::getLogoName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoName($logoName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoName', [$logoName]);

        return parent::setLogoName($logoName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoSize', []);

        return parent::getLogoSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoSize($logoSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoSize', [$logoSize]);

        return parent::setLogoSize($logoSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoMimeType', []);

        return parent::getLogoMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoMimeType($logoMimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoMimeType', [$logoMimeType]);

        return parent::setLogoMimeType($logoMimeType);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoOriginalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoOriginalName', []);

        return parent::getLogoOriginalName();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoOriginalName($logoOriginalName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoOriginalName', [$logoOriginalName]);

        return parent::setLogoOriginalName($logoOriginalName);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogoDimensions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogoDimensions', []);

        return parent::getLogoDimensions();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogoDimensions($logoDimensions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogoDimensions', [$logoDimensions]);

        return parent::setLogoDimensions($logoDimensions);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconName', []);

        return parent::getFaviconName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaviconName($faviconName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaviconName', [$faviconName]);

        return parent::setFaviconName($faviconName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconSize', []);

        return parent::getFaviconSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaviconSize($faviconSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaviconSize', [$faviconSize]);

        return parent::setFaviconSize($faviconSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconMimeType', []);

        return parent::getFaviconMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaviconMimeType($faviconMimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaviconMimeType', [$faviconMimeType]);

        return parent::setFaviconMimeType($faviconMimeType);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconOriginalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconOriginalName', []);

        return parent::getFaviconOriginalName();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaviconOriginalName($faviconOriginalName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaviconOriginalName', [$faviconOriginalName]);

        return parent::setFaviconOriginalName($faviconOriginalName);
    }

    /**
     * {@inheritDoc}
     */
    public function getFaviconDimensions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFaviconDimensions', []);

        return parent::getFaviconDimensions();
    }

    /**
     * {@inheritDoc}
     */
    public function setFaviconDimensions($faviconDimensions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFaviconDimensions', [$faviconDimensions]);

        return parent::setFaviconDimensions($faviconDimensions);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImageName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImageName', []);

        return parent::getOgImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImageName($ogImageName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImageName', [$ogImageName]);

        return parent::setOgImageName($ogImageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImageSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImageSize', []);

        return parent::getOgImageSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImageSize($ogImageSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImageSize', [$ogImageSize]);

        return parent::setOgImageSize($ogImageSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImageMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImageMimeType', []);

        return parent::getOgImageMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImageMimeType($ogImageMimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImageMimeType', [$ogImageMimeType]);

        return parent::setOgImageMimeType($ogImageMimeType);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImageOriginalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImageOriginalName', []);

        return parent::getOgImageOriginalName();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImageOriginalName($ogImageOriginalName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImageOriginalName', [$ogImageOriginalName]);

        return parent::setOgImageOriginalName($ogImageOriginalName);
    }

    /**
     * {@inheritDoc}
     */
    public function getOgImageDimensions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOgImageDimensions', []);

        return parent::getOgImageDimensions();
    }

    /**
     * {@inheritDoc}
     */
    public function setOgImageDimensions($ogImageDimensions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOgImageDimensions', [$ogImageDimensions]);

        return parent::setOgImageDimensions($ogImageDimensions);
    }

}