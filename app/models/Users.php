<?php


class Users extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $id;

    /**
     *
     * @var string
     * @Column(type="string", length=15, nullable=false)
     */
    protected $tipo;

    /**
     *
     * @var string
     * @Column(type="string", length=32, nullable=false)
     */
    protected $username;

    /**
     *
     * @var string
     * @Column(type="string", length=160, nullable=false)
     */
    protected $password;

    /**
     *
     * @var string
     * @Column(type="string", length=11, nullable=false)
     */
    protected $tipoId;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    protected $numeroId;

    /**
     *
     * @var string
     * @Column(type="string", length=120, nullable=false)
     */
    protected $name;

    /**
     *
     * @var string
     * @Column(type="string", length=70, nullable=false)
     */
    protected $email;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $createdAt;

    /**
     *
     * @var string
     * @Column(type="string", length=1, nullable=false)
     */
    protected $active;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    protected $qbid;

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
     * Method to set the value of field tipo
     *
     * @param string $tipo
     * @return $this
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

        return $this;
    }

    /**
     * Method to set the value of field username
     *
     * @param string $username
     * @return $this
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Method to set the value of field password
     *
     * @param string $password
     * @return $this
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Method to set the value of field tipoId
     *
     * @param string $tipoId
     * @return $this
     */
    public function setTipoId($tipoId)
    {
        $this->tipoId = $tipoId;

        return $this;
    }

    /**
     * Method to set the value of field numeroId
     *
     * @param string $numeroId
     * @return $this
     */
    public function setNumeroId($numeroId)
    {
        $this->numeroId = $numeroId;

        return $this;
    }

    /**
     * Method to set the value of field name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->name = $name;

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
     * Method to set the value of field createdAt
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Method to set the value of field active
     *
     * @param string $active
     * @return $this
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Method to set the value of field qbid
     *
     * @param string $qbid
     * @return $this
     */
    public function setQbid($qbid)
    {
        $this->qbid = $qbid;

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
     * Returns the value of field tipo
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * Returns the value of field username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Returns the value of field password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Returns the value of field tipoId
     *
     * @return string
     */
    public function getTipoId()
    {
        return $this->tipoId;
    }

    /**
     * Returns the value of field numeroId
     *
     * @return string
     */
    public function getNumeroId()
    {
        return $this->numeroId;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
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
     * Returns the value of field createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Returns the value of field active
     *
     * @return string
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Returns the value of field qbid
     *
     * @return string
     */
    public function getQbid()
    {
        return $this->qbid;
    }

    public function initialize() {
        $this->setSchema("carrillo_dbaurora");
        $this->setSource("users");

    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users[]|Users
     */
    public static function find($parameters = null) {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Users
     */
    public static function findFirst($parameters = null) {
        return parent::findFirst($parameters);
    }

    public function getSource()
    {
        return 'users';
    }

}
