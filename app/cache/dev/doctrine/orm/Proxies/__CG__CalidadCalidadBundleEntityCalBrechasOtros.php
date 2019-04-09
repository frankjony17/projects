<?php

namespace Proxies\__CG__\Calidad\CalidadBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class CalBrechasOtros extends \Calidad\CalidadBundle\Entity\CalBrechasOtros implements \Doctrine\ORM\Proxy\Proxy
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
            return array('__isInitialized__', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'id', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'nombre', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'participantes', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'fecha', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'observaciones', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'tipo', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'controlCalidad', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'planAccion', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'estado', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'trabajador');
        }

        return array('__isInitialized__', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'id', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'nombre', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'participantes', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'fecha', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'observaciones', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'tipo', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'controlCalidad', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'planAccion', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'estado', '' . "\0" . 'Calidad\\CalidadBundle\\Entity\\CalBrechasOtros' . "\0" . 'trabajador');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (CalBrechasOtros $proxy) {
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
    public function setNombre($nombre)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNombre', array($nombre));

        return parent::setNombre($nombre);
    }

    /**
     * {@inheritDoc}
     */
    public function getNombre()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNombre', array());

        return parent::getNombre();
    }

    /**
     * {@inheritDoc}
     */
    public function setParticipantes($participantes)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setParticipantes', array($participantes));

        return parent::setParticipantes($participantes);
    }

    /**
     * {@inheritDoc}
     */
    public function getParticipantes()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getParticipantes', array());

        return parent::getParticipantes();
    }

    /**
     * {@inheritDoc}
     */
    public function setFecha($fecha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFecha', array($fecha));

        return parent::setFecha($fecha);
    }

    /**
     * {@inheritDoc}
     */
    public function getFecha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFecha', array());

        return parent::getFecha();
    }

    /**
     * {@inheritDoc}
     */
    public function setObservaciones($observaciones)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setObservaciones', array($observaciones));

        return parent::setObservaciones($observaciones);
    }

    /**
     * {@inheritDoc}
     */
    public function getObservaciones()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getObservaciones', array());

        return parent::getObservaciones();
    }

    /**
     * {@inheritDoc}
     */
    public function setTipo($tipo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTipo', array($tipo));

        return parent::setTipo($tipo);
    }

    /**
     * {@inheritDoc}
     */
    public function getTipo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTipo', array());

        return parent::getTipo();
    }

    /**
     * {@inheritDoc}
     */
    public function setEstado($estado)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEstado', array($estado));

        return parent::setEstado($estado);
    }

    /**
     * {@inheritDoc}
     */
    public function getEstado()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEstado', array());

        return parent::getEstado();
    }

    /**
     * {@inheritDoc}
     */
    public function setControlCalidad(\Calidad\CalidadBundle\Entity\CalControlCalidad $controlCalidad = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setControlCalidad', array($controlCalidad));

        return parent::setControlCalidad($controlCalidad);
    }

    /**
     * {@inheritDoc}
     */
    public function getControlCalidad()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControlCalidad', array());

        return parent::getControlCalidad();
    }

    /**
     * {@inheritDoc}
     */
    public function addPlanAccion(\Calidad\CalidadBundle\Entity\CalPlanAccion $planAccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPlanAccion', array($planAccion));

        return parent::addPlanAccion($planAccion);
    }

    /**
     * {@inheritDoc}
     */
    public function removePlanAccion(\Calidad\CalidadBundle\Entity\CalPlanAccion $planAccion)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePlanAccion', array($planAccion));

        return parent::removePlanAccion($planAccion);
    }

    /**
     * {@inheritDoc}
     */
    public function getPlanAccion()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPlanAccion', array());

        return parent::getPlanAccion();
    }

    /**
     * {@inheritDoc}
     */
    public function addTrabajador(\Otros\NomencladorBundle\Entity\Trabajador $trabajador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addTrabajador', array($trabajador));

        return parent::addTrabajador($trabajador);
    }

    /**
     * {@inheritDoc}
     */
    public function removeTrabajador(\Otros\NomencladorBundle\Entity\Trabajador $trabajador)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeTrabajador', array($trabajador));

        return parent::removeTrabajador($trabajador);
    }

    /**
     * {@inheritDoc}
     */
    public function getTrabajador()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTrabajador', array());

        return parent::getTrabajador();
    }

    /**
     * {@inheritDoc}
     */
    public function toArray()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'toArray', array());

        return parent::toArray();
    }

}