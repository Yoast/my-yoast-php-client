<?php
/**
 * RefundLineItem
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
 * RefundLineItem Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class RefundLineItem implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'RefundLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'quantity' => 'double',
        'subtotal_amount' => 'double',
        'total_amount' => 'double',
        'subtotal_vat_amount' => 'double',
        'total_vat_amount' => 'double',
        'source_id' => 'double',
        'source_shop_id' => 'double',
        'refund_id' => 'string',
        'line_item_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'quantity' => 'double',
        'subtotal_amount' => 'double',
        'total_amount' => 'double',
        'subtotal_vat_amount' => 'double',
        'total_vat_amount' => 'double',
        'source_id' => 'double',
        'source_shop_id' => 'double',
        'refund_id' => null,
        'line_item_id' => null
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
        'quantity' => 'quantity',
        'subtotal_amount' => 'subtotalAmount',
        'total_amount' => 'totalAmount',
        'subtotal_vat_amount' => 'subtotalVatAmount',
        'total_vat_amount' => 'totalVatAmount',
        'source_id' => 'sourceId',
        'source_shop_id' => 'sourceShopId',
        'refund_id' => 'refundId',
        'line_item_id' => 'lineItemId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'quantity' => 'setQuantity',
        'subtotal_amount' => 'setSubtotalAmount',
        'total_amount' => 'setTotalAmount',
        'subtotal_vat_amount' => 'setSubtotalVatAmount',
        'total_vat_amount' => 'setTotalVatAmount',
        'source_id' => 'setSourceId',
        'source_shop_id' => 'setSourceShopId',
        'refund_id' => 'setRefundId',
        'line_item_id' => 'setLineItemId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'quantity' => 'getQuantity',
        'subtotal_amount' => 'getSubtotalAmount',
        'total_amount' => 'getTotalAmount',
        'subtotal_vat_amount' => 'getSubtotalVatAmount',
        'total_vat_amount' => 'getTotalVatAmount',
        'source_id' => 'getSourceId',
        'source_shop_id' => 'getSourceShopId',
        'refund_id' => 'getRefundId',
        'line_item_id' => 'getLineItemId'
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
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : 1.0;
        $this->container['subtotal_amount'] = isset($data['subtotal_amount']) ? $data['subtotal_amount'] : null;
        $this->container['total_amount'] = isset($data['total_amount']) ? $data['total_amount'] : null;
        $this->container['subtotal_vat_amount'] = isset($data['subtotal_vat_amount']) ? $data['subtotal_vat_amount'] : null;
        $this->container['total_vat_amount'] = isset($data['total_vat_amount']) ? $data['total_vat_amount'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
        $this->container['source_shop_id'] = isset($data['source_shop_id']) ? $data['source_shop_id'] : null;
        $this->container['refund_id'] = isset($data['refund_id']) ? $data['refund_id'] : null;
        $this->container['line_item_id'] = isset($data['line_item_id']) ? $data['line_item_id'] : null;
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
        if ($this->container['quantity'] === null) {
            $invalid_properties[] = "'quantity' can't be null";
        }
        if ($this->container['subtotal_amount'] === null) {
            $invalid_properties[] = "'subtotal_amount' can't be null";
        }
        if ($this->container['total_amount'] === null) {
            $invalid_properties[] = "'total_amount' can't be null";
        }
        if ($this->container['subtotal_vat_amount'] === null) {
            $invalid_properties[] = "'subtotal_vat_amount' can't be null";
        }
        if ($this->container['total_vat_amount'] === null) {
            $invalid_properties[] = "'total_vat_amount' can't be null";
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
        if ($this->container['quantity'] === null) {
            return false;
        }
        if ($this->container['subtotal_amount'] === null) {
            return false;
        }
        if ($this->container['total_amount'] === null) {
            return false;
        }
        if ($this->container['subtotal_vat_amount'] === null) {
            return false;
        }
        if ($this->container['total_vat_amount'] === null) {
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
     * Gets quantity
     * @return double
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     * @param double $quantity
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

        return $this;
    }

    /**
     * Gets subtotal_amount
     * @return double
     */
    public function getSubtotalAmount()
    {
        return $this->container['subtotal_amount'];
    }

    /**
     * Sets subtotal_amount
     * @param double $subtotal_amount
     * @return $this
     */
    public function setSubtotalAmount($subtotal_amount)
    {
        $this->container['subtotal_amount'] = $subtotal_amount;

        return $this;
    }

    /**
     * Gets total_amount
     * @return double
     */
    public function getTotalAmount()
    {
        return $this->container['total_amount'];
    }

    /**
     * Sets total_amount
     * @param double $total_amount
     * @return $this
     */
    public function setTotalAmount($total_amount)
    {
        $this->container['total_amount'] = $total_amount;

        return $this;
    }

    /**
     * Gets subtotal_vat_amount
     * @return double
     */
    public function getSubtotalVatAmount()
    {
        return $this->container['subtotal_vat_amount'];
    }

    /**
     * Sets subtotal_vat_amount
     * @param double $subtotal_vat_amount
     * @return $this
     */
    public function setSubtotalVatAmount($subtotal_vat_amount)
    {
        $this->container['subtotal_vat_amount'] = $subtotal_vat_amount;

        return $this;
    }

    /**
     * Gets total_vat_amount
     * @return double
     */
    public function getTotalVatAmount()
    {
        return $this->container['total_vat_amount'];
    }

    /**
     * Sets total_vat_amount
     * @param double $total_vat_amount
     * @return $this
     */
    public function setTotalVatAmount($total_vat_amount)
    {
        $this->container['total_vat_amount'] = $total_vat_amount;

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
     * Gets refund_id
     * @return string
     */
    public function getRefundId()
    {
        return $this->container['refund_id'];
    }

    /**
     * Sets refund_id
     * @param string $refund_id
     * @return $this
     */
    public function setRefundId($refund_id)
    {
        $this->container['refund_id'] = $refund_id;

        return $this;
    }

    /**
     * Gets line_item_id
     * @return string
     */
    public function getLineItemId()
    {
        return $this->container['line_item_id'];
    }

    /**
     * Sets line_item_id
     * @param string $line_item_id
     * @return $this
     */
    public function setLineItemId($line_item_id)
    {
        $this->container['line_item_id'] = $line_item_id;

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


