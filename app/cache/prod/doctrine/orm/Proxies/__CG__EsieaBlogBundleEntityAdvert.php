<?php

namespace Proxies\__CG__\Esiea\BlogBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Advert extends \Esiea\BlogBundle\Entity\Advert implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
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
            return array('__isInitialized__', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'id', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'titre', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'auteur', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'date', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'ingredients', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'preparation', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'image');
        }

        return array('__isInitialized__', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'id', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'titre', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'auteur', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'date', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'ingredients', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'preparation', '' . "\0" . 'Esiea\\BlogBundle\\Entity\\Advert' . "\0" . 'image');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Advert $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setTitre($titre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTitre', array($titre));

        return parent::setTitre($titre);
    }

    /**
     * {@inheritDoc}
     */
    public function getTitre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTitre', array());

        return parent::getTitre();
    }

    /**
     * {@inheritDoc}
     */
    public function setAuteur($auteur)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAuteur', array($auteur));

        return parent::setAuteur($auteur);
    }

    /**
     * {@inheritDoc}
     */
    public function getAuteur()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAuteur', array());

        return parent::getAuteur();
    }

    /**
     * {@inheritDoc}
     */
    public function setDate($date)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDate', array($date));

        return parent::setDate($date);
    }

    /**
     * {@inheritDoc}
     */
    public function getDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDate', array());

        return parent::getDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setIngredients($ingredients)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIngredients', array($ingredients));

        return parent::setIngredients($ingredients);
    }

    /**
     * {@inheritDoc}
     */
    public function getIngredients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getIngredients', array());

        return parent::getIngredients();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreparation($preparation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreparation', array($preparation));

        return parent::setPreparation($preparation);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreparation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreparation', array());

        return parent::getPreparation();
    }

    /**
     * {@inheritDoc}
     */
    public function setImage($image)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setImage', array($image));

        return parent::setImage($image);
    }

    /**
     * {@inheritDoc}
     */
    public function getImage()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getImage', array());

        return parent::getImage();
    }

}
