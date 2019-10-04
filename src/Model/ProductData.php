<?php
/**
 * ProductData
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
 * Swagger Codegen version: 2.4.8
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
 * ProductData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]',
        'images' => '\Yoast\MyYoastApiClient\Model\ProductImage[]',
        'id' => 'int',
        'name' => 'string',
        'description' => 'string',
        'permalink' => 'string',
        'downloads' => '\Yoast\MyYoastApiClient\Model\ProductDownload[]',
        'sku' => 'string',
        'type' => 'string',
        'status' => 'string',
        'regularPrice' => 'string',
        'price' => 'string',
        'purchasable' => 'bool',
        'taxStatus' => 'string',
        'taxClass' => 'string',
        'categories' => '\Yoast\MyYoastApiClient\Model\ProductCategory[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'metaData' => null,
        'images' => null,
        'id' => null,
        'name' => null,
        'description' => null,
        'permalink' => null,
        'downloads' => null,
        'sku' => null,
        'type' => null,
        'status' => null,
        'regularPrice' => null,
        'price' => null,
        'purchasable' => null,
        'taxStatus' => null,
        'taxClass' => null,
        'categories' => null
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
        'metaData' => 'meta_data',
        'images' => 'images',
        'id' => 'id',
        'name' => 'name',
        'description' => 'description',
        'permalink' => 'permalink',
        'downloads' => 'downloads',
        'sku' => 'sku',
        'type' => 'type',
        'status' => 'status',
        'regularPrice' => 'regular_price',
        'price' => 'price',
        'purchasable' => 'purchasable',
        'taxStatus' => 'tax_status',
        'taxClass' => 'tax_class',
        'categories' => 'categories'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'metaData' => 'setMetaData',
        'images' => 'setImages',
        'id' => 'setId',
        'name' => 'setName',
        'description' => 'setDescription',
        'permalink' => 'setPermalink',
        'downloads' => 'setDownloads',
        'sku' => 'setSku',
        'type' => 'setType',
        'status' => 'setStatus',
        'regularPrice' => 'setRegularPrice',
        'price' => 'setPrice',
        'purchasable' => 'setPurchasable',
        'taxStatus' => 'setTaxStatus',
        'taxClass' => 'setTaxClass',
        'categories' => 'setCategories'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'metaData' => 'getMetaData',
        'images' => 'getImages',
        'id' => 'getId',
        'name' => 'getName',
        'description' => 'getDescription',
        'permalink' => 'getPermalink',
        'downloads' => 'getDownloads',
        'sku' => 'getSku',
        'type' => 'getType',
        'status' => 'getStatus',
        'regularPrice' => 'getRegularPrice',
        'price' => 'getPrice',
        'purchasable' => 'getPurchasable',
        'taxStatus' => 'getTaxStatus',
        'taxClass' => 'getTaxClass',
        'categories' => 'getCategories'
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
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['images'] = isset($data['images']) ? $data['images'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['permalink'] = isset($data['permalink']) ? $data['permalink'] : null;
        $this->container['downloads'] = isset($data['downloads']) ? $data['downloads'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['regularPrice'] = isset($data['regularPrice']) ? $data['regularPrice'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['purchasable'] = isset($data['purchasable']) ? $data['purchasable'] : null;
        $this->container['taxStatus'] = isset($data['taxStatus']) ? $data['taxStatus'] : null;
        $this->container['taxClass'] = isset($data['taxClass']) ? $data['taxClass'] : null;
        $this->container['categories'] = isset($data['categories']) ? $data['categories'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['metaData'] === null) {
            $invalidProperties[] = "'metaData' can't be null";
        }
        if ($this->container['images'] === null) {
            $invalidProperties[] = "'images' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['permalink'] === null) {
            $invalidProperties[] = "'permalink' can't be null";
        }
        if ($this->container['downloads'] === null) {
            $invalidProperties[] = "'downloads' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['regularPrice'] === null) {
            $invalidProperties[] = "'regularPrice' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['purchasable'] === null) {
            $invalidProperties[] = "'purchasable' can't be null";
        }
        if ($this->container['taxStatus'] === null) {
            $invalidProperties[] = "'taxStatus' can't be null";
        }
        if ($this->container['taxClass'] === null) {
            $invalidProperties[] = "'taxClass' can't be null";
        }
        if ($this->container['categories'] === null) {
            $invalidProperties[] = "'categories' can't be null";
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
     * Gets images
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductImage[]
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductImage[] $images images
     *
     * @return $this
     */
    public function setImages($images)
    {
        $this->container['images'] = $images;

        return $this;
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
     * Gets permalink
     *
     * @return string
     */
    public function getPermalink()
    {
        return $this->container['permalink'];
    }

    /**
     * Sets permalink
     *
     * @param string $permalink permalink
     *
     * @return $this
     */
    public function setPermalink($permalink)
    {
        $this->container['permalink'] = $permalink;

        return $this;
    }

    /**
     * Gets downloads
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductDownload[]
     */
    public function getDownloads()
    {
        return $this->container['downloads'];
    }

    /**
     * Sets downloads
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductDownload[] $downloads downloads
     *
     * @return $this
     */
    public function setDownloads($downloads)
    {
        $this->container['downloads'] = $downloads;

        return $this;
    }

    /**
     * Gets sku
     *
     * @return string
     */
    public function getSku()
    {
        return $this->container['sku'];
    }

    /**
     * Sets sku
     *
     * @param string $sku sku
     *
     * @return $this
     */
    public function setSku($sku)
    {
        $this->container['sku'] = $sku;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets regularPrice
     *
     * @return string
     */
    public function getRegularPrice()
    {
        return $this->container['regularPrice'];
    }

    /**
     * Sets regularPrice
     *
     * @param string $regularPrice regularPrice
     *
     * @return $this
     */
    public function setRegularPrice($regularPrice)
    {
        $this->container['regularPrice'] = $regularPrice;

        return $this;
    }

    /**
     * Gets price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param string $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets purchasable
     *
     * @return bool
     */
    public function getPurchasable()
    {
        return $this->container['purchasable'];
    }

    /**
     * Sets purchasable
     *
     * @param bool $purchasable purchasable
     *
     * @return $this
     */
    public function setPurchasable($purchasable)
    {
        $this->container['purchasable'] = $purchasable;

        return $this;
    }

    /**
     * Gets taxStatus
     *
     * @return string
     */
    public function getTaxStatus()
    {
        return $this->container['taxStatus'];
    }

    /**
     * Sets taxStatus
     *
     * @param string $taxStatus taxStatus
     *
     * @return $this
     */
    public function setTaxStatus($taxStatus)
    {
        $this->container['taxStatus'] = $taxStatus;

        return $this;
    }

    /**
     * Gets taxClass
     *
     * @return string
     */
    public function getTaxClass()
    {
        return $this->container['taxClass'];
    }

    /**
     * Sets taxClass
     *
     * @param string $taxClass taxClass
     *
     * @return $this
     */
    public function setTaxClass($taxClass)
    {
        $this->container['taxClass'] = $taxClass;

        return $this;
    }

    /**
     * Gets categories
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductCategory[]
     */
    public function getCategories()
    {
        return $this->container['categories'];
    }

    /**
     * Sets categories
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductCategory[] $categories categories
     *
     * @return $this
     */
    public function setCategories($categories)
    {
        $this->container['categories'] = $categories;

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


