<?php
/**
 * ExtraOrderData
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
 * Swagger Codegen version: 2.4.7
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
 * ExtraOrderData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtraOrderData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtraOrderData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => '\Yoast\MyYoastApiClient\Model\CustomerData',
        'shopId' => 'float',
        'paymentReference' => 'string',
        'automatic' => 'bool',
        'transactions' => '\Yoast\MyYoastApiClient\Model\TransactionDataDto[]',
        'wooRefunds' => '\Yoast\MyYoastApiClient\Model\RefundDataDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
        'shopId' => null,
        'paymentReference' => null,
        'automatic' => null,
        'transactions' => null,
        'wooRefunds' => null
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
        'customer' => 'customer',
        'shopId' => 'shop_id',
        'paymentReference' => 'payment_reference',
        'automatic' => 'automatic',
        'transactions' => 'transactions',
        'wooRefunds' => 'woo_refunds'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
        'shopId' => 'setShopId',
        'paymentReference' => 'setPaymentReference',
        'automatic' => 'setAutomatic',
        'transactions' => 'setTransactions',
        'wooRefunds' => 'setWooRefunds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
        'shopId' => 'getShopId',
        'paymentReference' => 'getPaymentReference',
        'automatic' => 'getAutomatic',
        'transactions' => 'getTransactions',
        'wooRefunds' => 'getWooRefunds'
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['shopId'] = isset($data['shopId']) ? $data['shopId'] : null;
        $this->container['paymentReference'] = isset($data['paymentReference']) ? $data['paymentReference'] : null;
        $this->container['automatic'] = isset($data['automatic']) ? $data['automatic'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['wooRefunds'] = isset($data['wooRefunds']) ? $data['wooRefunds'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['shopId'] === null) {
            $invalidProperties[] = "'shopId' can't be null";
        }
        if ($this->container['paymentReference'] === null) {
            $invalidProperties[] = "'paymentReference' can't be null";
        }
        if ($this->container['automatic'] === null) {
            $invalidProperties[] = "'automatic' can't be null";
        }
        if ($this->container['transactions'] === null) {
            $invalidProperties[] = "'transactions' can't be null";
        }
        if ($this->container['wooRefunds'] === null) {
            $invalidProperties[] = "'wooRefunds' can't be null";
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
     * Gets customer
     *
     * @return \Yoast\MyYoastApiClient\Model\CustomerData
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Yoast\MyYoastApiClient\Model\CustomerData $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return float
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param float $shopId shopId
     *
     * @return $this
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

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
     * Gets transactions
     *
     * @return \Yoast\MyYoastApiClient\Model\TransactionDataDto[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Yoast\MyYoastApiClient\Model\TransactionDataDto[] $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets wooRefunds
     *
     * @return \Yoast\MyYoastApiClient\Model\RefundDataDto[]
     */
    public function getWooRefunds()
    {
        return $this->container['wooRefunds'];
    }

    /**
     * Sets wooRefunds
     *
     * @param \Yoast\MyYoastApiClient\Model\RefundDataDto[] $wooRefunds wooRefunds
     *
     * @return $this
     */
    public function setWooRefunds($wooRefunds)
    {
        $this->container['wooRefunds'] = $wooRefunds;

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


