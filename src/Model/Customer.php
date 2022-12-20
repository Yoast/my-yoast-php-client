<?php
/**
 * Customer
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
 * Swagger Codegen version: 3.0.36
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
 * Customer Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Customer implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Customer';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'sourceId' => 'int',
'enabled' => 'bool',
'realm' => 'string',
'username' => 'string',
'email' => 'string',
'emailVerified' => 'bool',
'verificationToken' => 'string',
'createdAt' => '\DateTime',
'modifiedAt' => '\DateTime',
'userEmail' => 'string',
'userFirstName' => 'string',
'userLastName' => 'string',
'userCompany' => 'string',
'userAddress1' => 'string',
'userAddress2' => 'string',
'userCity' => 'string',
'userState' => 'string',
'userPostCode' => 'string',
'userCountry' => 'string',
'userPhone' => 'string',
'userAvatarUrl' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'sourceId' => null,
'enabled' => null,
'realm' => null,
'username' => null,
'email' => null,
'emailVerified' => null,
'verificationToken' => null,
'createdAt' => 'date-time',
'modifiedAt' => 'date-time',
'userEmail' => null,
'userFirstName' => null,
'userLastName' => null,
'userCompany' => null,
'userAddress1' => null,
'userAddress2' => null,
'userCity' => null,
'userState' => null,
'userPostCode' => null,
'userCountry' => null,
'userPhone' => null,
'userAvatarUrl' => null    ];

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
'sourceId' => 'sourceId',
'enabled' => 'enabled',
'realm' => 'realm',
'username' => 'username',
'email' => 'email',
'emailVerified' => 'emailVerified',
'verificationToken' => 'verificationToken',
'createdAt' => 'createdAt',
'modifiedAt' => 'modifiedAt',
'userEmail' => 'userEmail',
'userFirstName' => 'userFirstName',
'userLastName' => 'userLastName',
'userCompany' => 'userCompany',
'userAddress1' => 'userAddress1',
'userAddress2' => 'userAddress2',
'userCity' => 'userCity',
'userState' => 'userState',
'userPostCode' => 'userPostCode',
'userCountry' => 'userCountry',
'userPhone' => 'userPhone',
'userAvatarUrl' => 'userAvatarUrl'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'sourceId' => 'setSourceId',
'enabled' => 'setEnabled',
'realm' => 'setRealm',
'username' => 'setUsername',
'email' => 'setEmail',
'emailVerified' => 'setEmailVerified',
'verificationToken' => 'setVerificationToken',
'createdAt' => 'setCreatedAt',
'modifiedAt' => 'setModifiedAt',
'userEmail' => 'setUserEmail',
'userFirstName' => 'setUserFirstName',
'userLastName' => 'setUserLastName',
'userCompany' => 'setUserCompany',
'userAddress1' => 'setUserAddress1',
'userAddress2' => 'setUserAddress2',
'userCity' => 'setUserCity',
'userState' => 'setUserState',
'userPostCode' => 'setUserPostCode',
'userCountry' => 'setUserCountry',
'userPhone' => 'setUserPhone',
'userAvatarUrl' => 'setUserAvatarUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'sourceId' => 'getSourceId',
'enabled' => 'getEnabled',
'realm' => 'getRealm',
'username' => 'getUsername',
'email' => 'getEmail',
'emailVerified' => 'getEmailVerified',
'verificationToken' => 'getVerificationToken',
'createdAt' => 'getCreatedAt',
'modifiedAt' => 'getModifiedAt',
'userEmail' => 'getUserEmail',
'userFirstName' => 'getUserFirstName',
'userLastName' => 'getUserLastName',
'userCompany' => 'getUserCompany',
'userAddress1' => 'getUserAddress1',
'userAddress2' => 'getUserAddress2',
'userCity' => 'getUserCity',
'userState' => 'getUserState',
'userPostCode' => 'getUserPostCode',
'userCountry' => 'getUserCountry',
'userPhone' => 'getUserPhone',
'userAvatarUrl' => 'getUserAvatarUrl'    ];

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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['realm'] = isset($data['realm']) ? $data['realm'] : null;
        $this->container['username'] = isset($data['username']) ? $data['username'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['emailVerified'] = isset($data['emailVerified']) ? $data['emailVerified'] : null;
        $this->container['verificationToken'] = isset($data['verificationToken']) ? $data['verificationToken'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['userEmail'] = isset($data['userEmail']) ? $data['userEmail'] : null;
        $this->container['userFirstName'] = isset($data['userFirstName']) ? $data['userFirstName'] : null;
        $this->container['userLastName'] = isset($data['userLastName']) ? $data['userLastName'] : null;
        $this->container['userCompany'] = isset($data['userCompany']) ? $data['userCompany'] : null;
        $this->container['userAddress1'] = isset($data['userAddress1']) ? $data['userAddress1'] : null;
        $this->container['userAddress2'] = isset($data['userAddress2']) ? $data['userAddress2'] : null;
        $this->container['userCity'] = isset($data['userCity']) ? $data['userCity'] : null;
        $this->container['userState'] = isset($data['userState']) ? $data['userState'] : null;
        $this->container['userPostCode'] = isset($data['userPostCode']) ? $data['userPostCode'] : null;
        $this->container['userCountry'] = isset($data['userCountry']) ? $data['userCountry'] : null;
        $this->container['userPhone'] = isset($data['userPhone']) ? $data['userPhone'] : null;
        $this->container['userAvatarUrl'] = isset($data['userAvatarUrl']) ? $data['userAvatarUrl'] : null;
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
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['realm'] === null) {
            $invalidProperties[] = "'realm' can't be null";
        }
        if ($this->container['username'] === null) {
            $invalidProperties[] = "'username' can't be null";
        }
        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['emailVerified'] === null) {
            $invalidProperties[] = "'emailVerified' can't be null";
        }
        if ($this->container['verificationToken'] === null) {
            $invalidProperties[] = "'verificationToken' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['userEmail'] === null) {
            $invalidProperties[] = "'userEmail' can't be null";
        }
        if ($this->container['userFirstName'] === null) {
            $invalidProperties[] = "'userFirstName' can't be null";
        }
        if ($this->container['userLastName'] === null) {
            $invalidProperties[] = "'userLastName' can't be null";
        }
        if ($this->container['userCompany'] === null) {
            $invalidProperties[] = "'userCompany' can't be null";
        }
        if ($this->container['userAddress1'] === null) {
            $invalidProperties[] = "'userAddress1' can't be null";
        }
        if ($this->container['userAddress2'] === null) {
            $invalidProperties[] = "'userAddress2' can't be null";
        }
        if ($this->container['userCity'] === null) {
            $invalidProperties[] = "'userCity' can't be null";
        }
        if ($this->container['userState'] === null) {
            $invalidProperties[] = "'userState' can't be null";
        }
        if ($this->container['userPostCode'] === null) {
            $invalidProperties[] = "'userPostCode' can't be null";
        }
        if ($this->container['userCountry'] === null) {
            $invalidProperties[] = "'userCountry' can't be null";
        }
        if ($this->container['userPhone'] === null) {
            $invalidProperties[] = "'userPhone' can't be null";
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
     * Gets sourceId
     *
     * @return int
     */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
     * Sets sourceId
     *
     * @param int $sourceId sourceId
     *
     * @return $this
     */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;

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
     * Gets realm
     *
     * @return string
     */
    public function getRealm()
    {
        return $this->container['realm'];
    }

    /**
     * Sets realm
     *
     * @param string $realm realm
     *
     * @return $this
     */
    public function setRealm($realm)
    {
        $this->container['realm'] = $realm;

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
     * Gets emailVerified
     *
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->container['emailVerified'];
    }

    /**
     * Sets emailVerified
     *
     * @param bool $emailVerified emailVerified
     *
     * @return $this
     */
    public function setEmailVerified($emailVerified)
    {
        $this->container['emailVerified'] = $emailVerified;

        return $this;
    }

    /**
     * Gets verificationToken
     *
     * @return string
     */
    public function getVerificationToken()
    {
        return $this->container['verificationToken'];
    }

    /**
     * Sets verificationToken
     *
     * @param string $verificationToken verificationToken
     *
     * @return $this
     */
    public function setVerificationToken($verificationToken)
    {
        $this->container['verificationToken'] = $verificationToken;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     *
     * @param \DateTime $modifiedAt modifiedAt
     *
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;

        return $this;
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
     * Gets userCompany
     *
     * @return string
     */
    public function getUserCompany()
    {
        return $this->container['userCompany'];
    }

    /**
     * Sets userCompany
     *
     * @param string $userCompany userCompany
     *
     * @return $this
     */
    public function setUserCompany($userCompany)
    {
        $this->container['userCompany'] = $userCompany;

        return $this;
    }

    /**
     * Gets userAddress1
     *
     * @return string
     */
    public function getUserAddress1()
    {
        return $this->container['userAddress1'];
    }

    /**
     * Sets userAddress1
     *
     * @param string $userAddress1 userAddress1
     *
     * @return $this
     */
    public function setUserAddress1($userAddress1)
    {
        $this->container['userAddress1'] = $userAddress1;

        return $this;
    }

    /**
     * Gets userAddress2
     *
     * @return string
     */
    public function getUserAddress2()
    {
        return $this->container['userAddress2'];
    }

    /**
     * Sets userAddress2
     *
     * @param string $userAddress2 userAddress2
     *
     * @return $this
     */
    public function setUserAddress2($userAddress2)
    {
        $this->container['userAddress2'] = $userAddress2;

        return $this;
    }

    /**
     * Gets userCity
     *
     * @return string
     */
    public function getUserCity()
    {
        return $this->container['userCity'];
    }

    /**
     * Sets userCity
     *
     * @param string $userCity userCity
     *
     * @return $this
     */
    public function setUserCity($userCity)
    {
        $this->container['userCity'] = $userCity;

        return $this;
    }

    /**
     * Gets userState
     *
     * @return string
     */
    public function getUserState()
    {
        return $this->container['userState'];
    }

    /**
     * Sets userState
     *
     * @param string $userState userState
     *
     * @return $this
     */
    public function setUserState($userState)
    {
        $this->container['userState'] = $userState;

        return $this;
    }

    /**
     * Gets userPostCode
     *
     * @return string
     */
    public function getUserPostCode()
    {
        return $this->container['userPostCode'];
    }

    /**
     * Sets userPostCode
     *
     * @param string $userPostCode userPostCode
     *
     * @return $this
     */
    public function setUserPostCode($userPostCode)
    {
        $this->container['userPostCode'] = $userPostCode;

        return $this;
    }

    /**
     * Gets userCountry
     *
     * @return string
     */
    public function getUserCountry()
    {
        return $this->container['userCountry'];
    }

    /**
     * Sets userCountry
     *
     * @param string $userCountry userCountry
     *
     * @return $this
     */
    public function setUserCountry($userCountry)
    {
        $this->container['userCountry'] = $userCountry;

        return $this;
    }

    /**
     * Gets userPhone
     *
     * @return string
     */
    public function getUserPhone()
    {
        return $this->container['userPhone'];
    }

    /**
     * Sets userPhone
     *
     * @param string $userPhone userPhone
     *
     * @return $this
     */
    public function setUserPhone($userPhone)
    {
        $this->container['userPhone'] = $userPhone;

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
