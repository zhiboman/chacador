<?php

use Phalcon\Mvc\Model\Validator\Email as EmailValidator;

class Admin extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $nombre;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=false)
     */
    protected $contrasena;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $d1;

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
     * Method to set the value of field email
     *
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Method to set the value of field contrasena
     *
     * @param string $contrasena
     * @return $this
     */
    public function setContrasena($contrasena)
    {
        $this->contrasena = $contrasena;

        return $this;
    }

    /**
     * Method to set the value of field d1
     *
     * @param integer $d1
     * @return $this
     */
    public function setD1($d1)
    {
        $this->d1 = $d1;

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
     * Returns the value of field nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Returns the value of field email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Returns the value of field contrasena
     *
     * @return string
     */
    public function getContrasena()
    {
        return $this->contrasena;
    }

    /**
     * Returns the value of field d1
     *
     * @return integer
     */
    public function getD1()
    {
        return $this->d1;
    }

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
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
     * @return Admin[]|Admin
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Admin
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
            'nombre' => 'nombre',
            'email' => 'email',
            'contrasena' => 'contrasena',
            'd1' => 'd1'
        ];
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'admin';
    }

}
