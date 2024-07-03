<?php
/**
 * License
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
 * License Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class License implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'License';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'licenseeEmail' => 'string',
        'licensedBy' => 'string',
        'productGroupId' => 'string',
        'licenseeId' => 'string',
        'knownSince' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'uuid',
        'licenseeEmail' => null,
        'licensedBy' => null,
        'productGroupId' => 'uuid',
        'licenseeId' => 'uuid',
        'knownSince' => 'date-time'
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
        'id' => 'id',
        'licenseeEmail' => 'licenseeEmail',
        'licensedBy' => 'licensedBy',
        'productGroupId' => 'productGroupId',
        'licenseeId' => 'licenseeId',
        'knownSince' => 'knownSince'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'licenseeEmail' => 'setLicenseeEmail',
        'licensedBy' => 'setLicensedBy',
        'productGroupId' => 'setProductGroupId',
        'licenseeId' => 'setLicenseeId',
        'knownSince' => 'setKnownSince'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'licenseeEmail' => 'getLicenseeEmail',
        'licensedBy' => 'getLicensedBy',
        'productGroupId' => 'getProductGroupId',
        'licenseeId' => 'getLicenseeId',
        'knownSince' => 'getKnownSince'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['licenseeEmail'] = isset($data['licenseeEmail']) ? $data['licenseeEmail'] : null;
        $this->container['licensedBy'] = isset($data['licensedBy']) ? $data['licensedBy'] : null;
        $this->container['productGroupId'] = isset($data['productGroupId']) ? $data['productGroupId'] : null;
        $this->container['licenseeId'] = isset($data['licenseeId']) ? $data['licenseeId'] : null;
        $this->container['knownSince'] = isset($data['knownSince']) ? $data['knownSince'] : null;
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
        if ($this->container['licenseeEmail'] === null) {
            $invalidProperties[] = "'licenseeEmail' can't be null";
        }
        if ($this->container['licensedBy'] === null) {
            $invalidProperties[] = "'licensedBy' can't be null";
        }
        if ($this->container['productGroupId'] === null) {
            $invalidProperties[] = "'productGroupId' can't be null";
        }
        if ($this->container['licenseeId'] === null) {
            $invalidProperties[] = "'licenseeId' can't be null";
        }
        if ($this->container['knownSince'] === null) {
            $invalidProperties[] = "'knownSince' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets licenseeEmail
     *
     * @return string
     */
    public function getLicenseeEmail()
    {
        return $this->container['licenseeEmail'];
    }

    /**
     * Sets licenseeEmail
     *
     * @param string $licenseeEmail The email of the licensee. This might not be a valid email address.
     *
     * @return $this
     */
    public function setLicenseeEmail($licenseeEmail)
    {
        $this->container['licenseeEmail'] = $licenseeEmail;

        return $this;
    }

    /**
     * Gets licensedBy
     *
     * @return string
     */
    public function getLicensedBy()
    {
        return $this->container['licensedBy'];
    }

    /**
     * Sets licensedBy
     *
     * @param string $licensedBy licensedBy
     *
     * @return $this
     */
    public function setLicensedBy($licensedBy)
    {
        $this->container['licensedBy'] = $licensedBy;

        return $this;
    }

    /**
     * Gets productGroupId
     *
     * @return string
     */
    public function getProductGroupId()
    {
        return $this->container['productGroupId'];
    }

    /**
     * Sets productGroupId
     *
     * @param string $productGroupId productGroupId
     *
     * @return $this
     */
    public function setProductGroupId($productGroupId)
    {
        $this->container['productGroupId'] = $productGroupId;

        return $this;
    }

    /**
     * Gets licenseeId
     *
     * @return string
     */
    public function getLicenseeId()
    {
        return $this->container['licenseeId'];
    }

    /**
     * Sets licenseeId
     *
     * @param string $licenseeId licenseeId
     *
     * @return $this
     */
    public function setLicenseeId($licenseeId)
    {
        $this->container['licenseeId'] = $licenseeId;

        return $this;
    }

    /**
     * Gets knownSince
     *
     * @return \DateTime
     */
    public function getKnownSince()
    {
        return $this->container['knownSince'];
    }

    /**
     * Sets knownSince
     *
     * @param \DateTime $knownSince knownSince
     *
     * @return $this
     */
    public function setKnownSince($knownSince)
    {
        $this->container['knownSince'] = $knownSince;

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
