<?php
/**
 * ProductGroup
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
 * ProductGroup Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProductGroup implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ProductGroup';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'slug' => 'string',
        'description' => 'string',
        'icon' => 'string',
        'svg_icon' => 'string',
        'changelog' => 'string',
        'version' => 'string',
        'course_id' => 'string',
        'parent_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'slug' => null,
        'description' => null,
        'icon' => null,
        'svg_icon' => null,
        'changelog' => null,
        'version' => null,
        'course_id' => null,
        'parent_id' => null
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
        'slug' => 'slug',
        'description' => 'description',
        'icon' => 'icon',
        'svg_icon' => 'svgIcon',
        'changelog' => 'changelog',
        'version' => 'version',
        'course_id' => 'courseId',
        'parent_id' => 'parentId'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'slug' => 'setSlug',
        'description' => 'setDescription',
        'icon' => 'setIcon',
        'svg_icon' => 'setSvgIcon',
        'changelog' => 'setChangelog',
        'version' => 'setVersion',
        'course_id' => 'setCourseId',
        'parent_id' => 'setParentId'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'slug' => 'getSlug',
        'description' => 'getDescription',
        'icon' => 'getIcon',
        'svg_icon' => 'getSvgIcon',
        'changelog' => 'getChangelog',
        'version' => 'getVersion',
        'course_id' => 'getCourseId',
        'parent_id' => 'getParentId'
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
        $this->container['slug'] = isset($data['slug']) ? $data['slug'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['svg_icon'] = isset($data['svg_icon']) ? $data['svg_icon'] : null;
        $this->container['changelog'] = isset($data['changelog']) ? $data['changelog'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['course_id'] = isset($data['course_id']) ? $data['course_id'] : null;
        $this->container['parent_id'] = isset($data['parent_id']) ? $data['parent_id'] : null;
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
        if ($this->container['slug'] === null) {
            $invalid_properties[] = "'slug' can't be null";
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
        if ($this->container['slug'] === null) {
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
     * Gets slug
     * @return string
     */
    public function getSlug()
    {
        return $this->container['slug'];
    }

    /**
     * Sets slug
     * @param string $slug
     * @return $this
     */
    public function setSlug($slug)
    {
        $this->container['slug'] = $slug;

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
     * Gets icon
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     * @param string $icon
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

        return $this;
    }

    /**
     * Gets svg_icon
     * @return string
     */
    public function getSvgIcon()
    {
        return $this->container['svg_icon'];
    }

    /**
     * Sets svg_icon
     * @param string $svg_icon
     * @return $this
     */
    public function setSvgIcon($svg_icon)
    {
        $this->container['svg_icon'] = $svg_icon;

        return $this;
    }

    /**
     * Gets changelog
     * @return string
     */
    public function getChangelog()
    {
        return $this->container['changelog'];
    }

    /**
     * Sets changelog
     * @param string $changelog
     * @return $this
     */
    public function setChangelog($changelog)
    {
        $this->container['changelog'] = $changelog;

        return $this;
    }

    /**
     * Gets version
     * @return string
     */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
     * Sets version
     * @param string $version
     * @return $this
     */
    public function setVersion($version)
    {
        $this->container['version'] = $version;

        return $this;
    }

    /**
     * Gets course_id
     * @return string
     */
    public function getCourseId()
    {
        return $this->container['course_id'];
    }

    /**
     * Sets course_id
     * @param string $course_id
     * @return $this
     */
    public function setCourseId($course_id)
    {
        $this->container['course_id'] = $course_id;

        return $this;
    }

    /**
     * Gets parent_id
     * @return string
     */
    public function getParentId()
    {
        return $this->container['parent_id'];
    }

    /**
     * Sets parent_id
     * @param string $parent_id
     * @return $this
     */
    public function setParentId($parent_id)
    {
        $this->container['parent_id'] = $parent_id;

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


