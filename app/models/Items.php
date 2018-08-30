<?php

class Items extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     * @Primary
     * @Identity
     * @Column(type="integer", length=32, nullable=false)
     */
    public $id;

    /**
     *
     * @var string
     * @Column(type="string", length=64, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=128, nullable=true)
     */
    public $fullname;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $description;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $quickbooks_listid;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $quickbooks_editsequence;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $quickbooks_errnum;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $quickbooks_errmsg;

    /**
     *
     * @var integer
     * @Column(type="integer", length=1, nullable=true)
     */
    public $is_active;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $parent_reference_listid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $parent_reference_full_name;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=true)
     */
    public $sublevel;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $unit_of_measure_set_ref_listid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $unit_of_measure_set_ref_fullname;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $type;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $sales_tax_code_ref_listid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $sales_tax_code_ref_fullname;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $sales_desc;

    /**
     *
     * @var double
     * @Column(type="double", length=11, nullable=true)
     */
    public $sales_price;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $income_account_ref_listid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $income_account_ref_fullname;

    /**
     *
     * @var double
     * @Column(type="double", length=11, nullable=true)
     */
    public $purchase_cost;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $cOGS_account_ref_listid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $cOGS_account_ref_fullname;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=true)
     */
    public $assests_account_ref_listid;

    /**
     *
     * @var string
     * @Column(type="string", length=256, nullable=true)
     */
    public $assests_acc;

    /**
     *
     * @var string
     * @Column(type="string", nullable=true)
     */
    public $purchase_desc;

    /**
     *
     * @var double
     * @Column(type="double", length=11, nullable=false)
     */
    public $quantityOnHand;

    /**
     *
     * @var double
     * @Column(type="double", length=11, nullable=false)
     */
    public $quantityOnOrder;

    /**
     *
     * @var double
     * @Column(type="double", length=11, nullable=false)
     */
    public $quantityOnSalesOrder;

    /**
     *
     * @var double
     * @Column(type="double", length=11, nullable=false)
     */
    public $averageCost;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("carrillo_dbaurora");
        $this->setSource("items");
        $this->hasMany(
           'quickbooks_listid',
           'invoicelinedetail',
           'ItemRef_ListID'
           );
        
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'items';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Items[]|Items|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Items|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
