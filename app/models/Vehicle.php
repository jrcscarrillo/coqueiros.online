<?php

class Vehicle extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    protected $ListID;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $TimeCreated;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    protected $TimeModified;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    protected $EditSequence;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $Name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=false)
     */
    protected $IsActive;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    protected $Description;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    protected $Status;

    /**
     * Method to set the value of field listID
     *
     * @param string $listID
     * @return $this
     */
    public function setListID($listID)
    {
        $this->ListID = $listID;

        return $this;
    }

    /**
     * Method to set the value of field timeCreated
     *
     * @param string $timeCreated
     * @return $this
     */
    public function setTimeCreated($timeCreated)
    {
        $this->TimeCreated = $timeCreated;

        return $this;
    }

    /**
     * Method to set the value of field timeModified
     *
     * @param string $timeModified
     * @return $this
     */
    public function setTimeModified($timeModified)
    {
        $this->TimeModified = $timeModified;

        return $this;
    }

    /**
     * Method to set the value of field editSequence
     *
     * @param integer $editSequence
     * @return $this
     */
    public function setEditSequence($editSequence)
    {
        $this->EditSequence = $editSequence;

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
        $this->Name = $name;

        return $this;
    }

    /**
     * Method to set the value of field isActive
     *
     * @param integer $isActive
     * @return $this
     */
    public function setIsActive($isActive)
    {
        $this->IsActive = $isActive;

        return $this;
    }

    /**
     * Method to set the value of field description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->Description = $description;

        return $this;
    }

    /**
     * Method to set the value of field status
     *
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->Status = $status;

        return $this;
    }

    /**
     * Returns the value of field listID
     *
     * @return string
     */
    public function getListID()
    {
        return $this->ListID;
    }

    /**
     * Returns the value of field timeCreated
     *
     * @return string
     */
    public function getTimeCreated()
    {
        return $this->TimeCreated;
    }

    /**
     * Returns the value of field timeModified
     *
     * @return string
     */
    public function getTimeModified()
    {
        return $this->TimeModified;
    }

    /**
     * Returns the value of field editSequence
     *
     * @return integer
     */
    public function getEditSequence()
    {
        return $this->EditSequence;
    }

    /**
     * Returns the value of field name
     *
     * @return string
     */
    public function getName()
    {
        return $this->Name;
    }

    /**
     * Returns the value of field isActive
     *
     * @return integer
     */
    public function getIsActive()
    {
        return $this->IsActive;
    }

    /**
     * Returns the value of field description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Returns the value of field status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("carrillo_dbaurora");
        $this->setSource("vehicle");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'vehicle';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicle[]|Vehicle|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Vehicle|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
