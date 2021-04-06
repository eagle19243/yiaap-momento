<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class VenueImage extends \App\Entity\VenueImage implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'id', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'venue', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageSize', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageMimeType', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageOriginalName', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageDimensions', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'position', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'updatedAt'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'id', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'venue', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageFile', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageName', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageSize', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageMimeType', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageOriginalName', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'imageDimensions', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'position', '' . "\0" . 'App\\Entity\\VenueImage' . "\0" . 'updatedAt'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (VenueImage $proxy) {
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
    public function setImageFile(\Symfony\Component\HttpFoundation\File\File $imageFile = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageFile', [$imageFile]);

        return parent::setImageFile($imageFile);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageFile()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageFile', []);

        return parent::getImageFile();
    }

    /**
     * {@inheritDoc}
     */
    public function getImagePath()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImagePath', []);

        return parent::getImagePath();
    }

    /**
     * {@inheritDoc}
     */
    public function getImageName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageName', []);

        return parent::getImageName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageName($imageName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageName', [$imageName]);

        return parent::setImageName($imageName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageSize()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageSize', []);

        return parent::getImageSize();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageSize($imageSize)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageSize', [$imageSize]);

        return parent::setImageSize($imageSize);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageMimeType()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageMimeType', []);

        return parent::getImageMimeType();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageMimeType($imageMimeType)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageMimeType', [$imageMimeType]);

        return parent::setImageMimeType($imageMimeType);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageOriginalName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageOriginalName', []);

        return parent::getImageOriginalName();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageOriginalName($imageOriginalName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageOriginalName', [$imageOriginalName]);

        return parent::setImageOriginalName($imageOriginalName);
    }

    /**
     * {@inheritDoc}
     */
    public function getImageDimensions()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImageDimensions', []);

        return parent::getImageDimensions();
    }

    /**
     * {@inheritDoc}
     */
    public function setImageDimensions($imageDimensions)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImageDimensions', [$imageDimensions]);

        return parent::setImageDimensions($imageDimensions);
    }

    /**
     * {@inheritDoc}
     */
    public function getVenue()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVenue', []);

        return parent::getVenue();
    }

    /**
     * {@inheritDoc}
     */
    public function setVenue($venue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVenue', [$venue]);

        return parent::setVenue($venue);
    }

    /**
     * {@inheritDoc}
     */
    public function getPosition()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPosition', []);

        return parent::getPosition();
    }

    /**
     * {@inheritDoc}
     */
    public function setPosition($position)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPosition', [$position]);

        return parent::setPosition($position);
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

}
