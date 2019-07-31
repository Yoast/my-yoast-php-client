<?php
/**
 * Course
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
 * Course Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Course implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Course';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'name' => 'string',
'description' => 'string',
'courseUrl' => 'string',
'certificateUrl' => 'string',
'sourceId' => 'int',
'createdAt' => '\DateTime',
'modifiedAt' => '\DateTime',
'iconUrl' => 'string',
'complimentary' => 'bool',
'open' => 'bool',
'hasTrial' => 'bool',
'deprecated' => 'bool',
'sale' => 'bool',
'saleLabel' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'description' => null,
'courseUrl' => null,
'certificateUrl' => null,
'sourceId' => null,
'createdAt' => 'date-time',
'modifiedAt' => 'date-time',
'iconUrl' => null,
'complimentary' => null,
'open' => null,
'hasTrial' => null,
'deprecated' => null,
'sale' => null,
'saleLabel' => null    ];

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
'name' => 'name',
'description' => 'description',
'courseUrl' => 'courseUrl',
'certificateUrl' => 'certificateUrl',
'sourceId' => 'sourceId',
'createdAt' => 'createdAt',
'modifiedAt' => 'modifiedAt',
'iconUrl' => 'iconUrl',
'complimentary' => 'complimentary',
'open' => 'open',
'hasTrial' => 'hasTrial',
'deprecated' => 'deprecated',
'sale' => 'sale',
'saleLabel' => 'saleLabel'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'description' => 'setDescription',
'courseUrl' => 'setCourseUrl',
'certificateUrl' => 'setCertificateUrl',
'sourceId' => 'setSourceId',
'createdAt' => 'setCreatedAt',
'modifiedAt' => 'setModifiedAt',
'iconUrl' => 'setIconUrl',
'complimentary' => 'setComplimentary',
'open' => 'setOpen',
'hasTrial' => 'setHasTrial',
'deprecated' => 'setDeprecated',
'sale' => 'setSale',
'saleLabel' => 'setSaleLabel'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'description' => 'getDescription',
'courseUrl' => 'getCourseUrl',
'certificateUrl' => 'getCertificateUrl',
'sourceId' => 'getSourceId',
'createdAt' => 'getCreatedAt',
'modifiedAt' => 'getModifiedAt',
'iconUrl' => 'getIconUrl',
'complimentary' => 'getComplimentary',
'open' => 'getOpen',
'hasTrial' => 'getHasTrial',
'deprecated' => 'getDeprecated',
'sale' => 'getSale',
'saleLabel' => 'getSaleLabel'    ];

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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['courseUrl'] = isset($data['courseUrl']) ? $data['courseUrl'] : null;
        $this->container['certificateUrl'] = isset($data['certificateUrl']) ? $data['certificateUrl'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['iconUrl'] = isset($data['iconUrl']) ? $data['iconUrl'] : null;
        $this->container['complimentary'] = isset($data['complimentary']) ? $data['complimentary'] : null;
        $this->container['open'] = isset($data['open']) ? $data['open'] : null;
        $this->container['hasTrial'] = isset($data['hasTrial']) ? $data['hasTrial'] : null;
        $this->container['deprecated'] = isset($data['deprecated']) ? $data['deprecated'] : null;
        $this->container['sale'] = isset($data['sale']) ? $data['sale'] : null;
        $this->container['saleLabel'] = isset($data['saleLabel']) ? $data['saleLabel'] : null;
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
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['courseUrl'] === null) {
            $invalidProperties[] = "'courseUrl' can't be null";
        }
        if ($this->container['certificateUrl'] === null) {
            $invalidProperties[] = "'certificateUrl' can't be null";
        }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['iconUrl'] === null) {
            $invalidProperties[] = "'iconUrl' can't be null";
        }
        if ($this->container['complimentary'] === null) {
            $invalidProperties[] = "'complimentary' can't be null";
        }
        if ($this->container['open'] === null) {
            $invalidProperties[] = "'open' can't be null";
        }
        if ($this->container['hasTrial'] === null) {
            $invalidProperties[] = "'hasTrial' can't be null";
        }
        if ($this->container['deprecated'] === null) {
            $invalidProperties[] = "'deprecated' can't be null";
        }
        if ($this->container['sale'] === null) {
            $invalidProperties[] = "'sale' can't be null";
        }
        if ($this->container['saleLabel'] === null) {
            $invalidProperties[] = "'saleLabel' can't be null";
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
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets courseUrl
     *
     * @return string
     */
    public function getCourseUrl()
    {
        return $this->container['courseUrl'];
    }

    /**
     * Sets courseUrl
     *
     * @param string $courseUrl courseUrl
     *
     * @return $this
     */
    public function setCourseUrl($courseUrl)
    {
        $this->container['courseUrl'] = $courseUrl;

        return $this;
    }

    /**
     * Gets certificateUrl
     *
     * @return string
     */
    public function getCertificateUrl()
    {
        return $this->container['certificateUrl'];
    }

    /**
     * Sets certificateUrl
     *
     * @param string $certificateUrl certificateUrl
     *
     * @return $this
     */
    public function setCertificateUrl($certificateUrl)
    {
        $this->container['certificateUrl'] = $certificateUrl;

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
     * Gets iconUrl
     *
     * @return string
     */
    public function getIconUrl()
    {
        return $this->container['iconUrl'];
    }

    /**
     * Sets iconUrl
     *
     * @param string $iconUrl iconUrl
     *
     * @return $this
     */
    public function setIconUrl($iconUrl)
    {
        $this->container['iconUrl'] = $iconUrl;

        return $this;
    }

    /**
     * Gets complimentary
     *
     * @return bool
     */
    public function getComplimentary()
    {
        return $this->container['complimentary'];
    }

    /**
     * Sets complimentary
     *
     * @param bool $complimentary complimentary
     *
     * @return $this
     */
    public function setComplimentary($complimentary)
    {
        $this->container['complimentary'] = $complimentary;

        return $this;
    }

    /**
     * Gets open
     *
     * @return bool
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     *
     * @param bool $open open
     *
     * @return $this
     */
    public function setOpen($open)
    {
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets hasTrial
     *
     * @return bool
     */
    public function getHasTrial()
    {
        return $this->container['hasTrial'];
    }

    /**
     * Sets hasTrial
     *
     * @param bool $hasTrial hasTrial
     *
     * @return $this
     */
    public function setHasTrial($hasTrial)
    {
        $this->container['hasTrial'] = $hasTrial;

        return $this;
    }

    /**
     * Gets deprecated
     *
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     *
     * @param bool $deprecated deprecated
     *
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->container['deprecated'] = $deprecated;

        return $this;
    }

    /**
     * Gets sale
     *
     * @return bool
     */
    public function getSale()
    {
        return $this->container['sale'];
    }

    /**
     * Sets sale
     *
     * @param bool $sale sale
     *
     * @return $this
     */
    public function setSale($sale)
    {
        $this->container['sale'] = $sale;

        return $this;
    }

    /**
     * Gets saleLabel
     *
     * @return string
     */
    public function getSaleLabel()
    {
        return $this->container['saleLabel'];
    }

    /**
     * Sets saleLabel
     *
     * @param string $saleLabel saleLabel
     *
     * @return $this
     */
    public function setSaleLabel($saleLabel)
    {
        $this->container['saleLabel'] = $saleLabel;

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
