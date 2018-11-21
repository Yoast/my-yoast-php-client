<?php
/**
 * DiscountLineItem
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
 * DiscountLineItem Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class DiscountLineItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'DiscountLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'order_id' => 'string',
        'coupon_code' => 'string',
        'amount' => 'double',
        'amount_vat' => 'double',
        'source_id' => 'double',
        'source_shop_id' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'order_id' => null,
        'coupon_code' => null,
        'amount' => 'double',
        'amount_vat' => 'double',
        'source_id' => 'double',
        'source_shop_id' => 'double'
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
        'order_id' => 'orderId',
        'coupon_code' => 'couponCode',
        'amount' => 'amount',
        'amount_vat' => 'amountVat',
        'source_id' => 'sourceId',
        'source_shop_id' => 'sourceShopId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'order_id' => 'setOrderId',
        'coupon_code' => 'setCouponCode',
        'amount' => 'setAmount',
        'amount_vat' => 'setAmountVat',
        'source_id' => 'setSourceId',
        'source_shop_id' => 'setSourceShopId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'order_id' => 'getOrderId',
        'coupon_code' => 'getCouponCode',
        'amount' => 'getAmount',
        'amount_vat' => 'getAmountVat',
        'source_id' => 'getSourceId',
        'source_shop_id' => 'getSourceShopId'
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
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['coupon_code'] = isset($data['coupon_code']) ? $data['coupon_code'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['amount_vat'] = isset($data['amount_vat']) ? $data['amount_vat'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['source_shop_id'] = isset($data['source_shop_id']) ? $data['source_shop_id'] : null;
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
        if ($this->container['order_id'] === null) {
            $invalid_properties[] = "'order_id' can't be null";
        }
        if ($this->container['coupon_code'] === null) {
            $invalid_properties[] = "'coupon_code' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalid_properties[] = "'amount' can't be null";
        }
        if ($this->container['amount_vat'] === null) {
            $invalid_properties[] = "'amount_vat' can't be null";
        }
        if ($this->container['source_id'] === null) {
            $invalid_properties[] = "'source_id' can't be null";
        }
        if ($this->container['source_shop_id'] === null) {
            $invalid_properties[] = "'source_shop_id' can't be null";
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
        if ($this->container['order_id'] === null) {
            return false;
        }
        if ($this->container['coupon_code'] === null) {
            return false;
        }
        if ($this->container['amount'] === null) {
            return false;
        }
        if ($this->container['amount_vat'] === null) {
            return false;
        }
        if ($this->container['source_id'] === null) {
            return false;
        }
        if ($this->container['source_shop_id'] === null) {
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
     * Gets coupon_code
     * @return string
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     * @param string $coupon_code
     * @return $this
     */
    public function setCouponCode($coupon_code)
    {
        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets amount
     * @return double
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     * @param double $amount
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets amount_vat
     * @return double
     */
    public function getAmountVat()
    {
        return $this->container['amount_vat'];
    }

    /**
     * Sets amount_vat
     * @param double $amount_vat
     * @return $this
     */
    public function setAmountVat($amount_vat)
    {
        $this->container['amount_vat'] = $amount_vat;

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
     * Gets source_shop_id
     * @return double
     */
    public function getSourceShopId()
    {
        return $this->container['source_shop_id'];
    }

    /**
     * Sets source_shop_id
     * @param double $source_shop_id
     * @return $this
     */
    public function setSourceShopId($source_shop_id)
    {
        $this->container['source_shop_id'] = $source_shop_id;

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


