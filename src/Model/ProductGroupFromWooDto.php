<?php
/**
 * ProductGroupFromWooDto
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
 * Swagger Codegen version: 3.0.57
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
 * ProductGroupFromWooDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductGroupFromWooDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductGroupFromWooDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'productGroupTerm' => '\Yoast\MyYoastApiClient\Model\ProductGroupTerm',
        'productGroupMeta' => '\Yoast\MyYoastApiClient\Model\ProductGroupMeta',
        'extraData' => '\Yoast\MyYoastApiClient\Model\ProductGroupExtraData'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'productGroupTerm' => null,
        'productGroupMeta' => null,
        'extraData' => null
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
        'productGroupTerm' => 'productGroupTerm',
        'productGroupMeta' => 'productGroupMeta',
        'extraData' => 'extraData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'productGroupTerm' => 'setProductGroupTerm',
        'productGroupMeta' => 'setProductGroupMeta',
        'extraData' => 'setExtraData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'productGroupTerm' => 'getProductGroupTerm',
        'productGroupMeta' => 'getProductGroupMeta',
        'extraData' => 'getExtraData'
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
        $this->container['productGroupTerm'] = isset($data['productGroupTerm']) ? $data['productGroupTerm'] : null;
        $this->container['productGroupMeta'] = isset($data['productGroupMeta']) ? $data['productGroupMeta'] : null;
        $this->container['extraData'] = isset($data['extraData']) ? $data['extraData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['productGroupTerm'] === null) {
            $invalidProperties[] = "'productGroupTerm' can't be null";
        }
        if ($this->container['productGroupMeta'] === null) {
            $invalidProperties[] = "'productGroupMeta' can't be null";
        }
        if ($this->container['extraData'] === null) {
            $invalidProperties[] = "'extraData' can't be null";
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
     * Gets productGroupTerm
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductGroupTerm
     */
    public function getProductGroupTerm()
    {
        return $this->container['productGroupTerm'];
    }

    /**
     * Sets productGroupTerm
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductGroupTerm $productGroupTerm productGroupTerm
     *
     * @return $this
     */
    public function setProductGroupTerm($productGroupTerm)
    {
        $this->container['productGroupTerm'] = $productGroupTerm;

        return $this;
    }

    /**
     * Gets productGroupMeta
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductGroupMeta
     */
    public function getProductGroupMeta()
    {
        return $this->container['productGroupMeta'];
    }

    /**
     * Sets productGroupMeta
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductGroupMeta $productGroupMeta productGroupMeta
     *
     * @return $this
     */
    public function setProductGroupMeta($productGroupMeta)
    {
        $this->container['productGroupMeta'] = $productGroupMeta;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductGroupExtraData
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductGroupExtraData $extraData extraData
     *
     * @return $this
     */
    public function setExtraData($extraData)
    {
        $this->container['extraData'] = $extraData;

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
