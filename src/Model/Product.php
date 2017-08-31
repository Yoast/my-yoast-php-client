<?php
/**
 * Product
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
 * Product Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Product implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'store_url' => 'string',
        'downloads' => 'object[]',
        'gl_number' => 'string',
        'is_download_only' => 'bool',
        'icon' => 'string',
        'shop_product_type' => 'string',
        'shop_status' => 'string',
        'price' => 'double',
        'shop_regular_price' => 'double',
        'shop_tax_status' => 'string',
        'shop_tax_class' => 'string',
        'current_version' => 'string',
        'changelog' => 'string',
        'type' => 'string',
        'currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'store_url' => null,
        'downloads' => null,
        'gl_number' => null,
        'is_download_only' => null,
        'icon' => null,
        'shop_product_type' => null,
        'shop_status' => null,
        'price' => 'double',
        'shop_regular_price' => 'double',
        'shop_tax_status' => null,
        'shop_tax_class' => null,
        'current_version' => null,
        'changelog' => null,
        'type' => null,
        'currency' => null
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
        'store_url' => 'storeUrl',
        'downloads' => 'downloads',
        'gl_number' => 'glNumber',
        'is_download_only' => 'isDownloadOnly',
        'icon' => 'icon',
        'shop_product_type' => 'shopProductType',
        'shop_status' => 'shopStatus',
        'price' => 'price',
        'shop_regular_price' => 'shopRegularPrice',
        'shop_tax_status' => 'shopTaxStatus',
        'shop_tax_class' => 'shopTaxClass',
        'current_version' => 'currentVersion',
        'changelog' => 'changelog',
        'type' => 'type',
        'currency' => 'currency'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'store_url' => 'setStoreUrl',
        'downloads' => 'setDownloads',
        'gl_number' => 'setGlNumber',
        'is_download_only' => 'setIsDownloadOnly',
        'icon' => 'setIcon',
        'shop_product_type' => 'setShopProductType',
        'shop_status' => 'setShopStatus',
        'price' => 'setPrice',
        'shop_regular_price' => 'setShopRegularPrice',
        'shop_tax_status' => 'setShopTaxStatus',
        'shop_tax_class' => 'setShopTaxClass',
        'current_version' => 'setCurrentVersion',
        'changelog' => 'setChangelog',
        'type' => 'setType',
        'currency' => 'setCurrency'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'store_url' => 'getStoreUrl',
        'downloads' => 'getDownloads',
        'gl_number' => 'getGlNumber',
        'is_download_only' => 'getIsDownloadOnly',
        'icon' => 'getIcon',
        'shop_product_type' => 'getShopProductType',
        'shop_status' => 'getShopStatus',
        'price' => 'getPrice',
        'shop_regular_price' => 'getShopRegularPrice',
        'shop_tax_status' => 'getShopTaxStatus',
        'shop_tax_class' => 'getShopTaxClass',
        'current_version' => 'getCurrentVersion',
        'changelog' => 'getChangelog',
        'type' => 'getType',
        'currency' => 'getCurrency'
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
        $this->container['store_url'] = isset($data['store_url']) ? $data['store_url'] : null;
        $this->container['downloads'] = isset($data['downloads']) ? $data['downloads'] : null;
        $this->container['gl_number'] = isset($data['gl_number']) ? $data['gl_number'] : null;
        $this->container['is_download_only'] = isset($data['is_download_only']) ? $data['is_download_only'] : false;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['shop_product_type'] = isset($data['shop_product_type']) ? $data['shop_product_type'] : null;
        $this->container['shop_status'] = isset($data['shop_status']) ? $data['shop_status'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['shop_regular_price'] = isset($data['shop_regular_price']) ? $data['shop_regular_price'] : null;
        $this->container['shop_tax_status'] = isset($data['shop_tax_status']) ? $data['shop_tax_status'] : null;
        $this->container['shop_tax_class'] = isset($data['shop_tax_class']) ? $data['shop_tax_class'] : null;
        $this->container['current_version'] = isset($data['current_version']) ? $data['current_version'] : null;
        $this->container['changelog'] = isset($data['changelog']) ? $data['changelog'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
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
        if ($this->container['store_url'] === null) {
            $invalid_properties[] = "'store_url' can't be null";
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
        if ($this->container['store_url'] === null) {
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
     * Gets store_url
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->container['store_url'];
    }

    /**
     * Sets store_url
     * @param string $store_url
     * @return $this
     */
    public function setStoreUrl($store_url)
    {
        $this->container['store_url'] = $store_url;

        return $this;
    }

    /**
     * Gets downloads
     * @return object[]
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     * @param object[] $downloads
     * @return $this
     */
    public function setDownloads($downloads)
    {
        $this->container['downloads'] = $downloads;

        return $this;
    }

    /**
     * Gets gl_number
     * @return string
     */
    public function getGlNumber()
    {
        return $this->container['gl_number'];
    }

    /**
     * Sets gl_number
     * @param string $gl_number
     * @return $this
     */
    public function setGlNumber($gl_number)
    {
        $this->container['gl_number'] = $gl_number;

        return $this;
    }

    /**
     * Gets is_download_only
     * @return bool
     */
    public function getIsDownloadOnly()
    {
        return $this->container['is_download_only'];
    }

    /**
     * Sets is_download_only
     * @param bool $is_download_only
     * @return $this
     */
    public function setIsDownloadOnly($is_download_only)
    {
        $this->container['is_download_only'] = $is_download_only;

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
     * Gets shop_product_type
     * @return string
     */
    public function getShopProductType()
    {
        return $this->container['shop_product_type'];
    }

    /**
     * Sets shop_product_type
     * @param string $shop_product_type
     * @return $this
     */
    public function setShopProductType($shop_product_type)
    {
        $this->container['shop_product_type'] = $shop_product_type;

        return $this;
    }

    /**
     * Gets shop_status
     * @return string
     */
    public function getShopStatus()
    {
        return $this->container['shop_status'];
    }

    /**
     * Sets shop_status
     * @param string $shop_status
     * @return $this
     */
    public function setShopStatus($shop_status)
    {
        $this->container['shop_status'] = $shop_status;

        return $this;
    }

    /**
     * Gets price
     * @return double
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     * @param double $price
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets shop_regular_price
     * @return double
     */
    public function getShopRegularPrice()
    {
        return $this->container['shop_regular_price'];
    }

    /**
     * Sets shop_regular_price
     * @param double $shop_regular_price
     * @return $this
     */
    public function setShopRegularPrice($shop_regular_price)
    {
        $this->container['shop_regular_price'] = $shop_regular_price;

        return $this;
    }

    /**
     * Gets shop_tax_status
     * @return string
     */
    public function getShopTaxStatus()
    {
        return $this->container['shop_tax_status'];
    }

    /**
     * Sets shop_tax_status
     * @param string $shop_tax_status
     * @return $this
     */
    public function setShopTaxStatus($shop_tax_status)
    {
        $this->container['shop_tax_status'] = $shop_tax_status;

        return $this;
    }

    /**
     * Gets shop_tax_class
     * @return string
     */
    public function getShopTaxClass()
    {
        return $this->container['shop_tax_class'];
    }

    /**
     * Sets shop_tax_class
     * @param string $shop_tax_class
     * @return $this
     */
    public function setShopTaxClass($shop_tax_class)
    {
        $this->container['shop_tax_class'] = $shop_tax_class;

        return $this;
    }

    /**
     * Gets current_version
     * @return string
     */
    public function getCurrentVersion()
    {
        return $this->container['current_version'];
    }

    /**
     * Sets current_version
     * @param string $current_version
     * @return $this
     */
    public function setCurrentVersion($current_version)
    {
        $this->container['current_version'] = $current_version;

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
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets currency
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     * @param string $currency
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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


