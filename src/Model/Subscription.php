<?php
/**
 * Subscription
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
 * Subscription Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'product_id' => 'string',
        'start_date' => '\DateTime',
        'end_date' => '\DateTime',
        'reoccurring' => 'bool',
        'shop_subscription_id' => 'double',
        'shop_subscription_line_item_id' => 'double',
        'my_yoast_user_id' => 'double'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'product_id' => 'productId',
        'start_date' => 'startDate',
        'end_date' => 'endDate',
        'reoccurring' => 'reoccurring',
        'shop_subscription_id' => 'shopSubscriptionId',
        'shop_subscription_line_item_id' => 'shopSubscriptionLineItemId',
        'my_yoast_user_id' => 'myYoastUserId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'product_id' => 'setProductId',
        'start_date' => 'setStartDate',
        'end_date' => 'setEndDate',
        'reoccurring' => 'setReoccurring',
        'shop_subscription_id' => 'setShopSubscriptionId',
        'shop_subscription_line_item_id' => 'setShopSubscriptionLineItemId',
        'my_yoast_user_id' => 'setMyYoastUserId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'product_id' => 'getProductId',
        'start_date' => 'getStartDate',
        'end_date' => 'getEndDate',
        'reoccurring' => 'getReoccurring',
        'shop_subscription_id' => 'getShopSubscriptionId',
        'shop_subscription_line_item_id' => 'getShopSubscriptionLineItemId',
        'my_yoast_user_id' => 'getMyYoastUserId'
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
        $this->container['product_id'] = isset($data['product_id']) ? $data['product_id'] : null;
        $this->container['start_date'] = isset($data['start_date']) ? $data['start_date'] : null;
        $this->container['end_date'] = isset($data['end_date']) ? $data['end_date'] : null;
        $this->container['reoccurring'] = isset($data['reoccurring']) ? $data['reoccurring'] : true;
        $this->container['shop_subscription_id'] = isset($data['shop_subscription_id']) ? $data['shop_subscription_id'] : null;
        $this->container['shop_subscription_line_item_id'] = isset($data['shop_subscription_line_item_id']) ? $data['shop_subscription_line_item_id'] : null;
        $this->container['my_yoast_user_id'] = isset($data['my_yoast_user_id']) ? $data['my_yoast_user_id'] : null;
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
        if ($this->container['product_id'] === null) {
            $invalid_properties[] = "'product_id' can't be null";
        }
        if ($this->container['start_date'] === null) {
            $invalid_properties[] = "'start_date' can't be null";
        }
        if ($this->container['end_date'] === null) {
            $invalid_properties[] = "'end_date' can't be null";
        }
        if ($this->container['reoccurring'] === null) {
            $invalid_properties[] = "'reoccurring' can't be null";
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
        if ($this->container['product_id'] === null) {
            return false;
        }
        if ($this->container['start_date'] === null) {
            return false;
        }
        if ($this->container['end_date'] === null) {
            return false;
        }
        if ($this->container['reoccurring'] === null) {
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
     * Gets product_id
     * @return string
     */
    public function getProductId()
    {
        return $this->container['product_id'];
    }

    /**
     * Sets product_id
     * @param string $product_id
     * @return $this
     */
    public function setProductId($product_id)
    {
        $this->container['product_id'] = $product_id;

        return $this;
    }

    /**
     * Gets start_date
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['start_date'];
    }

    /**
     * Sets start_date
     * @param \DateTime $start_date
     * @return $this
     */
    public function setStartDate($start_date)
    {
        $this->container['start_date'] = $start_date;

        return $this;
    }

    /**
     * Gets end_date
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['end_date'];
    }

    /**
     * Sets end_date
     * @param \DateTime $end_date
     * @return $this
     */
    public function setEndDate($end_date)
    {
        $this->container['end_date'] = $end_date;

        return $this;
    }

    /**
     * Gets reoccurring
     * @return bool
     */
    public function getReoccurring()
    {
        return $this->container['reoccurring'];
    }

    /**
     * Sets reoccurring
     * @param bool $reoccurring
     * @return $this
     */
    public function setReoccurring($reoccurring)
    {
        $this->container['reoccurring'] = $reoccurring;

        return $this;
    }

    /**
     * Gets shop_subscription_id
     * @return double
     */
    public function getShopSubscriptionId()
    {
        return $this->container['shop_subscription_id'];
    }

    /**
     * Sets shop_subscription_id
     * @param double $shop_subscription_id
     * @return $this
     */
    public function setShopSubscriptionId($shop_subscription_id)
    {
        $this->container['shop_subscription_id'] = $shop_subscription_id;

        return $this;
    }

    /**
     * Gets shop_subscription_line_item_id
     * @return double
     */
    public function getShopSubscriptionLineItemId()
    {
        return $this->container['shop_subscription_line_item_id'];
    }

    /**
     * Sets shop_subscription_line_item_id
     * @param double $shop_subscription_line_item_id
     * @return $this
     */
    public function setShopSubscriptionLineItemId($shop_subscription_line_item_id)
    {
        $this->container['shop_subscription_line_item_id'] = $shop_subscription_line_item_id;

        return $this;
    }

    /**
     * Gets my_yoast_user_id
     * @return double
     */
    public function getMyYoastUserId()
    {
        return $this->container['my_yoast_user_id'];
    }

    /**
     * Sets my_yoast_user_id
     * @param double $my_yoast_user_id
     * @return $this
     */
    public function setMyYoastUserId($my_yoast_user_id)
    {
        $this->container['my_yoast_user_id'] = $my_yoast_user_id;

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


