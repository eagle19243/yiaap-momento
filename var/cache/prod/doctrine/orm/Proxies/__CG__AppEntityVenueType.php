<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class VenueType extends \App\Entity\VenueType implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'id', 'translations', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'venues', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'hidden', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'deletedAt', 'newTranslations', 'currentLocale', 'defaultLocale'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'id', 'translations', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'venues', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'hidden', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\VenueType' . "\0" . 'deletedAt', 'newTranslations', 'currentLocale', 'defaultLocale'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (VenueType $proxy) {
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
    public function __call($method, $arguments)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__call', [$method, $arguments]);

        return parent::__call($method, $arguments);
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
    public function getName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getName', []);

        return parent::getName();
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
    public function getHidden()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHidden', []);

        return parent::getHidden();
    }

    /**
     * {@inheritDoc}
     */
    public function setHidden($hidden)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setHidden', [$hidden]);

        return parent::setHidden($hidden);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
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
    public function getDeletedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeletedAt', []);

        return parent::getDeletedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeletedAt($deletedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeletedAt', [$deletedAt]);

        return parent::setDeletedAt($deletedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getVenues()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVenues', []);

        return parent::getVenues();
    }

    /**
     * {@inheritDoc}
     */
    public function addVenue($venue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addVenue', [$venue]);

        return parent::addVenue($venue);
    }

    /**
     * {@inheritDoc}
     */
    public function removeVenue($venue)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeVenue', [$venue]);

        return parent::removeVenue($venue);
    }

    /**
     * {@inheritDoc}
     */
    public function getTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTranslations', []);

        return parent::getTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function getNewTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNewTranslations', []);

        return parent::getNewTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function addTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTranslation', [$translation]);

        return parent::addTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTranslation($translation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTranslation', [$translation]);

        return parent::removeTranslation($translation);
    }

    /**
     * {@inheritDoc}
     */
    public function translate($locale = NULL, $fallbackToDefault = true)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'translate', [$locale, $fallbackToDefault]);

        return parent::translate($locale, $fallbackToDefault);
    }

    /**
     * {@inheritDoc}
     */
    public function mergeNewTranslations()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'mergeNewTranslations', []);

        return parent::mergeNewTranslations();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrentLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrentLocale', [$locale]);

        return parent::setCurrentLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrentLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrentLocale', []);

        return parent::getCurrentLocale();
    }

    /**
     * {@inheritDoc}
     */
    public function setDefaultLocale($locale)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDefaultLocale', [$locale]);

        return parent::setDefaultLocale($locale);
    }

    /**
     * {@inheritDoc}
     */
    public function getDefaultLocale()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDefaultLocale', []);

        return parent::getDefaultLocale();
    }

}
