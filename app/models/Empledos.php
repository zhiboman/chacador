<?php

class Empledos extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=522, nullable=false)
     */
    protected $huella;

    /**
     *
     * @var string
     * @Column(type="string", length=60, nullable=false)
     */
    protected $nombre;

    /**
     *
     * @var string
     * @Column(type="string", length=20, nullable=false)
     */
    protected $puesto;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $domicilio;

    /**
     *
     * @var string
     * @Column(type="string", length=60, nullable=false)
     */
    protected $telefono;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    protected $fechadeingreso;

    /**
     *
     * @var string
     * @Column(type="string", length=110, nullable=false)
     */
    protected $foto;

    /**
     * Method to set the value of field id
     *
     * @param integer $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Method to set the value of field huella
     *
     * @param string $huella
     * @return $this
     */
    public function setHuella($huella)
    {
        $this->huella = $huella;

        return $this;
    }

    /**
     * Method to set the value of field nombre
     *
     * @param string $nombre
     * @return $this
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Method to set the value of field puesto
     *
     * @param string $puesto
     * @return $this
     */
    public function setPuesto($puesto)
    {
        $this->puesto = $puesto;

        return $this;
    }

    /**
     * Method to set the value of field domicilio
     *
     * @param string $domicilio
     * @return $this
     */
    public function setDomicilio($domicilio)
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    /**
     * Method to set the value of field telefono
     *
     * @param string $telefono
     * @return $this
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Method to set the value of field fechadeingreso
     *
     * @param string $fechadeingreso
     * @return $this
     */
    public function setFechadeingreso($fechadeingreso)
    {
        $this->fechadeingreso = $fechadeingreso;

        return $this;
    }

    /**
     * Method to set the value of field foto
     *
     * @param string $foto
     * @return $this
     */
    public function setFoto($foto)
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * Returns the value of field id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Returns the value of field huella
     *
     * @return string
     */
    public function getHuella()
    {
        return $this->huella;
    }

    /**
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field puesto
     *
     * @return string
     */
    public function getPuesto()
    {
        return $this->puesto;
    }

    /**
     * Returns the value of field domicilio
     *
     * @return string
     */
    public function getDomicilio()
    {
        return $this->domicilio;
    }

    /**
     * Returns the value of field telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Returns the value of field fechadeingreso
     *
     * @return string
     */
    public function getFechadeingreso()
    {
        return $this->fechadeingreso;
    }

    /**
     * Returns the value of field foto
     *
     * @return string
     */
    public function getFoto()
    {
        return $this->foto;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("huella-aa");
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Empledos[]|Empledos
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Empledos
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

    /**
     * Independent Column Mapping.
     * Keys are the real names in the table and the values their names in the application
     *
     * @return array
     */
    public function columnMap()
    {
        return [
            'id' => 'id',
            'huella' => 'huella',
            'nombre' => 'nombre',
            'puesto' => 'puesto',
            'domicilio' => 'domicilio',
            'telefono' => 'telefono',
            'fechadeingreso' => 'fechadeingreso',
            'foto' => 'foto'
        ];
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'empledos';
    }

}
