<?php
/**
 * Product
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
 * Swagger Codegen version: 3.0.50
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
 * Product Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Product implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Product';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'storeUrl' => 'string',
        'downloads' => '\Yoast\MyYoastApiClient\Model\ProductDownload[]',
        'sourceId' => 'int',
        'sourceShopId' => 'int',
        'shopStatus' => 'string',
        'price' => 'int',
        'shopRegularPrice' => 'int',
        'currency' => 'string',
        'createdAt' => '\DateTime',
        'modifiedAt' => '\DateTime',
        'courseId' => 'string',
        'productId' => 'Uuid'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'storeUrl' => null,
        'downloads' => null,
        'sourceId' => null,
        'sourceShopId' => null,
        'shopStatus' => null,
        'price' => null,
        'shopRegularPrice' => null,
        'currency' => null,
        'createdAt' => 'date-time',
        'modifiedAt' => 'date-time',
        'courseId' => 'uuid',
        'productId' => 'uuid'
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
        'storeUrl' => 'storeUrl',
        'downloads' => 'downloads',
        'sourceId' => 'sourceId',
        'sourceShopId' => 'sourceShopId',
        'shopStatus' => 'shopStatus',
        'price' => 'price',
        'shopRegularPrice' => 'shopRegularPrice',
        'currency' => 'currency',
        'createdAt' => 'createdAt',
        'modifiedAt' => 'modifiedAt',
        'courseId' => 'courseId',
        'productId' => 'productId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'storeUrl' => 'setStoreUrl',
        'downloads' => 'setDownloads',
        'sourceId' => 'setSourceId',
        'sourceShopId' => 'setSourceShopId',
        'shopStatus' => 'setShopStatus',
        'price' => 'setPrice',
        'shopRegularPrice' => 'setShopRegularPrice',
        'currency' => 'setCurrency',
        'createdAt' => 'setCreatedAt',
        'modifiedAt' => 'setModifiedAt',
        'courseId' => 'setCourseId',
        'productId' => 'setProductId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'storeUrl' => 'getStoreUrl',
        'downloads' => 'getDownloads',
        'sourceId' => 'getSourceId',
        'sourceShopId' => 'getSourceShopId',
        'shopStatus' => 'getShopStatus',
        'price' => 'getPrice',
        'shopRegularPrice' => 'getShopRegularPrice',
        'currency' => 'getCurrency',
        'createdAt' => 'getCreatedAt',
        'modifiedAt' => 'getModifiedAt',
        'courseId' => 'getCourseId',
        'productId' => 'getProductId'
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
        $this->container['storeUrl'] = isset($data['storeUrl']) ? $data['storeUrl'] : null;
        $this->container['downloads'] = isset($data['downloads']) ? $data['downloads'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceShopId'] = isset($data['sourceShopId']) ? $data['sourceShopId'] : null;
        $this->container['shopStatus'] = isset($data['shopStatus']) ? $data['shopStatus'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['shopRegularPrice'] = isset($data['shopRegularPrice']) ? $data['shopRegularPrice'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['courseId'] = isset($data['courseId']) ? $data['courseId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
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
        if ($this->container['storeUrl'] === null) {
            $invalidProperties[] = "'storeUrl' can't be null";
        }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['sourceShopId'] === null) {
            $invalidProperties[] = "'sourceShopId' can't be null";
        }
        if ($this->container['shopStatus'] === null) {
            $invalidProperties[] = "'shopStatus' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['shopRegularPrice'] === null) {
            $invalidProperties[] = "'shopRegularPrice' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['courseId'] === null) {
            $invalidProperties[] = "'courseId' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
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
     * Gets storeUrl
     *
     * @return string
     */
    public function getStoreUrl()
    {
        return $this->container['storeUrl'];
    }

    /**
     * Sets storeUrl
     *
     * @param string $storeUrl storeUrl
     *
     * @return $this
     */
    public function setStoreUrl($storeUrl)
    {
        $this->container['storeUrl'] = $storeUrl;

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
     * Gets sourceShopId
     *
     * @return int
     */
    public function getSourceShopId()
    {
        return $this->container['sourceShopId'];
    }

    /**
     * Sets sourceShopId
     *
     * @param int $sourceShopId sourceShopId
     *
     * @return $this
     */
    public function setSourceShopId($sourceShopId)
    {
        $this->container['sourceShopId'] = $sourceShopId;

        return $this;
    }

    /**
     * Gets shopStatus
     *
     * @return string
     */
    public function getShopStatus()
    {
        return $this->container['shopStatus'];
    }

    /**
     * Sets shopStatus
     *
     * @param string $shopStatus shopStatus
     *
     * @return $this
     */
    public function setShopStatus($shopStatus)
    {
        $this->container['shopStatus'] = $shopStatus;

        return $this;
    }

    /**
     * Gets price
     *
     * @return int
     */
    public function getPrice()
    {
        return $this->container['price'];
    }

    /**
     * Sets price
     *
     * @param int $price price
     *
     * @return $this
     */
    public function setPrice($price)
    {
        $this->container['price'] = $price;

        return $this;
    }

    /**
     * Gets shopRegularPrice
     *
     * @return int
     */
    public function getShopRegularPrice()
    {
        return $this->container['shopRegularPrice'];
    }

    /**
     * Sets shopRegularPrice
     *
     * @param int $shopRegularPrice shopRegularPrice
     *
     * @return $this
     */
    public function setShopRegularPrice($shopRegularPrice)
    {
        $this->container['shopRegularPrice'] = $shopRegularPrice;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string $currency currency
     *
     * @return $this
     */
    public function setCurrency($currency)
    {
        $this->container['currency'] = $currency;

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
     * Gets courseId
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->container['courseId'];
    }

    /**
     * Sets courseId
     *
     * @param string $courseId courseId
     *
     * @return $this
     */
    public function setCourseId($courseId)
    {
        $this->container['courseId'] = $courseId;

        return $this;
    }

    /**
     * Gets productId
     *
     * @return Uuid
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param Uuid $productId productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

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
