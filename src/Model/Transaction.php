<?php
/**
 * Transaction
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * my-yoast
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yoast\MyYoastApiClient\Model;

use \ArrayAccess;

/**
 * Transaction Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Transaction implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Transaction';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'source_id' => 'double',
        'source_shopid' => 'double',
        'payment_reference' => 'string',
        'captured_amount' => 'double',
        'refunded_amount' => 'double',
        'updated_on' => '\DateTime',
        'created_on' => '\DateTime',
        'paid' => 'bool',
        'order_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'source_id' => 'double',
        'source_shopid' => 'double',
        'payment_reference' => null,
        'captured_amount' => 'double',
        'refunded_amount' => 'double',
        'updated_on' => 'date-time',
        'created_on' => 'date-time',
        'paid' => null,
        'order_id' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'source_id' => 'sourceId',
        'source_shopid' => 'sourceShopid',
        'payment_reference' => 'paymentReference',
        'captured_amount' => 'capturedAmount',
        'refunded_amount' => 'refundedAmount',
        'updated_on' => 'updatedOn',
        'created_on' => 'createdOn',
        'paid' => 'paid',
        'order_id' => 'orderId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'source_id' => 'setSourceId',
        'source_shopid' => 'setSourceShopid',
        'payment_reference' => 'setPaymentReference',
        'captured_amount' => 'setCapturedAmount',
        'refunded_amount' => 'setRefundedAmount',
        'updated_on' => 'setUpdatedOn',
        'created_on' => 'setCreatedOn',
        'paid' => 'setPaid',
        'order_id' => 'setOrderId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'source_id' => 'getSourceId',
        'source_shopid' => 'getSourceShopid',
        'payment_reference' => 'getPaymentReference',
        'captured_amount' => 'getCapturedAmount',
        'refunded_amount' => 'getRefundedAmount',
        'updated_on' => 'getUpdatedOn',
        'created_on' => 'getCreatedOn',
        'paid' => 'getPaid',
        'order_id' => 'getOrderId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['source_shopid'] = isset($data['source_shopid']) ? $data['source_shopid'] : null;
        $this->container['payment_reference'] = isset($data['payment_reference']) ? $data['payment_reference'] : null;
        $this->container['captured_amount'] = isset($data['captured_amount']) ? $data['captured_amount'] : 0.0;
        $this->container['refunded_amount'] = isset($data['refunded_amount']) ? $data['refunded_amount'] : null;
        $this->container['updated_on'] = isset($data['updated_on']) ? $data['updated_on'] : null;
        $this->container['created_on'] = isset($data['created_on']) ? $data['created_on'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['source_id'] === null) {
            $invalid_properties[] = "'source_id' can't be null";
        }
        if ($this->container['source_shopid'] === null) {
            $invalid_properties[] = "'source_shopid' can't be null";
        }
        if ($this->container['captured_amount'] === null) {
            $invalid_properties[] = "'captured_amount' can't be null";
        }
        if ($this->container['refunded_amount'] === null) {
            $invalid_properties[] = "'refunded_amount' can't be null";
        }
        if ($this->container['updated_on'] === null) {
            $invalid_properties[] = "'updated_on' can't be null";
        }
        if ($this->container['created_on'] === null) {
            $invalid_properties[] = "'created_on' can't be null";
        }
        if ($this->container['paid'] === null) {
            $invalid_properties[] = "'paid' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['source_id'] === null) {
            return false;
        }
        if ($this->container['source_shopid'] === null) {
            return false;
        }
        if ($this->container['captured_amount'] === null) {
            return false;
        }
        if ($this->container['refunded_amount'] === null) {
            return false;
        }
        if ($this->container['updated_on'] === null) {
            return false;
        }
        if ($this->container['created_on'] === null) {
            return false;
        }
        if ($this->container['paid'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets source_id
     * @return double
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     * @param double $source_id
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }

    /**
     * Gets source_shopid
     * @return double
     */
    public function getSourceShopid()
    {
        return $this->container['source_shopid'];
    }

    /**
     * Sets source_shopid
     * @param double $source_shopid
     * @return $this
     */
    public function setSourceShopid($source_shopid)
    {
        $this->container['source_shopid'] = $source_shopid;

        return $this;
    }

    /**
     * Gets payment_reference
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['payment_reference'];
    }

    /**
     * Sets payment_reference
     * @param string $payment_reference
     * @return $this
     */
    public function setPaymentReference($payment_reference)
    {
        $this->container['payment_reference'] = $payment_reference;

        return $this;
    }

    /**
     * Gets captured_amount
     * @return double
     */
    public function getCapturedAmount()
    {
        return $this->container['captured_amount'];
    }

    /**
     * Sets captured_amount
     * @param double $captured_amount
     * @return $this
     */
    public function setCapturedAmount($captured_amount)
    {
        $this->container['captured_amount'] = $captured_amount;

        return $this;
    }

    /**
     * Gets refunded_amount
     * @return double
     */
    public function getRefundedAmount()
    {
        return $this->container['refunded_amount'];
    }

    /**
     * Sets refunded_amount
     * @param double $refunded_amount
     * @return $this
     */
    public function setRefundedAmount($refunded_amount)
    {
        $this->container['refunded_amount'] = $refunded_amount;

        return $this;
    }

    /**
     * Gets updated_on
     * @return \DateTime
     */
    public function getUpdatedOn()
    {
        return $this->container['updated_on'];
    }

    /**
     * Sets updated_on
     * @param \DateTime $updated_on
     * @return $this
     */
    public function setUpdatedOn($updated_on)
    {
        $this->container['updated_on'] = $updated_on;

        return $this;
    }

    /**
     * Gets created_on
     * @return \DateTime
     */
    public function getCreatedOn()
    {
        return $this->container['created_on'];
    }

    /**
     * Sets created_on
     * @param \DateTime $created_on
     * @return $this
     */
    public function setCreatedOn($created_on)
    {
        $this->container['created_on'] = $created_on;

        return $this;
    }

    /**
     * Gets paid
     * @return bool
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     * @param bool $paid
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Yoast\MyYoastApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Yoast\MyYoastApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


