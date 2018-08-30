<?php

class Customer extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=25, nullable=false)
     */
    public $listID;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $timeCreated;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $timeModified;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $editSequence;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $name;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $fullName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $isActive;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $classRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $classRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $parentRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $parentRef_FullName;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $sublevel;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $companyName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $salutation;

    /**
     *
     * @var string
     * @Column(type="string", length=55, nullable=false)
     */
    public $firstName;

    /**
     *
     * @var string
     * @Column(type="string", length=55, nullable=false)
     */
    public $middleName;

    /**
     *
     * @var string
     * @Column(type="string", length=55, nullable=false)
     */
    public $lastName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $suffix;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_Addr1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_Addr2;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_Addr3;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_Addr4;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_Addr5;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_City;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $billAddress_State;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $billAddress_PostalCode;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $billAddress_Country;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $billAddress_Note;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_Addr1;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_Addr2;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_Addr3;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_Addr4;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_Addr5;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_City;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $shipAddress_State;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $shipAddress_PostalCode;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $shipAddress_Country;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $shipAddress_Note;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $printAs;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $phone;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $mobile;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $pager;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $altPhone;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $fax;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $email;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $cc;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $contact;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $altContact;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $customerTypeRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $customerTypeRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $termsRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $termsRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $salesRepRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $salesRepRef_FullName;

    /**
     *
     * @var double
     * @Column(type="double", length=15, nullable=false)
     */
    public $balance;

    /**
     *
     * @var double
     * @Column(type="double", length=15, nullable=false)
     */
    public $totalBalance;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $salesTaxCodeRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $salesTaxCodeRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $itemSalesTaxRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $itemSalesTaxRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $salesTaxCountry;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $resaleNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $accountNumber;

    /**
     *
     * @var double
     * @Column(type="double", length=15, nullable=false)
     */
    public $creditLimit;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $preferredPaymentMethodRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $preferredPaymentMethodRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $creditCardNumber;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $expirationMonth;

    /**
     *
     * @var integer
     * @Column(type="integer", length=11, nullable=false)
     */
    public $expirationYear;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $nameOnCard;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $creditCardAddress;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $creditCardPostalCode;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $jobStatus;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $jobStartDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $jobProjectedEndDate;

    /**
     *
     * @var string
     * @Column(type="string", nullable=false)
     */
    public $jobEndDate;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $jobDesc;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $jobTypeRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $jobTypeRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $notes;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $priceLevelRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $priceLevelRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $taxRegistrationNumber;

    /**
     *
     * @var string
     * @Column(type="string", length=25, nullable=false)
     */
    public $currencyRef_ListID;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $currencyRef_FullName;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $isStatementWithParent;

    /**
     *
     * @var string
     * @Column(type="string", length=255, nullable=false)
     */
    public $preferredDeliveryMethod;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField1;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField2;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField3;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField4;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField5;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField6;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField7;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField8;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField9;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField10;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField11;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField12;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField13;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField14;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=false)
     */
    public $customField15;

    /**
     *
     * @var string
     * @Column(type="string", length=10, nullable=true)
     */
    public $status;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("carrillo_dbaurora");
        $this->setSource("customer");
        $this->hasMany('listID', 'Invoice', 'CustomerRef_ListID');
        $this->hasMany('listID', 'Creditmemo', 'CustomerRef_ListID');
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'customer';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Customer[]|Customer|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Customer|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
