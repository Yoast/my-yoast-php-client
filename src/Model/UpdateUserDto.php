<?php
/**
 * UpdateUserDto
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
 * Swagger Codegen version: 3.0.24
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
 * UpdateUserDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UpdateUserDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UpdateUserDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'userEmail' => 'string',
'userFirstName' => 'string',
'userLastName' => 'string',
'userAvatarUrl' => 'string',
'enabled' => 'bool'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'userEmail' => null,
'userFirstName' => null,
'userLastName' => null,
'userAvatarUrl' => null,
'enabled' => null    ];

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
        'userEmail' => 'userEmail',
'userFirstName' => 'userFirstName',
'userLastName' => 'userLastName',
'userAvatarUrl' => 'userAvatarUrl',
'enabled' => 'enabled'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'userEmail' => 'setUserEmail',
'userFirstName' => 'setUserFirstName',
'userLastName' => 'setUserLastName',
'userAvatarUrl' => 'setUserAvatarUrl',
'enabled' => 'setEnabled'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'userEmail' => 'getUserEmail',
'userFirstName' => 'getUserFirstName',
'userLastName' => 'getUserLastName',
'userAvatarUrl' => 'getUserAvatarUrl',
'enabled' => 'getEnabled'    ];

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
        $this->container['userEmail'] = isset($data['userEmail']) ? $data['userEmail'] : null;
        $this->container['userFirstName'] = isset($data['userFirstName']) ? $data['userFirstName'] : null;
        $this->container['userLastName'] = isset($data['userLastName']) ? $data['userLastName'] : null;
        $this->container['userAvatarUrl'] = isset($data['userAvatarUrl']) ? $data['userAvatarUrl'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['userEmail'] === null) {
            $invalidProperties[] = "'userEmail' can't be null";
        }
        if ($this->container['userFirstName'] === null) {
            $invalidProperties[] = "'userFirstName' can't be null";
        }
        if ($this->container['userLastName'] === null) {
            $invalidProperties[] = "'userLastName' can't be null";
        }
        if ($this->container['userAvatarUrl'] === null) {
            $invalidProperties[] = "'userAvatarUrl' can't be null";
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
     * Gets userEmail
     *
     * @return string
     */
    public function getUserEmail()
    {
        return $this->container['userEmail'];
    }

    /**
     * Sets userEmail
     *
     * @param string $userEmail userEmail
     *
     * @return $this
     */
    public function setUserEmail($userEmail)
    {
        $this->container['userEmail'] = $userEmail;

        return $this;
    }

    /**
     * Gets userFirstName
     *
     * @return string
     */
    public function getUserFirstName()
    {
        return $this->container['userFirstName'];
    }

    /**
     * Sets userFirstName
     *
     * @param string $userFirstName userFirstName
     *
     * @return $this
     */
    public function setUserFirstName($userFirstName)
    {
        $this->container['userFirstName'] = $userFirstName;

        return $this;
    }

    /**
     * Gets userLastName
     *
     * @return string
     */
    public function getUserLastName()
    {
        return $this->container['userLastName'];
    }

    /**
     * Sets userLastName
     *
     * @param string $userLastName userLastName
     *
     * @return $this
     */
    public function setUserLastName($userLastName)
    {
        $this->container['userLastName'] = $userLastName;

        return $this;
    }

    /**
     * Gets userAvatarUrl
     *
     * @return string
     */
    public function getUserAvatarUrl()
    {
        return $this->container['userAvatarUrl'];
    }

    /**
     * Sets userAvatarUrl
     *
     * @param string $userAvatarUrl userAvatarUrl
     *
     * @return $this
     */
    public function setUserAvatarUrl($userAvatarUrl)
    {
        $this->container['userAvatarUrl'] = $userAvatarUrl;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

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
