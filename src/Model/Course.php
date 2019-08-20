<?php
/**
 * Course
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * my-yoast
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yoast\MyYoastApiClient\Model;

use \ArrayAccess;

/**
 * Course Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Course implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Course';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'description' => 'string',
        'course_url' => 'string',
        'certificate_url' => 'string',
        'icon_url' => 'string',
        'complimentary' => 'bool',
        'open' => 'bool',
        'has_trial' => 'bool',
        'deprecated' => 'bool',
        'sale' => 'bool',
        'sale_label' => 'string',
        'source_id' => 'double'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'course_url' => null,
        'certificate_url' => null,
        'icon_url' => null,
        'complimentary' => null,
        'open' => null,
        'has_trial' => null,
        'deprecated' => null,
        'sale' => null,
        'sale_label' => null,
        'source_id' => 'double'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'course_url' => 'courseUrl',
        'certificate_url' => 'certificateUrl',
        'icon_url' => 'iconUrl',
        'complimentary' => 'complimentary',
        'open' => 'open',
        'has_trial' => 'hasTrial',
        'deprecated' => 'deprecated',
        'sale' => 'sale',
        'sale_label' => 'saleLabel',
        'source_id' => 'sourceId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'course_url' => 'setCourseUrl',
        'certificate_url' => 'setCertificateUrl',
        'icon_url' => 'setIconUrl',
        'complimentary' => 'setComplimentary',
        'open' => 'setOpen',
        'has_trial' => 'setHasTrial',
        'deprecated' => 'setDeprecated',
        'sale' => 'setSale',
        'sale_label' => 'setSaleLabel',
        'source_id' => 'setSourceId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'course_url' => 'getCourseUrl',
        'certificate_url' => 'getCertificateUrl',
        'icon_url' => 'getIconUrl',
        'complimentary' => 'getComplimentary',
        'open' => 'getOpen',
        'has_trial' => 'getHasTrial',
        'deprecated' => 'getDeprecated',
        'sale' => 'getSale',
        'sale_label' => 'getSaleLabel',
        'source_id' => 'getSourceId'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['course_url'] = isset($data['course_url']) ? $data['course_url'] : null;
        $this->container['certificate_url'] = isset($data['certificate_url']) ? $data['certificate_url'] : null;
        $this->container['icon_url'] = isset($data['icon_url']) ? $data['icon_url'] : null;
        $this->container['complimentary'] = isset($data['complimentary']) ? $data['complimentary'] : false;
        $this->container['open'] = isset($data['open']) ? $data['open'] : false;
        $this->container['has_trial'] = isset($data['has_trial']) ? $data['has_trial'] : false;
        $this->container['deprecated'] = isset($data['deprecated']) ? $data['deprecated'] : false;
        $this->container['sale'] = isset($data['sale']) ? $data['sale'] : false;
        $this->container['sale_label'] = isset($data['sale_label']) ? $data['sale_label'] : null;
        $this->container['source_id'] = isset($data['source_id']) ? $data['source_id'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalid_properties[] = "'name' can't be null";
        }
        if ($this->container['course_url'] === null) {
            $invalid_properties[] = "'course_url' can't be null";
        }
        if ($this->container['source_id'] === null) {
            $invalid_properties[] = "'source_id' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['course_url'] === null) {
            return false;
        }
        if ($this->container['source_id'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets course_url
     * @return string
     */
    public function getCourseUrl()
    {
        return $this->container['course_url'];
    }

    /**
     * Sets course_url
     * @param string $course_url
     * @return $this
     */
    public function setCourseUrl($course_url)
    {
        $this->container['course_url'] = $course_url;

        return $this;
    }

    /**
     * Gets certificate_url
     * @return string
     */
    public function getCertificateUrl()
    {
        return $this->container['certificate_url'];
    }

    /**
     * Sets certificate_url
     * @param string $certificate_url
     * @return $this
     */
    public function setCertificateUrl($certificate_url)
    {
        $this->container['certificate_url'] = $certificate_url;

        return $this;
    }

    /**
     * Gets icon_url
     * @return string
     */
    public function getIconUrl()
    {
        return $this->container['icon_url'];
    }

    /**
     * Sets icon_url
     * @param string $icon_url
     * @return $this
     */
    public function setIconUrl($icon_url)
    {
        $this->container['icon_url'] = $icon_url;

        return $this;
    }

    /**
     * Gets complimentary
     * @return bool
     */
    public function getComplimentary()
    {
        return $this->container['complimentary'];
    }

    /**
     * Sets complimentary
     * @param bool $complimentary
     * @return $this
     */
    public function setComplimentary($complimentary)
    {
        $this->container['complimentary'] = $complimentary;

        return $this;
    }

    /**
     * Gets open
     * @return bool
     */
    public function getOpen()
    {
        return $this->container['open'];
    }

    /**
     * Sets open
     * @param bool $open
     * @return $this
     */
    public function setOpen($open)
    {
        $this->container['open'] = $open;

        return $this;
    }

    /**
     * Gets has_trial
     * @return bool
     */
    public function getHasTrial()
    {
        return $this->container['has_trial'];
    }

    /**
     * Sets has_trial
     * @param bool $has_trial
     * @return $this
     */
    public function setHasTrial($has_trial)
    {
        $this->container['has_trial'] = $has_trial;

        return $this;
    }

    /**
     * Gets deprecated
     * @return bool
     */
    public function getDeprecated()
    {
        return $this->container['deprecated'];
    }

    /**
     * Sets deprecated
     * @param bool $deprecated
     * @return $this
     */
    public function setDeprecated($deprecated)
    {
        $this->container['deprecated'] = $deprecated;

        return $this;
    }

    /**
     * Gets sale
     * @return bool
     */
    public function getSale()
    {
        return $this->container['sale'];
    }

    /**
     * Sets sale
     * @param bool $sale
     * @return $this
     */
    public function setSale($sale)
    {
        $this->container['sale'] = $sale;

        return $this;
    }

    /**
     * Gets sale_label
     * @return string
     */
    public function getSaleLabel()
    {
        return $this->container['sale_label'];
    }

    /**
     * Sets sale_label
     * @param string $sale_label
     * @return $this
     */
    public function setSaleLabel($sale_label)
    {
        $this->container['sale_label'] = $sale_label;

        return $this;
    }

    /**
     * Gets source_id
     * @return double
     */
    public function getSourceId()
    {
        return $this->container['source_id'];
    }

    /**
     * Sets source_id
     * @param double $source_id
     * @return $this
     */
    public function setSourceId($source_id)
    {
        $this->container['source_id'] = $source_id;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Yoast\MyYoastApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Yoast\MyYoastApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


