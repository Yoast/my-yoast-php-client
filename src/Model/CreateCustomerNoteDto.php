<?php
/**
 * CreateCustomerNoteDto
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
 * CreateCustomerNoteDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CreateCustomerNoteDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CreateCustomerNoteDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customerId' => 'string',
        'authorId' => 'string',
        'content' => 'string',
        'nextContactDate' => '\Yoast\MyYoastApiClient\Model\\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customerId' => null,
        'authorId' => null,
        'content' => null,
        'nextContactDate' => null
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
        'customerId' => 'customerId',
        'authorId' => 'authorId',
        'content' => 'content',
        'nextContactDate' => 'nextContactDate'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customerId' => 'setCustomerId',
        'authorId' => 'setAuthorId',
        'content' => 'setContent',
        'nextContactDate' => 'setNextContactDate'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customerId' => 'getCustomerId',
        'authorId' => 'getAuthorId',
        'content' => 'getContent',
        'nextContactDate' => 'getNextContactDate'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['authorId'] = isset($data['authorId']) ? $data['authorId'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['nextContactDate'] = isset($data['nextContactDate']) ? $data['nextContactDate'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
        if ($this->container['authorId'] === null) {
            $invalidProperties[] = "'authorId' can't be null";
        }
        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
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
     * Gets customerId
     *
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
     * Sets customerId
     *
     * @param string $customerId customerId
     *
     * @return $this
     */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;

        return $this;
    }

    /**
     * Gets authorId
     *
     * @return string
     */
    public function getAuthorId()
    {
        return $this->container['authorId'];
    }

    /**
     * Sets authorId
     *
     * @param string $authorId authorId
     *
     * @return $this
     */
    public function setAuthorId($authorId)
    {
        $this->container['authorId'] = $authorId;

        return $this;
    }

    /**
     * Gets content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
     * Sets content
     *
     * @param string $content content
     *
     * @return $this
     */
    public function setContent($content)
    {
        $this->container['content'] = $content;

        return $this;
    }

    /**
     * Gets nextContactDate
     *
     * @return \Yoast\MyYoastApiClient\Model\\DateTime
     */
    public function getNextContactDate()
    {
        return $this->container['nextContactDate'];
    }

    /**
     * Sets nextContactDate
     *
     * @param \Yoast\MyYoastApiClient\Model\\DateTime $nextContactDate nextContactDate
     *
     * @return $this
     */
    public function setNextContactDate($nextContactDate)
    {
        $this->container['nextContactDate'] = $nextContactDate;

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


