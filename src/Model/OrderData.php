<?php
/**
 * OrderData
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
 * Swagger Codegen version: 3.0.10
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
 * OrderData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class OrderData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OrderData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'billing' => '\Yoast\MyYoastApiClient\Model\BillingDto',
'cartHash' => 'string',
'cartTax' => 'string',
'createdVia' => 'string',
'currency' => 'string',
'customerId' => 'int',
'customerIpAddress' => 'string',
'customerNote' => 'string',
'customerUserAgent' => 'string',
'dateCompleted' => '\DateTime',
'dateCompletedGmt' => '\DateTime',
'dateCreated' => '\DateTime',
'dateCreatedGmt' => '\DateTime',
'dateModified' => '\DateTime',
'dateModifiedGmt' => '\DateTime',
'datePaid' => '\DateTime',
'datePaidGmt' => '\DateTime',
'discountTax' => 'string',
'discountTotal' => 'string',
'couponLines' => '\Yoast\MyYoastApiClient\Model\CouponLineDto[]',
'feeLines' => 'string[]',
'lineItems' => '\Yoast\MyYoastApiClient\Model\LineItemData[]',
'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]',
'number' => 'string',
'orderKey' => 'string',
'parentId' => 'int',
'paymentMethod' => 'string',
'paymentMethodTitle' => 'string',
'pricesIncludeTax' => 'bool',
'refunds' => 'string[]',
'shipping' => '\Yoast\MyYoastApiClient\Model\ShippingDto',
'shippingLines' => 'string[]',
'shippingTax' => 'string',
'shippingTotal' => 'string',
'status' => 'string',
'taxLines' => '\Yoast\MyYoastApiClient\Model\TaxLineItem[]',
'total' => 'string',
'totalTax' => 'string',
'transactionId' => 'string',
'version' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'billing' => null,
'cartHash' => null,
'cartTax' => null,
'createdVia' => null,
'currency' => null,
'customerId' => null,
'customerIpAddress' => null,
'customerNote' => null,
'customerUserAgent' => null,
'dateCompleted' => 'date-time',
'dateCompletedGmt' => 'date-time',
'dateCreated' => 'date-time',
'dateCreatedGmt' => 'date-time',
'dateModified' => 'date-time',
'dateModifiedGmt' => 'date-time',
'datePaid' => 'date-time',
'datePaidGmt' => 'date-time',
'discountTax' => null,
'discountTotal' => null,
'couponLines' => null,
'feeLines' => null,
'lineItems' => null,
'metaData' => null,
'number' => null,
'orderKey' => null,
'parentId' => null,
'paymentMethod' => null,
'paymentMethodTitle' => null,
'pricesIncludeTax' => null,
'refunds' => null,
'shipping' => null,
'shippingLines' => null,
'shippingTax' => null,
'shippingTotal' => null,
'status' => null,
'taxLines' => null,
'total' => null,
'totalTax' => null,
'transactionId' => null,
'version' => null    ];

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
        'id' => 'id',
'billing' => 'billing',
'cartHash' => 'cart_hash',
'cartTax' => 'cart_tax',
'createdVia' => 'created_via',
'currency' => 'currency',
'customerId' => 'customer_id',
'customerIpAddress' => 'customer_ip_address',
'customerNote' => 'customer_note',
'customerUserAgent' => 'customer_user_agent',
'dateCompleted' => 'date_completed',
'dateCompletedGmt' => 'date_completed_gmt',
'dateCreated' => 'date_created',
'dateCreatedGmt' => 'date_created_gmt',
'dateModified' => 'date_modified',
'dateModifiedGmt' => 'date_modified_gmt',
'datePaid' => 'date_paid',
'datePaidGmt' => 'date_paid_gmt',
'discountTax' => 'discount_tax',
'discountTotal' => 'discount_total',
'couponLines' => 'coupon_lines',
'feeLines' => 'fee_lines',
'lineItems' => 'line_items',
'metaData' => 'meta_data',
'number' => 'number',
'orderKey' => 'order_key',
'parentId' => 'parent_id',
'paymentMethod' => 'payment_method',
'paymentMethodTitle' => 'payment_method_title',
'pricesIncludeTax' => 'prices_include_tax',
'refunds' => 'refunds',
'shipping' => 'shipping',
'shippingLines' => 'shipping_lines',
'shippingTax' => 'shipping_tax',
'shippingTotal' => 'shipping_total',
'status' => 'status',
'taxLines' => 'tax_lines',
'total' => 'total',
'totalTax' => 'total_tax',
'transactionId' => 'transaction_id',
'version' => 'version'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'billing' => 'setBilling',
'cartHash' => 'setCartHash',
'cartTax' => 'setCartTax',
'createdVia' => 'setCreatedVia',
'currency' => 'setCurrency',
'customerId' => 'setCustomerId',
'customerIpAddress' => 'setCustomerIpAddress',
'customerNote' => 'setCustomerNote',
'customerUserAgent' => 'setCustomerUserAgent',
'dateCompleted' => 'setDateCompleted',
'dateCompletedGmt' => 'setDateCompletedGmt',
'dateCreated' => 'setDateCreated',
'dateCreatedGmt' => 'setDateCreatedGmt',
'dateModified' => 'setDateModified',
'dateModifiedGmt' => 'setDateModifiedGmt',
'datePaid' => 'setDatePaid',
'datePaidGmt' => 'setDatePaidGmt',
'discountTax' => 'setDiscountTax',
'discountTotal' => 'setDiscountTotal',
'couponLines' => 'setCouponLines',
'feeLines' => 'setFeeLines',
'lineItems' => 'setLineItems',
'metaData' => 'setMetaData',
'number' => 'setNumber',
'orderKey' => 'setOrderKey',
'parentId' => 'setParentId',
'paymentMethod' => 'setPaymentMethod',
'paymentMethodTitle' => 'setPaymentMethodTitle',
'pricesIncludeTax' => 'setPricesIncludeTax',
'refunds' => 'setRefunds',
'shipping' => 'setShipping',
'shippingLines' => 'setShippingLines',
'shippingTax' => 'setShippingTax',
'shippingTotal' => 'setShippingTotal',
'status' => 'setStatus',
'taxLines' => 'setTaxLines',
'total' => 'setTotal',
'totalTax' => 'setTotalTax',
'transactionId' => 'setTransactionId',
'version' => 'setVersion'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'billing' => 'getBilling',
'cartHash' => 'getCartHash',
'cartTax' => 'getCartTax',
'createdVia' => 'getCreatedVia',
'currency' => 'getCurrency',
'customerId' => 'getCustomerId',
'customerIpAddress' => 'getCustomerIpAddress',
'customerNote' => 'getCustomerNote',
'customerUserAgent' => 'getCustomerUserAgent',
'dateCompleted' => 'getDateCompleted',
'dateCompletedGmt' => 'getDateCompletedGmt',
'dateCreated' => 'getDateCreated',
'dateCreatedGmt' => 'getDateCreatedGmt',
'dateModified' => 'getDateModified',
'dateModifiedGmt' => 'getDateModifiedGmt',
'datePaid' => 'getDatePaid',
'datePaidGmt' => 'getDatePaidGmt',
'discountTax' => 'getDiscountTax',
'discountTotal' => 'getDiscountTotal',
'couponLines' => 'getCouponLines',
'feeLines' => 'getFeeLines',
'lineItems' => 'getLineItems',
'metaData' => 'getMetaData',
'number' => 'getNumber',
'orderKey' => 'getOrderKey',
'parentId' => 'getParentId',
'paymentMethod' => 'getPaymentMethod',
'paymentMethodTitle' => 'getPaymentMethodTitle',
'pricesIncludeTax' => 'getPricesIncludeTax',
'refunds' => 'getRefunds',
'shipping' => 'getShipping',
'shippingLines' => 'getShippingLines',
'shippingTax' => 'getShippingTax',
'shippingTotal' => 'getShippingTotal',
'status' => 'getStatus',
'taxLines' => 'getTaxLines',
'total' => 'getTotal',
'totalTax' => 'getTotalTax',
'transactionId' => 'getTransactionId',
'version' => 'getVersion'    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['cartHash'] = isset($data['cartHash']) ? $data['cartHash'] : null;
        $this->container['cartTax'] = isset($data['cartTax']) ? $data['cartTax'] : null;
        $this->container['createdVia'] = isset($data['createdVia']) ? $data['createdVia'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['customerIpAddress'] = isset($data['customerIpAddress']) ? $data['customerIpAddress'] : null;
        $this->container['customerNote'] = isset($data['customerNote']) ? $data['customerNote'] : null;
        $this->container['customerUserAgent'] = isset($data['customerUserAgent']) ? $data['customerUserAgent'] : null;
        $this->container['dateCompleted'] = isset($data['dateCompleted']) ? $data['dateCompleted'] : null;
        $this->container['dateCompletedGmt'] = isset($data['dateCompletedGmt']) ? $data['dateCompletedGmt'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateCreatedGmt'] = isset($data['dateCreatedGmt']) ? $data['dateCreatedGmt'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['dateModifiedGmt'] = isset($data['dateModifiedGmt']) ? $data['dateModifiedGmt'] : null;
        $this->container['datePaid'] = isset($data['datePaid']) ? $data['datePaid'] : null;
        $this->container['datePaidGmt'] = isset($data['datePaidGmt']) ? $data['datePaidGmt'] : null;
        $this->container['discountTax'] = isset($data['discountTax']) ? $data['discountTax'] : null;
        $this->container['discountTotal'] = isset($data['discountTotal']) ? $data['discountTotal'] : null;
        $this->container['couponLines'] = isset($data['couponLines']) ? $data['couponLines'] : null;
        $this->container['feeLines'] = isset($data['feeLines']) ? $data['feeLines'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['orderKey'] = isset($data['orderKey']) ? $data['orderKey'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['paymentMethodTitle'] = isset($data['paymentMethodTitle']) ? $data['paymentMethodTitle'] : null;
        $this->container['pricesIncludeTax'] = isset($data['pricesIncludeTax']) ? $data['pricesIncludeTax'] : null;
        $this->container['refunds'] = isset($data['refunds']) ? $data['refunds'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['shippingLines'] = isset($data['shippingLines']) ? $data['shippingLines'] : null;
        $this->container['shippingTax'] = isset($data['shippingTax']) ? $data['shippingTax'] : null;
        $this->container['shippingTotal'] = isset($data['shippingTotal']) ? $data['shippingTotal'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['taxLines'] = isset($data['taxLines']) ? $data['taxLines'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalTax'] = isset($data['totalTax']) ? $data['totalTax'] : null;
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
        if ($this->container['cartHash'] === null) {
            $invalidProperties[] = "'cartHash' can't be null";
        }
        if ($this->container['cartTax'] === null) {
            $invalidProperties[] = "'cartTax' can't be null";
        }
        if ($this->container['createdVia'] === null) {
            $invalidProperties[] = "'createdVia' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['customerIpAddress'] === null) {
            $invalidProperties[] = "'customerIpAddress' can't be null";
        }
        if ($this->container['customerNote'] === null) {
            $invalidProperties[] = "'customerNote' can't be null";
        }
        if ($this->container['customerUserAgent'] === null) {
            $invalidProperties[] = "'customerUserAgent' can't be null";
        }
        if ($this->container['dateCreated'] === null) {
            $invalidProperties[] = "'dateCreated' can't be null";
        }
        if ($this->container['dateCreatedGmt'] === null) {
            $invalidProperties[] = "'dateCreatedGmt' can't be null";
        }
        if ($this->container['discountTax'] === null) {
            $invalidProperties[] = "'discountTax' can't be null";
        }
        if ($this->container['discountTotal'] === null) {
            $invalidProperties[] = "'discountTotal' can't be null";
        }
        if ($this->container['couponLines'] === null) {
            $invalidProperties[] = "'couponLines' can't be null";
        }
        if ($this->container['feeLines'] === null) {
            $invalidProperties[] = "'feeLines' can't be null";
        }
        if ($this->container['lineItems'] === null) {
            $invalidProperties[] = "'lineItems' can't be null";
        }
        if ($this->container['metaData'] === null) {
            $invalidProperties[] = "'metaData' can't be null";
        }
        if ($this->container['number'] === null) {
            $invalidProperties[] = "'number' can't be null";
        }
        if ($this->container['orderKey'] === null) {
            $invalidProperties[] = "'orderKey' can't be null";
        }
        if ($this->container['parentId'] === null) {
            $invalidProperties[] = "'parentId' can't be null";
        }
        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
        }
        if ($this->container['paymentMethodTitle'] === null) {
            $invalidProperties[] = "'paymentMethodTitle' can't be null";
        }
        if ($this->container['pricesIncludeTax'] === null) {
            $invalidProperties[] = "'pricesIncludeTax' can't be null";
        }
        if ($this->container['refunds'] === null) {
            $invalidProperties[] = "'refunds' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['shippingLines'] === null) {
            $invalidProperties[] = "'shippingLines' can't be null";
        }
        if ($this->container['shippingTax'] === null) {
            $invalidProperties[] = "'shippingTax' can't be null";
        }
        if ($this->container['shippingTotal'] === null) {
            $invalidProperties[] = "'shippingTotal' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['taxLines'] === null) {
            $invalidProperties[] = "'taxLines' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['totalTax'] === null) {
            $invalidProperties[] = "'totalTax' can't be null";
        }
        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['version'] === null) {
            $invalidProperties[] = "'version' can't be null";
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Yoast\MyYoastApiClient\Model\BillingDto
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Yoast\MyYoastApiClient\Model\BillingDto $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets cartHash
     *
     * @return string
     */
    public function getCartHash()
    {
        return $this->container['cartHash'];
    }

    /**
     * Sets cartHash
     *
     * @param string $cartHash cartHash
     *
     * @return $this
     */
    public function setCartHash($cartHash)
    {
        $this->container['cartHash'] = $cartHash;

        return $this;
    }

    /**
     * Gets cartTax
     *
     * @return string
     */
    public function getCartTax()
    {
        return $this->container['cartTax'];
    }

    /**
     * Sets cartTax
     *
     * @param string $cartTax cartTax
     *
     * @return $this
     */
    public function setCartTax($cartTax)
    {
        $this->container['cartTax'] = $cartTax;

        return $this;
    }

    /**
     * Gets createdVia
     *
     * @return string
     */
    public function getCreatedVia()
    {
        return $this->container['createdVia'];
    }

    /**
     * Sets createdVia
     *
     * @param string $createdVia createdVia
     *
     * @return $this
     */
    public function setCreatedVia($createdVia)
    {
        $this->container['createdVia'] = $createdVia;

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
     * Gets customerId
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param int $customerId customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets customerIpAddress
     *
     * @return string
     */
    public function getCustomerIpAddress()
    {
        return $this->container['customerIpAddress'];
    }

    /**
     * Sets customerIpAddress
     *
     * @param string $customerIpAddress customerIpAddress
     *
     * @return $this
     */
    public function setCustomerIpAddress($customerIpAddress)
    {
        $this->container['customerIpAddress'] = $customerIpAddress;

        return $this;
    }

    /**
     * Gets customerNote
     *
     * @return string
     */
    public function getCustomerNote()
    {
        return $this->container['customerNote'];
    }

    /**
     * Sets customerNote
     *
     * @param string $customerNote customerNote
     *
     * @return $this
     */
    public function setCustomerNote($customerNote)
    {
        $this->container['customerNote'] = $customerNote;

        return $this;
    }

    /**
     * Gets customerUserAgent
     *
     * @return string
     */
    public function getCustomerUserAgent()
    {
        return $this->container['customerUserAgent'];
    }

    /**
     * Sets customerUserAgent
     *
     * @param string $customerUserAgent customerUserAgent
     *
     * @return $this
     */
    public function setCustomerUserAgent($customerUserAgent)
    {
        $this->container['customerUserAgent'] = $customerUserAgent;

        return $this;
    }

    /**
     * Gets dateCompleted
     *
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->container['dateCompleted'];
    }

    /**
     * Sets dateCompleted
     *
     * @param \DateTime $dateCompleted dateCompleted
     *
     * @return $this
     */
    public function setDateCompleted($dateCompleted)
    {
        $this->container['dateCompleted'] = $dateCompleted;

        return $this;
    }

    /**
     * Gets dateCompletedGmt
     *
     * @return \DateTime
     */
    public function getDateCompletedGmt()
    {
        return $this->container['dateCompletedGmt'];
    }

    /**
     * Sets dateCompletedGmt
     *
     * @param \DateTime $dateCompletedGmt dateCompletedGmt
     *
     * @return $this
     */
    public function setDateCompletedGmt($dateCompletedGmt)
    {
        $this->container['dateCompletedGmt'] = $dateCompletedGmt;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated dateCreated
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateCreatedGmt
     *
     * @return \DateTime
     */
    public function getDateCreatedGmt()
    {
        return $this->container['dateCreatedGmt'];
    }

    /**
     * Sets dateCreatedGmt
     *
     * @param \DateTime $dateCreatedGmt dateCreatedGmt
     *
     * @return $this
     */
    public function setDateCreatedGmt($dateCreatedGmt)
    {
        $this->container['dateCreatedGmt'] = $dateCreatedGmt;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param \DateTime $dateModified dateModified
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets dateModifiedGmt
     *
     * @return \DateTime
     */
    public function getDateModifiedGmt()
    {
        return $this->container['dateModifiedGmt'];
    }

    /**
     * Sets dateModifiedGmt
     *
     * @param \DateTime $dateModifiedGmt dateModifiedGmt
     *
     * @return $this
     */
    public function setDateModifiedGmt($dateModifiedGmt)
    {
        $this->container['dateModifiedGmt'] = $dateModifiedGmt;

        return $this;
    }

    /**
     * Gets datePaid
     *
     * @return \DateTime
     */
    public function getDatePaid()
    {
        return $this->container['datePaid'];
    }

    /**
     * Sets datePaid
     *
     * @param \DateTime $datePaid datePaid
     *
     * @return $this
     */
    public function setDatePaid($datePaid)
    {
        $this->container['datePaid'] = $datePaid;

        return $this;
    }

    /**
     * Gets datePaidGmt
     *
     * @return \DateTime
     */
    public function getDatePaidGmt()
    {
        return $this->container['datePaidGmt'];
    }

    /**
     * Sets datePaidGmt
     *
     * @param \DateTime $datePaidGmt datePaidGmt
     *
     * @return $this
     */
    public function setDatePaidGmt($datePaidGmt)
    {
        $this->container['datePaidGmt'] = $datePaidGmt;

        return $this;
    }

    /**
     * Gets discountTax
     *
     * @return string
     */
    public function getDiscountTax()
    {
        return $this->container['discountTax'];
    }

    /**
     * Sets discountTax
     *
     * @param string $discountTax discountTax
     *
     * @return $this
     */
    public function setDiscountTax($discountTax)
    {
        $this->container['discountTax'] = $discountTax;

        return $this;
    }

    /**
     * Gets discountTotal
     *
     * @return string
     */
    public function getDiscountTotal()
    {
        return $this->container['discountTotal'];
    }

    /**
     * Sets discountTotal
     *
     * @param string $discountTotal discountTotal
     *
     * @return $this
     */
    public function setDiscountTotal($discountTotal)
    {
        $this->container['discountTotal'] = $discountTotal;

        return $this;
    }

    /**
     * Gets couponLines
     *
     * @return \Yoast\MyYoastApiClient\Model\CouponLineDto[]
     */
    public function getCouponLines()
    {
        return $this->container['couponLines'];
    }

    /**
     * Sets couponLines
     *
     * @param \Yoast\MyYoastApiClient\Model\CouponLineDto[] $couponLines couponLines
     *
     * @return $this
     */
    public function setCouponLines($couponLines)
    {
        $this->container['couponLines'] = $couponLines;

        return $this;
    }

    /**
     * Gets feeLines
     *
     * @return string[]
     */
    public function getFeeLines()
    {
        return $this->container['feeLines'];
    }

    /**
     * Sets feeLines
     *
     * @param string[] $feeLines feeLines
     *
     * @return $this
     */
    public function setFeeLines($feeLines)
    {
        $this->container['feeLines'] = $feeLines;

        return $this;
    }

    /**
     * Gets lineItems
     *
     * @return \Yoast\MyYoastApiClient\Model\LineItemData[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \Yoast\MyYoastApiClient\Model\LineItemData[] $lineItems lineItems
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets metaData
     *
     * @return \Yoast\MyYoastApiClient\Model\MetaDataDto[]
     */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
     * Sets metaData
     *
     * @param \Yoast\MyYoastApiClient\Model\MetaDataDto[] $metaData metaData
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;

        return $this;
    }

    /**
     * Gets number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets orderKey
     *
     * @return string
     */
    public function getOrderKey()
    {
        return $this->container['orderKey'];
    }

    /**
     * Sets orderKey
     *
     * @param string $orderKey orderKey
     *
     * @return $this
     */
    public function setOrderKey($orderKey)
    {
        $this->container['orderKey'] = $orderKey;

        return $this;
    }

    /**
     * Gets parentId
     *
     * @return int
     */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
     * Sets parentId
     *
     * @param int $parentId parentId
     *
     * @return $this
     */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param string $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets paymentMethodTitle
     *
     * @return string
     */
    public function getPaymentMethodTitle()
    {
        return $this->container['paymentMethodTitle'];
    }

    /**
     * Sets paymentMethodTitle
     *
     * @param string $paymentMethodTitle paymentMethodTitle
     *
     * @return $this
     */
    public function setPaymentMethodTitle($paymentMethodTitle)
    {
        $this->container['paymentMethodTitle'] = $paymentMethodTitle;

        return $this;
    }

    /**
     * Gets pricesIncludeTax
     *
     * @return bool
     */
    public function getPricesIncludeTax()
    {
        return $this->container['pricesIncludeTax'];
    }

    /**
     * Sets pricesIncludeTax
     *
     * @param bool $pricesIncludeTax pricesIncludeTax
     *
     * @return $this
     */
    public function setPricesIncludeTax($pricesIncludeTax)
    {
        $this->container['pricesIncludeTax'] = $pricesIncludeTax;

        return $this;
    }

    /**
     * Gets refunds
     *
     * @return string[]
     */
    public function getRefunds()
    {
        return $this->container['refunds'];
    }

    /**
     * Sets refunds
     *
     * @param string[] $refunds refunds
     *
     * @return $this
     */
    public function setRefunds($refunds)
    {
        $this->container['refunds'] = $refunds;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Yoast\MyYoastApiClient\Model\ShippingDto
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Yoast\MyYoastApiClient\Model\ShippingDto $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets shippingLines
     *
     * @return string[]
     */
    public function getShippingLines()
    {
        return $this->container['shippingLines'];
    }

    /**
     * Sets shippingLines
     *
     * @param string[] $shippingLines shippingLines
     *
     * @return $this
     */
    public function setShippingLines($shippingLines)
    {
        $this->container['shippingLines'] = $shippingLines;

        return $this;
    }

    /**
     * Gets shippingTax
     *
     * @return string
     */
    public function getShippingTax()
    {
        return $this->container['shippingTax'];
    }

    /**
     * Sets shippingTax
     *
     * @param string $shippingTax shippingTax
     *
     * @return $this
     */
    public function setShippingTax($shippingTax)
    {
        $this->container['shippingTax'] = $shippingTax;

        return $this;
    }

    /**
     * Gets shippingTotal
     *
     * @return string
     */
    public function getShippingTotal()
    {
        return $this->container['shippingTotal'];
    }

    /**
     * Sets shippingTotal
     *
     * @param string $shippingTotal shippingTotal
     *
     * @return $this
     */
    public function setShippingTotal($shippingTotal)
    {
        $this->container['shippingTotal'] = $shippingTotal;

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
     * Gets taxLines
     *
     * @return \Yoast\MyYoastApiClient\Model\TaxLineItem[]
     */
    public function getTaxLines()
    {
        return $this->container['taxLines'];
    }

    /**
     * Sets taxLines
     *
     * @param \Yoast\MyYoastApiClient\Model\TaxLineItem[] $taxLines taxLines
     *
     * @return $this
     */
    public function setTaxLines($taxLines)
    {
        $this->container['taxLines'] = $taxLines;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets totalTax
     *
     * @return string
     */
    public function getTotalTax()
    {
        return $this->container['totalTax'];
    }

    /**
     * Sets totalTax
     *
     * @param string $totalTax totalTax
     *
     * @return $this
     */
    public function setTotalTax($totalTax)
    {
        $this->container['totalTax'] = $totalTax;

        return $this;
    }

    /**
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     *
     * @param string $version version
     *
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

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
