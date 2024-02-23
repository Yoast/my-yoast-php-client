<?php
/**
 * AcademyCourseAccessListDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MyYoast
 *
 * The MyYoast Api
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.41
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
 * AcademyCourseAccessListDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AcademyCourseAccessListDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'AcademyCourseAccessListDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'courseIds' => 'string[]',
'customerTypes' => 'string[]',
'shopifySiteUrl' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'courseIds' => null,
'customerTypes' => null,
'shopifySiteUrl' => null    ];

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
        'courseIds' => 'courseIds',
'customerTypes' => 'customerTypes',
'shopifySiteUrl' => 'shopifySiteUrl'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'courseIds' => 'setCourseIds',
'customerTypes' => 'setCustomerTypes',
'shopifySiteUrl' => 'setShopifySiteUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'courseIds' => 'getCourseIds',
'customerTypes' => 'getCustomerTypes',
'shopifySiteUrl' => 'getShopifySiteUrl'    ];

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
        $this->container['courseIds'] = isset($data['courseIds']) ? $data['courseIds'] : null;
        $this->container['customerTypes'] = isset($data['customerTypes']) ? $data['customerTypes'] : null;
        $this->container['shopifySiteUrl'] = isset($data['shopifySiteUrl']) ? $data['shopifySiteUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['courseIds'] === null) {
            $invalidProperties[] = "'courseIds' can't be null";
        }
        if ($this->container['customerTypes'] === null) {
            $invalidProperties[] = "'customerTypes' can't be null";
        }
        if ($this->container['shopifySiteUrl'] === null) {
            $invalidProperties[] = "'shopifySiteUrl' can't be null";
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
     * Gets courseIds
     *
     * @return string[]
     */
    public function getCourseIds()
    {
        return $this->container['courseIds'];
    }

    /**
     * Sets courseIds
     *
     * @param string[] $courseIds courseIds
     *
     * @return $this
     */
    public function setCourseIds($courseIds)
    {
        $this->container['courseIds'] = $courseIds;

        return $this;
    }

    /**
     * Gets customerTypes
     *
     * @return string[]
     */
    public function getCustomerTypes()
    {
        return $this->container['customerTypes'];
    }

    /**
     * Sets customerTypes
     *
     * @param string[] $customerTypes customerTypes
     *
     * @return $this
     */
    public function setCustomerTypes($customerTypes)
    {
        $this->container['customerTypes'] = $customerTypes;

        return $this;
    }

    /**
     * Gets shopifySiteUrl
     *
     * @return string
     */
    public function getShopifySiteUrl()
    {
        return $this->container['shopifySiteUrl'];
    }

    /**
     * Sets shopifySiteUrl
     *
     * @param string $shopifySiteUrl shopifySiteUrl
     *
     * @return $this
     */
    public function setShopifySiteUrl($shopifySiteUrl)
    {
        $this->container['shopifySiteUrl'] = $shopifySiteUrl;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
    #[\ReturnTypeWillChange] 
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
