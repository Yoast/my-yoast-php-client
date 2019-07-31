<?php
/**
 * ExtraSubscriptionData
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
 * Swagger Codegen version: 3.0.9
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
 * ExtraSubscriptionData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtraSubscriptionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtraSubscriptionData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shopId' => 'int',
'requiresManualRenewal' => 'bool',
'renewalPrices' => '\Yoast\MyYoastApiClient\Model\RenewalAmount[]',
'renewalUrl' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shopId' => null,
'requiresManualRenewal' => null,
'renewalPrices' => null,
'renewalUrl' => null    ];

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
'requiresManualRenewal' => 'requires_manual_renewal',
'renewalPrices' => 'renewal_prices',
'renewalUrl' => 'renewal_url'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shopId' => 'setShopId',
'requiresManualRenewal' => 'setRequiresManualRenewal',
'renewalPrices' => 'setRenewalPrices',
'renewalUrl' => 'setRenewalUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shopId' => 'getShopId',
'requiresManualRenewal' => 'getRequiresManualRenewal',
'renewalPrices' => 'getRenewalPrices',
'renewalUrl' => 'getRenewalUrl'    ];

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
        $this->container['requiresManualRenewal'] = isset($data['requiresManualRenewal']) ? $data['requiresManualRenewal'] : null;
        $this->container['renewalPrices'] = isset($data['renewalPrices']) ? $data['renewalPrices'] : null;
        $this->container['renewalUrl'] = isset($data['renewalUrl']) ? $data['renewalUrl'] : null;
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
        if ($this->container['requiresManualRenewal'] === null) {
            $invalidProperties[] = "'requiresManualRenewal' can't be null";
        }
        if ($this->container['renewalPrices'] === null) {
            $invalidProperties[] = "'renewalPrices' can't be null";
        }
        if ($this->container['renewalUrl'] === null) {
            $invalidProperties[] = "'renewalUrl' can't be null";
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
     * Gets requiresManualRenewal
     *
     * @return bool
     */
    public function getRequiresManualRenewal()
    {
        return $this->container['requiresManualRenewal'];
    }

    /**
     * Sets requiresManualRenewal
     *
     * @param bool $requiresManualRenewal requiresManualRenewal
     *
     * @return $this
     */
    public function setRequiresManualRenewal($requiresManualRenewal)
    {
        $this->container['requiresManualRenewal'] = $requiresManualRenewal;

        return $this;
    }

    /**
     * Gets renewalPrices
     *
     * @return \Yoast\MyYoastApiClient\Model\RenewalAmount[]
     */
    public function getRenewalPrices()
    {
        return $this->container['renewalPrices'];
    }

    /**
     * Sets renewalPrices
     *
     * @param \Yoast\MyYoastApiClient\Model\RenewalAmount[] $renewalPrices renewalPrices
     *
     * @return $this
     */
    public function setRenewalPrices($renewalPrices)
    {
        $this->container['renewalPrices'] = $renewalPrices;

        return $this;
    }

    /**
     * Gets renewalUrl
     *
     * @return string
     */
    public function getRenewalUrl()
    {
        return $this->container['renewalUrl'];
    }

    /**
     * Sets renewalUrl
     *
     * @param string $renewalUrl renewalUrl
     *
     * @return $this
     */
    public function setRenewalUrl($renewalUrl)
    {
        $this->container['renewalUrl'] = $renewalUrl;

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
