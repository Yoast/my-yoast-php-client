<?php
/**
 * ExtraProductData
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
 * ExtraProductData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtraProductData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtraProductData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shopId' => 'int',
        'changelog' => 'string',
        'productGroupSlugs' => 'string[]',
        'billingType' => 'string',
        'billingTerm' => 'string',
        'activationLimit' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shopId' => null,
        'changelog' => null,
        'productGroupSlugs' => null,
        'billingType' => null,
        'billingTerm' => null,
        'activationLimit' => null
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
        'shopId' => 'shop_id',
        'changelog' => 'changelog',
        'productGroupSlugs' => 'product_group_slugs',
        'billingType' => 'billingType',
        'billingTerm' => 'billingTerm',
        'activationLimit' => 'activationLimit'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shopId' => 'setShopId',
        'changelog' => 'setChangelog',
        'productGroupSlugs' => 'setProductGroupSlugs',
        'billingType' => 'setBillingType',
        'billingTerm' => 'setBillingTerm',
        'activationLimit' => 'setActivationLimit'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shopId' => 'getShopId',
        'changelog' => 'getChangelog',
        'productGroupSlugs' => 'getProductGroupSlugs',
        'billingType' => 'getBillingType',
        'billingTerm' => 'getBillingTerm',
        'activationLimit' => 'getActivationLimit'
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
        $this->container['shopId'] = isset($data['shopId']) ? $data['shopId'] : null;
        $this->container['changelog'] = isset($data['changelog']) ? $data['changelog'] : null;
        $this->container['productGroupSlugs'] = isset($data['productGroupSlugs']) ? $data['productGroupSlugs'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['billingTerm'] = isset($data['billingTerm']) ? $data['billingTerm'] : null;
        $this->container['activationLimit'] = isset($data['activationLimit']) ? $data['activationLimit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['shopId'] === null) {
            $invalidProperties[] = "'shopId' can't be null";
        }
        if ($this->container['changelog'] === null) {
            $invalidProperties[] = "'changelog' can't be null";
        }
        if ($this->container['productGroupSlugs'] === null) {
            $invalidProperties[] = "'productGroupSlugs' can't be null";
        }
        if ($this->container['billingType'] === null) {
            $invalidProperties[] = "'billingType' can't be null";
        }
        if ($this->container['billingTerm'] === null) {
            $invalidProperties[] = "'billingTerm' can't be null";
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
     * Gets shopId
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param int $shopId shopId
     *
     * @return $this
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets changelog
     *
     * @return string
     */
    public function getChangelog()
    {
        return $this->container['changelog'];
    }

    /**
     * Sets changelog
     *
     * @param string $changelog changelog
     *
     * @return $this
     */
    public function setChangelog($changelog)
    {
        $this->container['changelog'] = $changelog;

        return $this;
    }

    /**
     * Gets productGroupSlugs
     *
     * @return string[]
     */
    public function getProductGroupSlugs()
    {
        return $this->container['productGroupSlugs'];
    }

    /**
     * Sets productGroupSlugs
     *
     * @param string[] $productGroupSlugs productGroupSlugs
     *
     * @return $this
     */
    public function setProductGroupSlugs($productGroupSlugs)
    {
        $this->container['productGroupSlugs'] = $productGroupSlugs;

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
     * Gets billingTerm
     *
     * @return string
     */
    public function getBillingTerm()
    {
        return $this->container['billingTerm'];
    }

    /**
     * Sets billingTerm
     *
     * @param string $billingTerm billingTerm
     *
     * @return $this
     */
    public function setBillingTerm($billingTerm)
    {
        $this->container['billingTerm'] = $billingTerm;

        return $this;
    }

    /**
     * Gets activationLimit
     *
     * @return float
     */
    public function getActivationLimit()
    {
        return $this->container['activationLimit'];
    }

    /**
     * Sets activationLimit
     *
     * @param float $activationLimit activationLimit
     *
     * @return $this
     */
    public function setActivationLimit($activationLimit)
    {
        $this->container['activationLimit'] = $activationLimit;

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


