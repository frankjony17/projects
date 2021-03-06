<?php

namespace Calidad\CalidadBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CalControlCalidad
 *
 * @ORM\Table(name="cal_control_calidad", indexes={@ORM\Index(name="IDX_4A585066D5563D5", columns={"uo_id"}), @ORM\Index(name="IDX_4A585066938EDC0", columns={"control_tipo_id"})})
 * @ORM\Entity
 */
class CalControlCalidad
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="ejecutores", type="text", nullable=false)
     */
    private $ejecutores;

    /**
     * @var \UnidadOrganizativa
     *
     * @ORM\ManyToOne(targetEntity="\Otros\NomencladorBundle\Entity\UnidadOrganizativa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="uo_id", referencedColumnName="id")
     * })
     */
    private $uo;

    /**
     * @var \CalControlTipo
     *
     * @ORM\ManyToOne(targetEntity="CalControlTipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="control_tipo_id", referencedColumnName="id")
     * })
     */
    private $controlTipo;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return CalControlCalidad
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set ejecutores
     *
     * @param string $ejecutores
     * @return CalControlCalidad
     */
    public function setEjecutores($ejecutores)
    {
        $this->ejecutores = $ejecutores;

        return $this;
    }

    /**
     * Get ejecutores
     *
     * @return string 
     */
    public function getEjecutores()
    {
        return $this->ejecutores;
    }

    /**
     * Set uo
     *
     * @param \Otros\NomencladorBundle\Entity\UnidadOrganizativa $uo
     * @return CalControlCalidad
     */
    public function setUo(\Otros\NomencladorBundle\Entity\UnidadOrganizativa $uo = null)
    {
        $this->uo = $uo;

        return $this;
    }

    /**
     * Get uo
     *
     * @return \Otros\NomencladorBundle\Entity\UnidadOrganizativa 
     */
    public function getUo()
    {
        return $this->uo;
    }

    /**
     * Set controlTipo
     *
     * @param \Calidad\CalidadBundle\Entity\CalControlTipo $controlTipo
     * @return CalControlCalidad
     */
    public function setControlTipo(\Calidad\CalidadBundle\Entity\CalControlTipo $controlTipo = null)
    {
        $this->controlTipo = $controlTipo;

        return $this;
    }

    /**
     * Get controlTipo
     *
     * @return \Calidad\CalidadBundle\Entity\CalControlTipo 
     */
    public function getControlTipo()
    {
        return $this->controlTipo;
    }

    /**
     * Get Array Row
     *
     * @return array
     */
    public function toArray()
    {
        return array (
            'id' => $this->id,
            'fecha' => $this->getFecha()->format("Y-m-d"),
            'tipo' => $this->getControlTipo()->getNombre(),
            'nombre' => $this->getFecha()->format("Y-m-d") ." | ". $this->getControlTipo()->getNombre(),
            'ejecutores' => $this->getEjecutores()
        );
    }
}
