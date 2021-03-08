<?php
/**
 * CustomerData
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
 * CustomerData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CustomerData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CustomerData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'avatarUrl' => 'string',
'billing' => '\Yoast\MyYoastApiClient\Model\BillingDto',
'dateCreated' => '\DateTime',
'dateCreatedGmt' => '\DateTime',
'dateModified' => '\DateTime',
'dateModifiedGmt' => '\DateTime',
'email' => 'string',
'firstName' => 'string',
'lastName' => 'string',
'isPayingCustomer' => 'bool',
'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]',
'role' => 'string',
'shipping' => '\Yoast\MyYoastApiClient\Model\ShippingDto',
'username' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'avatarUrl' => null,
'billing' => null,
'dateCreated' => 'date-time',
'dateCreatedGmt' => 'date-time',
'dateModified' => 'date-time',
'dateModifiedGmt' => 'date-time',
'email' => 'email',
'firstName' => null,
'lastName' => null,
'isPayingCustomer' => null,
'metaData' => null,
'role' => null,
'shipping' => null,
'username' => null    ];

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
'avatarUrl' => 'avatar_url',
'billing' => 'billing',
'dateCreated' => 'date_created',
'dateCreatedGmt' => 'date_created_gmt',
'dateModified' => 'date_modified',
'dateModifiedGmt' => 'date_modified_gmt',
'email' => 'email',
'firstName' => 'first_name',
'lastName' => 'last_name',
'isPayingCustomer' => 'is_paying_customer',
'metaData' => 'meta_data',
'role' => 'role',
'shipping' => 'shipping',
'username' => 'username'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'avatarUrl' => 'setAvatarUrl',
'billing' => 'setBilling',
'dateCreated' => 'setDateCreated',
'dateCreatedGmt' => 'setDateCreatedGmt',
'dateModified' => 'setDateModified',
'dateModifiedGmt' => 'setDateModifiedGmt',
'email' => 'setEmail',
'firstName' => 'setFirstName',
'lastName' => 'setLastName',
'isPayingCustomer' => 'setIsPayingCustomer',
'metaData' => 'setMetaData',
'role' => 'setRole',
'shipping' => 'setShipping',
'username' => 'setUsername'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'avatarUrl' => 'getAvatarUrl',
'billing' => 'getBilling',
'dateCreated' => 'getDateCreated',
'dateCreatedGmt' => 'getDateCreatedGmt',
'dateModified' => 'getDateModified',
'dateModifiedGmt' => 'getDateModifiedGmt',
'email' => 'getEmail',
'firstName' => 'getFirstName',
'lastName' => 'getLastName',
'isPayingCustomer' => 'getIsPayingCustomer',
'metaData' => 'getMetaData',
'role' => 'getRole',
'shipping' => 'getShipping',
'username' => 'getUsername'    ];

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
        $this->container['avatarUrl'] = isset($data['avatarUrl']) ? $data['avatarUrl'] : null;
        $this->container['billing'] = isset($data['billing']) ? $data['billing'] : null;
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateCreatedGmt'] = isset($data['dateCreatedGmt']) ? $data['dateCreatedGmt'] : null;
        $this->container['dateModified'] = isset($data['dateModified']) ? $data['dateModified'] : null;
        $this->container['dateModifiedGmt'] = isset($data['dateModifiedGmt']) ? $data['dateModifiedGmt'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['firstName'] = isset($data['firstName']) ? $data['firstName'] : null;
        $this->container['lastName'] = isset($data['lastName']) ? $data['lastName'] : null;
        $this->container['isPayingCustomer'] = isset($data['isPayingCustomer']) ? $data['isPayingCustomer'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['role'] = isset($data['role']) ? $data['role'] : null;
        $this->container['shipping'] = isset($data['shipping']) ? $data['shipping'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
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
        if ($this->container['billing'] === null) {
            $invalidProperties[] = "'billing' can't be null";
        }
        if ($this->container['dateCreated'] === null) {
            $invalidProperties[] = "'dateCreated' can't be null";
        }
        if ($this->container['dateCreatedGmt'] === null) {
            $invalidProperties[] = "'dateCreatedGmt' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['firstName'] === null) {
            $invalidProperties[] = "'firstName' can't be null";
        }
        if ($this->container['lastName'] === null) {
            $invalidProperties[] = "'lastName' can't be null";
        }
        if ($this->container['isPayingCustomer'] === null) {
            $invalidProperties[] = "'isPayingCustomer' can't be null";
        }
        if ($this->container['metaData'] === null) {
            $invalidProperties[] = "'metaData' can't be null";
        }
        if ($this->container['role'] === null) {
            $invalidProperties[] = "'role' can't be null";
        }
        if ($this->container['shipping'] === null) {
            $invalidProperties[] = "'shipping' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
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
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets avatarUrl
     *
     * @return string
     */
    public function getAvatarUrl()
    {
        return $this->container['avatarUrl'];
    }

    /**
     * Sets avatarUrl
     *
     * @param string $avatarUrl avatarUrl
     *
     * @return $this
     */
    public function setAvatarUrl($avatarUrl)
    {
        $this->container['avatarUrl'] = $avatarUrl;

        return $this;
    }

    /**
     * Gets billing
     *
     * @return \Yoast\MyYoastApiClient\Model\BillingDto
     */
    public function getBilling()
    {
        return $this->container['billing'];
    }

    /**
     * Sets billing
     *
     * @param \Yoast\MyYoastApiClient\Model\BillingDto $billing billing
     *
     * @return $this
     */
    public function setBilling($billing)
    {
        $this->container['billing'] = $billing;

        return $this;
    }

    /**
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated dateCreated
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateCreatedGmt
     *
     * @return \DateTime
     */
    public function getDateCreatedGmt()
    {
        return $this->container['dateCreatedGmt'];
    }

    /**
     * Sets dateCreatedGmt
     *
     * @param \DateTime $dateCreatedGmt dateCreatedGmt
     *
     * @return $this
     */
    public function setDateCreatedGmt($dateCreatedGmt)
    {
        $this->container['dateCreatedGmt'] = $dateCreatedGmt;

        return $this;
    }

    /**
     * Gets dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->container['dateModified'];
    }

    /**
     * Sets dateModified
     *
     * @param \DateTime $dateModified dateModified
     *
     * @return $this
     */
    public function setDateModified($dateModified)
    {
        $this->container['dateModified'] = $dateModified;

        return $this;
    }

    /**
     * Gets dateModifiedGmt
     *
     * @return \DateTime
     */
    public function getDateModifiedGmt()
    {
        return $this->container['dateModifiedGmt'];
    }

    /**
     * Sets dateModifiedGmt
     *
     * @param \DateTime $dateModifiedGmt dateModifiedGmt
     *
     * @return $this
     */
    public function setDateModifiedGmt($dateModifiedGmt)
    {
        $this->container['dateModifiedGmt'] = $dateModifiedGmt;

        return $this;
    }

    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->container['firstName'];
    }

    /**
     * Sets firstName
     *
     * @param string $firstName firstName
     *
     * @return $this
     */
    public function setFirstName($firstName)
    {
        $this->container['firstName'] = $firstName;

        return $this;
    }

    /**
     * Gets lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->container['lastName'];
    }

    /**
     * Sets lastName
     *
     * @param string $lastName lastName
     *
     * @return $this
     */
    public function setLastName($lastName)
    {
        $this->container['lastName'] = $lastName;

        return $this;
    }

    /**
     * Gets isPayingCustomer
     *
     * @return bool
     */
    public function getIsPayingCustomer()
    {
        return $this->container['isPayingCustomer'];
    }

    /**
     * Sets isPayingCustomer
     *
     * @param bool $isPayingCustomer isPayingCustomer
     *
     * @return $this
     */
    public function setIsPayingCustomer($isPayingCustomer)
    {
        $this->container['isPayingCustomer'] = $isPayingCustomer;

        return $this;
    }

    /**
     * Gets metaData
     *
     * @return \Yoast\MyYoastApiClient\Model\MetaDataDto[]
     */
    public function getMetaData()
    {
        return $this->container['metaData'];
    }

    /**
     * Sets metaData
     *
     * @param \Yoast\MyYoastApiClient\Model\MetaDataDto[] $metaData metaData
     *
     * @return $this
     */
    public function setMetaData($metaData)
    {
        $this->container['metaData'] = $metaData;

        return $this;
    }

    /**
     * Gets role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->container['role'];
    }

    /**
     * Sets role
     *
     * @param string $role role
     *
     * @return $this
     */
    public function setRole($role)
    {
        $this->container['role'] = $role;

        return $this;
    }

    /**
     * Gets shipping
     *
     * @return \Yoast\MyYoastApiClient\Model\ShippingDto
     */
    public function getShipping()
    {
        return $this->container['shipping'];
    }

    /**
     * Sets shipping
     *
     * @param \Yoast\MyYoastApiClient\Model\ShippingDto $shipping shipping
     *
     * @return $this
     */
    public function setShipping($shipping)
    {
        $this->container['shipping'] = $shipping;

        return $this;
    }

    /**
     * Gets username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->container['username'];
    }

    /**
     * Sets username
     *
     * @param string $username username
     *
     * @return $this
     */
    public function setUsername($username)
    {
        $this->container['username'] = $username;

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
