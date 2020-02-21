<?php
/**
 * Order
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MyYoast server
 *
 * The MyYoast server NestJS Api
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yoast\MyYoastApiClient\Model;

use \ArrayAccess;
use \Yoast\MyYoastApiClient\ObjectSerializer;

/**
 * Order Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Order implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Order';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'countryOfOrigin' => 'string',
        'id' => 'string',
        'totalAmount' => 'int',
        'subtotalAmount' => 'int',
        'date' => '\DateTime',
        'vatNumber' => 'string',
        'paymentProvider' => 'string',
        'paymentGateway' => 'string',
        'paymentReference' => 'string',
        'vatTotal' => 'int',
        'discountTotal' => 'int',
        'glNumber' => 'string',
        'status' => 'string',
        'sourceId' => 'int',
        'sourceShopId' => 'int',
        'invoiceNumber' => 'string',
        'currency' => 'string',
        'customerEmail' => 'string',
        'customerFirstName' => 'string',
        'customerLastName' => 'string',
        'customerCompany' => 'string',
        'customerPhone' => 'string',
        'addressLine1' => 'string',
        'addressLine2' => 'string',
        'addressCity' => 'string',
        'addressState' => 'string',
        'addressZipcode' => 'string',
        'addressCountry' => 'string',
        'excludeFromRevenue' => 'bool',
        'createdAt' => '\DateTime',
        'modifiedAt' => '\DateTime',
        'renewal' => 'bool',
        'automatic' => 'bool',
        'billingType' => 'string',
        'ipAddress' => 'string',
        'customerId' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'countryOfOrigin' => null,
        'id' => 'uuid',
        'totalAmount' => null,
        'subtotalAmount' => null,
        'date' => 'date-time',
        'vatNumber' => null,
        'paymentProvider' => null,
        'paymentGateway' => null,
        'paymentReference' => null,
        'vatTotal' => null,
        'discountTotal' => null,
        'glNumber' => null,
        'status' => null,
        'sourceId' => null,
        'sourceShopId' => null,
        'invoiceNumber' => null,
        'currency' => null,
        'customerEmail' => 'email',
        'customerFirstName' => null,
        'customerLastName' => null,
        'customerCompany' => null,
        'customerPhone' => null,
        'addressLine1' => null,
        'addressLine2' => null,
        'addressCity' => null,
        'addressState' => null,
        'addressZipcode' => null,
        'addressCountry' => null,
        'excludeFromRevenue' => null,
        'createdAt' => 'date-time',
        'modifiedAt' => 'date-time',
        'renewal' => null,
        'automatic' => null,
        'billingType' => null,
        'ipAddress' => null,
        'customerId' => 'uuid'
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'countryOfOrigin' => 'countryOfOrigin',
        'id' => 'id',
        'totalAmount' => 'totalAmount',
        'subtotalAmount' => 'subtotalAmount',
        'date' => 'date',
        'vatNumber' => 'vatNumber',
        'paymentProvider' => 'paymentProvider',
        'paymentGateway' => 'paymentGateway',
        'paymentReference' => 'paymentReference',
        'vatTotal' => 'vatTotal',
        'discountTotal' => 'discountTotal',
        'glNumber' => 'glNumber',
        'status' => 'status',
        'sourceId' => 'sourceId',
        'sourceShopId' => 'sourceShopId',
        'invoiceNumber' => 'invoiceNumber',
        'currency' => 'currency',
        'customerEmail' => 'customerEmail',
        'customerFirstName' => 'customerFirstName',
        'customerLastName' => 'customerLastName',
        'customerCompany' => 'customerCompany',
        'customerPhone' => 'customerPhone',
        'addressLine1' => 'addressLine1',
        'addressLine2' => 'addressLine2',
        'addressCity' => 'addressCity',
        'addressState' => 'addressState',
        'addressZipcode' => 'addressZipcode',
        'addressCountry' => 'addressCountry',
        'excludeFromRevenue' => 'excludeFromRevenue',
        'createdAt' => 'createdAt',
        'modifiedAt' => 'modifiedAt',
        'renewal' => 'renewal',
        'automatic' => 'automatic',
        'billingType' => 'billingType',
        'ipAddress' => 'ipAddress',
        'customerId' => 'customerId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'countryOfOrigin' => 'setCountryOfOrigin',
        'id' => 'setId',
        'totalAmount' => 'setTotalAmount',
        'subtotalAmount' => 'setSubtotalAmount',
        'date' => 'setDate',
        'vatNumber' => 'setVatNumber',
        'paymentProvider' => 'setPaymentProvider',
        'paymentGateway' => 'setPaymentGateway',
        'paymentReference' => 'setPaymentReference',
        'vatTotal' => 'setVatTotal',
        'discountTotal' => 'setDiscountTotal',
        'glNumber' => 'setGlNumber',
        'status' => 'setStatus',
        'sourceId' => 'setSourceId',
        'sourceShopId' => 'setSourceShopId',
        'invoiceNumber' => 'setInvoiceNumber',
        'currency' => 'setCurrency',
        'customerEmail' => 'setCustomerEmail',
        'customerFirstName' => 'setCustomerFirstName',
        'customerLastName' => 'setCustomerLastName',
        'customerCompany' => 'setCustomerCompany',
        'customerPhone' => 'setCustomerPhone',
        'addressLine1' => 'setAddressLine1',
        'addressLine2' => 'setAddressLine2',
        'addressCity' => 'setAddressCity',
        'addressState' => 'setAddressState',
        'addressZipcode' => 'setAddressZipcode',
        'addressCountry' => 'setAddressCountry',
        'excludeFromRevenue' => 'setExcludeFromRevenue',
        'createdAt' => 'setCreatedAt',
        'modifiedAt' => 'setModifiedAt',
        'renewal' => 'setRenewal',
        'automatic' => 'setAutomatic',
        'billingType' => 'setBillingType',
        'ipAddress' => 'setIpAddress',
        'customerId' => 'setCustomerId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'countryOfOrigin' => 'getCountryOfOrigin',
        'id' => 'getId',
        'totalAmount' => 'getTotalAmount',
        'subtotalAmount' => 'getSubtotalAmount',
        'date' => 'getDate',
        'vatNumber' => 'getVatNumber',
        'paymentProvider' => 'getPaymentProvider',
        'paymentGateway' => 'getPaymentGateway',
        'paymentReference' => 'getPaymentReference',
        'vatTotal' => 'getVatTotal',
        'discountTotal' => 'getDiscountTotal',
        'glNumber' => 'getGlNumber',
        'status' => 'getStatus',
        'sourceId' => 'getSourceId',
        'sourceShopId' => 'getSourceShopId',
        'invoiceNumber' => 'getInvoiceNumber',
        'currency' => 'getCurrency',
        'customerEmail' => 'getCustomerEmail',
        'customerFirstName' => 'getCustomerFirstName',
        'customerLastName' => 'getCustomerLastName',
        'customerCompany' => 'getCustomerCompany',
        'customerPhone' => 'getCustomerPhone',
        'addressLine1' => 'getAddressLine1',
        'addressLine2' => 'getAddressLine2',
        'addressCity' => 'getAddressCity',
        'addressState' => 'getAddressState',
        'addressZipcode' => 'getAddressZipcode',
        'addressCountry' => 'getAddressCountry',
        'excludeFromRevenue' => 'getExcludeFromRevenue',
        'createdAt' => 'getCreatedAt',
        'modifiedAt' => 'getModifiedAt',
        'renewal' => 'getRenewal',
        'automatic' => 'getAutomatic',
        'billingType' => 'getBillingType',
        'ipAddress' => 'getIpAddress',
        'customerId' => 'getCustomerId'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['countryOfOrigin'] = isset($data['countryOfOrigin']) ? $data['countryOfOrigin'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['totalAmount'] = isset($data['totalAmount']) ? $data['totalAmount'] : null;
        $this->container['subtotalAmount'] = isset($data['subtotalAmount']) ? $data['subtotalAmount'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['vatNumber'] = isset($data['vatNumber']) ? $data['vatNumber'] : null;
        $this->container['paymentProvider'] = isset($data['paymentProvider']) ? $data['paymentProvider'] : null;
        $this->container['paymentGateway'] = isset($data['paymentGateway']) ? $data['paymentGateway'] : null;
        $this->container['paymentReference'] = isset($data['paymentReference']) ? $data['paymentReference'] : null;
        $this->container['vatTotal'] = isset($data['vatTotal']) ? $data['vatTotal'] : null;
        $this->container['discountTotal'] = isset($data['discountTotal']) ? $data['discountTotal'] : null;
        $this->container['glNumber'] = isset($data['glNumber']) ? $data['glNumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceShopId'] = isset($data['sourceShopId']) ? $data['sourceShopId'] : null;
        $this->container['invoiceNumber'] = isset($data['invoiceNumber']) ? $data['invoiceNumber'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customerEmail'] = isset($data['customerEmail']) ? $data['customerEmail'] : null;
        $this->container['customerFirstName'] = isset($data['customerFirstName']) ? $data['customerFirstName'] : null;
        $this->container['customerLastName'] = isset($data['customerLastName']) ? $data['customerLastName'] : null;
        $this->container['customerCompany'] = isset($data['customerCompany']) ? $data['customerCompany'] : null;
        $this->container['customerPhone'] = isset($data['customerPhone']) ? $data['customerPhone'] : null;
        $this->container['addressLine1'] = isset($data['addressLine1']) ? $data['addressLine1'] : null;
        $this->container['addressLine2'] = isset($data['addressLine2']) ? $data['addressLine2'] : null;
        $this->container['addressCity'] = isset($data['addressCity']) ? $data['addressCity'] : null;
        $this->container['addressState'] = isset($data['addressState']) ? $data['addressState'] : null;
        $this->container['addressZipcode'] = isset($data['addressZipcode']) ? $data['addressZipcode'] : null;
        $this->container['addressCountry'] = isset($data['addressCountry']) ? $data['addressCountry'] : null;
        $this->container['excludeFromRevenue'] = isset($data['excludeFromRevenue']) ? $data['excludeFromRevenue'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['renewal'] = isset($data['renewal']) ? $data['renewal'] : null;
        $this->container['automatic'] = isset($data['automatic']) ? $data['automatic'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['ipAddress'] = isset($data['ipAddress']) ? $data['ipAddress'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['countryOfOrigin'] === null) {
            $invalidProperties[] = "'countryOfOrigin' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['totalAmount'] === null) {
            $invalidProperties[] = "'totalAmount' can't be null";
        }
        if ($this->container['subtotalAmount'] === null) {
            $invalidProperties[] = "'subtotalAmount' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['vatNumber'] === null) {
            $invalidProperties[] = "'vatNumber' can't be null";
        }
        if ($this->container['paymentProvider'] === null) {
            $invalidProperties[] = "'paymentProvider' can't be null";
        }
        if ($this->container['paymentGateway'] === null) {
            $invalidProperties[] = "'paymentGateway' can't be null";
        }
        if ($this->container['paymentReference'] === null) {
            $invalidProperties[] = "'paymentReference' can't be null";
        }
        if ($this->container['vatTotal'] === null) {
            $invalidProperties[] = "'vatTotal' can't be null";
        }
        if ($this->container['discountTotal'] === null) {
            $invalidProperties[] = "'discountTotal' can't be null";
        }
        if ($this->container['glNumber'] === null) {
            $invalidProperties[] = "'glNumber' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['sourceShopId'] === null) {
            $invalidProperties[] = "'sourceShopId' can't be null";
        }
        if ($this->container['invoiceNumber'] === null) {
            $invalidProperties[] = "'invoiceNumber' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['customerEmail'] === null) {
            $invalidProperties[] = "'customerEmail' can't be null";
        }
        if ($this->container['customerFirstName'] === null) {
            $invalidProperties[] = "'customerFirstName' can't be null";
        }
        if ($this->container['customerLastName'] === null) {
            $invalidProperties[] = "'customerLastName' can't be null";
        }
        if ($this->container['customerCompany'] === null) {
            $invalidProperties[] = "'customerCompany' can't be null";
        }
        if ($this->container['customerPhone'] === null) {
            $invalidProperties[] = "'customerPhone' can't be null";
        }
        if ($this->container['addressLine1'] === null) {
            $invalidProperties[] = "'addressLine1' can't be null";
        }
        if ($this->container['addressLine2'] === null) {
            $invalidProperties[] = "'addressLine2' can't be null";
        }
        if ($this->container['addressCity'] === null) {
            $invalidProperties[] = "'addressCity' can't be null";
        }
        if ($this->container['addressState'] === null) {
            $invalidProperties[] = "'addressState' can't be null";
        }
        if ($this->container['addressZipcode'] === null) {
            $invalidProperties[] = "'addressZipcode' can't be null";
        }
        if ($this->container['addressCountry'] === null) {
            $invalidProperties[] = "'addressCountry' can't be null";
        }
        if ($this->container['excludeFromRevenue'] === null) {
            $invalidProperties[] = "'excludeFromRevenue' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['renewal'] === null) {
            $invalidProperties[] = "'renewal' can't be null";
        }
        if ($this->container['automatic'] === null) {
            $invalidProperties[] = "'automatic' can't be null";
        }
        if ($this->container['billingType'] === null) {
            $invalidProperties[] = "'billingType' can't be null";
        }
        if ($this->container['ipAddress'] === null) {
            $invalidProperties[] = "'ipAddress' can't be null";
        }
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets countryOfOrigin
     *
     * @return string
     */
    public function getCountryOfOrigin()
    {
        return $this->container['countryOfOrigin'];
    }

    /**
     * Sets countryOfOrigin
     *
     * @param string $countryOfOrigin countryOfOrigin
     *
     * @return $this
     */
    public function setCountryOfOrigin($countryOfOrigin)
    {
        $this->container['countryOfOrigin'] = $countryOfOrigin;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets totalAmount
     *
     * @return int
     */
    public function getTotalAmount()
    {
        return $this->container['totalAmount'];
    }

    /**
     * Sets totalAmount
     *
     * @param int $totalAmount totalAmount
     *
     * @return $this
     */
    public function setTotalAmount($totalAmount)
    {
        $this->container['totalAmount'] = $totalAmount;

        return $this;
    }

    /**
     * Gets subtotalAmount
     *
     * @return int
     */
    public function getSubtotalAmount()
    {
        return $this->container['subtotalAmount'];
    }

    /**
     * Sets subtotalAmount
     *
     * @param int $subtotalAmount subtotalAmount
     *
     * @return $this
     */
    public function setSubtotalAmount($subtotalAmount)
    {
        $this->container['subtotalAmount'] = $subtotalAmount;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string $vatNumber vatNumber
     *
     * @return $this
     */
    public function setVatNumber($vatNumber)
    {
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets paymentProvider
     *
     * @return string
     */
    public function getPaymentProvider()
    {
        return $this->container['paymentProvider'];
    }

    /**
     * Sets paymentProvider
     *
     * @param string $paymentProvider paymentProvider
     *
     * @return $this
     */
    public function setPaymentProvider($paymentProvider)
    {
        $this->container['paymentProvider'] = $paymentProvider;

        return $this;
    }

    /**
     * Gets paymentGateway
     *
     * @return string
     */
    public function getPaymentGateway()
    {
        return $this->container['paymentGateway'];
    }

    /**
     * Sets paymentGateway
     *
     * @param string $paymentGateway paymentGateway
     *
     * @return $this
     */
    public function setPaymentGateway($paymentGateway)
    {
        $this->container['paymentGateway'] = $paymentGateway;

        return $this;
    }

    /**
     * Gets paymentReference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['paymentReference'];
    }

    /**
     * Sets paymentReference
     *
     * @param string $paymentReference paymentReference
     *
     * @return $this
     */
    public function setPaymentReference($paymentReference)
    {
        $this->container['paymentReference'] = $paymentReference;

        return $this;
    }

    /**
     * Gets vatTotal
     *
     * @return int
     */
    public function getVatTotal()
    {
        return $this->container['vatTotal'];
    }

    /**
     * Sets vatTotal
     *
     * @param int $vatTotal vatTotal
     *
     * @return $this
     */
    public function setVatTotal($vatTotal)
    {
        $this->container['vatTotal'] = $vatTotal;

        return $this;
    }

    /**
     * Gets discountTotal
     *
     * @return int
     */
    public function getDiscountTotal()
    {
        return $this->container['discountTotal'];
    }

    /**
     * Sets discountTotal
     *
     * @param int $discountTotal discountTotal
     *
     * @return $this
     */
    public function setDiscountTotal($discountTotal)
    {
        $this->container['discountTotal'] = $discountTotal;

        return $this;
    }

    /**
     * Gets glNumber
     *
     * @return string
     */
    public function getGlNumber()
    {
        return $this->container['glNumber'];
    }

    /**
     * Sets glNumber
     *
     * @param string $glNumber glNumber
     *
     * @return $this
     */
    public function setGlNumber($glNumber)
    {
        $this->container['glNumber'] = $glNumber;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets sourceId
     *
     * @return int
     */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
     * Sets sourceId
     *
     * @param int $sourceId sourceId
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;

        return $this;
    }

    /**
     * Gets sourceShopId
     *
     * @return int
     */
    public function getSourceShopId()
    {
        return $this->container['sourceShopId'];
    }

    /**
     * Sets sourceShopId
     *
     * @param int $sourceShopId sourceShopId
     *
     * @return $this
     */
    public function setSourceShopId($sourceShopId)
    {
        $this->container['sourceShopId'] = $sourceShopId;

        return $this;
    }

    /**
     * Gets invoiceNumber
     *
     * @return string
     */
    public function getInvoiceNumber()
    {
        return $this->container['invoiceNumber'];
    }

    /**
     * Sets invoiceNumber
     *
     * @param string $invoiceNumber invoiceNumber
     *
     * @return $this
     */
    public function setInvoiceNumber($invoiceNumber)
    {
        $this->container['invoiceNumber'] = $invoiceNumber;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets customerEmail
     *
     * @return string
     */
    public function getCustomerEmail()
    {
        return $this->container['customerEmail'];
    }

    /**
     * Sets customerEmail
     *
     * @param string $customerEmail customerEmail
     *
     * @return $this
     */
    public function setCustomerEmail($customerEmail)
    {
        $this->container['customerEmail'] = $customerEmail;

        return $this;
    }

    /**
     * Gets customerFirstName
     *
     * @return string
     */
    public function getCustomerFirstName()
    {
        return $this->container['customerFirstName'];
    }

    /**
     * Sets customerFirstName
     *
     * @param string $customerFirstName customerFirstName
     *
     * @return $this
     */
    public function setCustomerFirstName($customerFirstName)
    {
        $this->container['customerFirstName'] = $customerFirstName;

        return $this;
    }

    /**
     * Gets customerLastName
     *
     * @return string
     */
    public function getCustomerLastName()
    {
        return $this->container['customerLastName'];
    }

    /**
     * Sets customerLastName
     *
     * @param string $customerLastName customerLastName
     *
     * @return $this
     */
    public function setCustomerLastName($customerLastName)
    {
        $this->container['customerLastName'] = $customerLastName;

        return $this;
    }

    /**
     * Gets customerCompany
     *
     * @return string
     */
    public function getCustomerCompany()
    {
        return $this->container['customerCompany'];
    }

    /**
     * Sets customerCompany
     *
     * @param string $customerCompany customerCompany
     *
     * @return $this
     */
    public function setCustomerCompany($customerCompany)
    {
        $this->container['customerCompany'] = $customerCompany;

        return $this;
    }

    /**
     * Gets customerPhone
     *
     * @return string
     */
    public function getCustomerPhone()
    {
        return $this->container['customerPhone'];
    }

    /**
     * Sets customerPhone
     *
     * @param string $customerPhone customerPhone
     *
     * @return $this
     */
    public function setCustomerPhone($customerPhone)
    {
        $this->container['customerPhone'] = $customerPhone;

        return $this;
    }

    /**
     * Gets addressLine1
     *
     * @return string
     */
    public function getAddressLine1()
    {
        return $this->container['addressLine1'];
    }

    /**
     * Sets addressLine1
     *
     * @param string $addressLine1 addressLine1
     *
     * @return $this
     */
    public function setAddressLine1($addressLine1)
    {
        $this->container['addressLine1'] = $addressLine1;

        return $this;
    }

    /**
     * Gets addressLine2
     *
     * @return string
     */
    public function getAddressLine2()
    {
        return $this->container['addressLine2'];
    }

    /**
     * Sets addressLine2
     *
     * @param string $addressLine2 addressLine2
     *
     * @return $this
     */
    public function setAddressLine2($addressLine2)
    {
        $this->container['addressLine2'] = $addressLine2;

        return $this;
    }

    /**
     * Gets addressCity
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->container['addressCity'];
    }

    /**
     * Sets addressCity
     *
     * @param string $addressCity addressCity
     *
     * @return $this
     */
    public function setAddressCity($addressCity)
    {
        $this->container['addressCity'] = $addressCity;

        return $this;
    }

    /**
     * Gets addressState
     *
     * @return string
     */
    public function getAddressState()
    {
        return $this->container['addressState'];
    }

    /**
     * Sets addressState
     *
     * @param string $addressState addressState
     *
     * @return $this
     */
    public function setAddressState($addressState)
    {
        $this->container['addressState'] = $addressState;

        return $this;
    }

    /**
     * Gets addressZipcode
     *
     * @return string
     */
    public function getAddressZipcode()
    {
        return $this->container['addressZipcode'];
    }

    /**
     * Sets addressZipcode
     *
     * @param string $addressZipcode addressZipcode
     *
     * @return $this
     */
    public function setAddressZipcode($addressZipcode)
    {
        $this->container['addressZipcode'] = $addressZipcode;

        return $this;
    }

    /**
     * Gets addressCountry
     *
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->container['addressCountry'];
    }

    /**
     * Sets addressCountry
     *
     * @param string $addressCountry addressCountry
     *
     * @return $this
     */
    public function setAddressCountry($addressCountry)
    {
        $this->container['addressCountry'] = $addressCountry;

        return $this;
    }

    /**
     * Gets excludeFromRevenue
     *
     * @return bool
     */
    public function getExcludeFromRevenue()
    {
        return $this->container['excludeFromRevenue'];
    }

    /**
     * Sets excludeFromRevenue
     *
     * @param bool $excludeFromRevenue excludeFromRevenue
     *
     * @return $this
     */
    public function setExcludeFromRevenue($excludeFromRevenue)
    {
        $this->container['excludeFromRevenue'] = $excludeFromRevenue;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     *
     * @param \DateTime $modifiedAt modifiedAt
     *
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;

        return $this;
    }

    /**
     * Gets renewal
     *
     * @return bool
     */
    public function getRenewal()
    {
        return $this->container['renewal'];
    }

    /**
     * Sets renewal
     *
     * @param bool $renewal renewal
     *
     * @return $this
     */
    public function setRenewal($renewal)
    {
        $this->container['renewal'] = $renewal;

        return $this;
    }

    /**
     * Gets automatic
     *
     * @return bool
     */
    public function getAutomatic()
    {
        return $this->container['automatic'];
    }

    /**
     * Sets automatic
     *
     * @param bool $automatic automatic
     *
     * @return $this
     */
    public function setAutomatic($automatic)
    {
        $this->container['automatic'] = $automatic;

        return $this;
    }

    /**
     * Gets billingType
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
     * Sets billingType
     *
     * @param string $billingType billingType
     *
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->container['billingType'] = $billingType;

        return $this;
    }

    /**
     * Gets ipAddress
     *
     * @return string
     */
    public function getIpAddress()
    {
        return $this->container['ipAddress'];
    }

    /**
     * Sets ipAddress
     *
     * @param string $ipAddress ipAddress
     *
     * @return $this
     */
    public function setIpAddress($ipAddress)
    {
        $this->container['ipAddress'] = $ipAddress;

        return $this;
    }

    /**
     * Gets customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string $customerId customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


