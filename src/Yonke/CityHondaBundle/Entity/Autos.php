<?php

namespace Yonke\CityHondaBundle\Entity;

/**
 * Autos
 */
class Autos
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $marca;

    /**
     * @var string
     */
    private $modelo;

    /**
     * @var int
     */
    private $ano;

    /**
     * @var string
     */
    private $transmision;

    /**
     * @var string
     */
    private $motor;

    /**
     * @var string
     */
    private $foto;

    /**
     * @var string
     */
    private $detalles;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set marca
     *
     * @param string $marca
     *
     * @return Autos
     */
    public function setMarca($marca)
    {
        $this->marca = $marca;

        return $this;
    }

    /**
     * Get marca
     *
     * @return string
     */
    public function getMarca()
    {
        return $this->marca;
    }

    /**
     * Set modelo
     *
     * @param string $modelo
     *
     * @return Autos
     */
    public function setModelo($modelo)
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get modelo
     *
     * @return string
     */
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set ano
     *
     * @param integer $ano
     *
     * @return Autos
     */
    public function setAno($ano)
    {
        $this->ano = $ano;

        return $this;
    }

    /**
     * Get ano
     *
     * @return int
     */
    public function getAno()
    {
        return $this->ano;
    }

    /**
     * Set transmision
     *
     * @param string $transmision
     *
     * @return Autos
     */
    public function setTransmision($transmision)
    {
        $this->transmision = $transmision;

        return $this;
    }

    /**
     * Get transmision
     *
     * @return string
     */
    public function getTransmision()
    {
        return $this->transmision;
    }

    /**
     * Set motor
     *
     * @param string $motor
     *
     * @return Autos
     */
    public function setMotor($motor)
    {
        $this->motor = $motor;

        return $this;
    }

    /**
     * Get motor
     *
     * @return string
     */
    public function getMotor()
    {
        return $this->motor;
    }

    /**
     * Set foto
     *
     * @param string $foto
     *
     * @return Autos
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Get foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Set detalles
     *
     * @param string $detalles
     *
     * @return Autos
     */
    public function setDetalles($detalles)
    {
        $this->detalles = $detalles;

        return $this;
    }

    /**
     * Get detalles
     *
     * @return string
     */
    public function getDetalles()
    {
        return $this->detalles;
    }
}

