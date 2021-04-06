<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Payment extends \App\Entity\Payment implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'order', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'lastname', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'postalcode', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'street', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'street2', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'deletedAt', 'number', 'description', 'clientEmail', 'clientId', 'totalAmount', 'currencyCode', 'details', 'creditCard', 'bankAccount'];
        }

        return ['__isInitialized__', 'id', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'order', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'firstname', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'lastname', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'country', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'state', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'city', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'postalcode', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'street', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'street2', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'createdAt', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entity\\Payment' . "\0" . 'deletedAt', 'number', 'description', 'clientEmail', 'clientId', 'totalAmount', 'currencyCode', 'details', 'creditCard', 'bankAccount'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Payment $proxy) {
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
    public function hasBillingInformation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'hasBillingInformation', []);

        return parent::hasBillingInformation();
    }

    /**
     * {@inheritDoc}
     */
    public function stringifyAddress()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'stringifyAddress', []);

        return parent::stringifyAddress();
    }

    /**
     * {@inheritDoc}
     */
    public function getFirstname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFirstname', []);

        return parent::getFirstname();
    }

    /**
     * {@inheritDoc}
     */
    public function setFirstname($firstname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFirstname', [$firstname]);

        return parent::setFirstname($firstname);
    }

    /**
     * {@inheritDoc}
     */
    public function getLastname()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLastname', []);

        return parent::getLastname();
    }

    /**
     * {@inheritDoc}
     */
    public function setLastname($lastname)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLastname', [$lastname]);

        return parent::setLastname($lastname);
    }

    /**
     * {@inheritDoc}
     */
    public function getCountry()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCountry', []);

        return parent::getCountry();
    }

    /**
     * {@inheritDoc}
     */
    public function setCountry($country)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCountry', [$country]);

        return parent::setCountry($country);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet', []);

        return parent::getStreet();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet($street)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet', [$street]);

        return parent::setStreet($street);
    }

    /**
     * {@inheritDoc}
     */
    public function getStreet2()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getStreet2', []);

        return parent::getStreet2();
    }

    /**
     * {@inheritDoc}
     */
    public function setStreet2($street2)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setStreet2', [$street2]);

        return parent::setStreet2($street2);
    }

    /**
     * {@inheritDoc}
     */
    public function getCity()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCity', []);

        return parent::getCity();
    }

    /**
     * {@inheritDoc}
     */
    public function setCity($city)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCity', [$city]);

        return parent::setCity($city);
    }

    /**
     * {@inheritDoc}
     */
    public function getState()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getState', []);

        return parent::getState();
    }

    /**
     * {@inheritDoc}
     */
    public function setState($state)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setState', [$state]);

        return parent::setState($state);
    }

    /**
     * {@inheritDoc}
     */
    public function getPostalcode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPostalcode', []);

        return parent::getPostalcode();
    }

    /**
     * {@inheritDoc}
     */
    public function setPostalcode($postalcode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPostalcode', [$postalcode]);

        return parent::setPostalcode($postalcode);
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
    public function getOrder()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getOrder', []);

        return parent::getOrder();
    }

    /**
     * {@inheritDoc}
     */
    public function setOrder($order)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setOrder', [$order]);

        return parent::setOrder($order);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumber()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumber', []);

        return parent::getNumber();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumber($number)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumber', [$number]);

        return parent::setNumber($number);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientEmail', []);

        return parent::getClientEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientEmail($clientEmail)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientEmail', [$clientEmail]);

        return parent::setClientEmail($clientEmail);
    }

    /**
     * {@inheritDoc}
     */
    public function getClientId()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getClientId', []);

        return parent::getClientId();
    }

    /**
     * {@inheritDoc}
     */
    public function setClientId($clientId)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setClientId', [$clientId]);

        return parent::setClientId($clientId);
    }

    /**
     * {@inheritDoc}
     */
    public function getTotalAmount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTotalAmount', []);

        return parent::getTotalAmount();
    }

    /**
     * {@inheritDoc}
     */
    public function setTotalAmount($totalAmount)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTotalAmount', [$totalAmount]);

        return parent::setTotalAmount($totalAmount);
    }

    /**
     * {@inheritDoc}
     */
    public function getCurrencyCode()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCurrencyCode', []);

        return parent::getCurrencyCode();
    }

    /**
     * {@inheritDoc}
     */
    public function setCurrencyCode($currencyCode)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCurrencyCode', [$currencyCode]);

        return parent::setCurrencyCode($currencyCode);
    }

    /**
     * {@inheritDoc}
     */
    public function getDetails()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDetails', []);

        return parent::getDetails();
    }

    /**
     * {@inheritDoc}
     */
    public function setDetails($details)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDetails', [$details]);

        return parent::setDetails($details);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreditCard()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreditCard', []);

        return parent::getCreditCard();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreditCard(\Payum\Core\Model\CreditCardInterface $creditCard = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreditCard', [$creditCard]);

        return parent::setCreditCard($creditCard);
    }

    /**
     * {@inheritDoc}
     */
    public function getBankAccount()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBankAccount', []);

        return parent::getBankAccount();
    }

    /**
     * {@inheritDoc}
     */
    public function setBankAccount(\Payum\Core\Model\BankAccountInterface $bankAccount = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBankAccount', [$bankAccount]);

        return parent::setBankAccount($bankAccount);
    }

}
