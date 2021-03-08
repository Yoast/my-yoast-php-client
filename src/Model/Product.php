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
'name' => 'string',
'storeUrl' => 'string',
'downloads' => '\Yoast\MyYoastApiClient\Model\ProductDownload[]',
'glNumber' => 'string',
'isDownloadOnly' => 'bool',
'icon' => 'string',
'sourceId' => 'int',
'sourceShopId' => 'int',
'shopProductType' => 'string',
'shopStatus' => 'string',
'price' => 'int',
'shopRegularPrice' => 'int',
'shopTaxStatus' => 'string',
'shopTaxClass' => 'string',
'currentVersion' => 'string',
'changelog' => 'string',
'type' => 'string',
'currency' => 'string',
'createdAt' => '\DateTime',
'modifiedAt' => '\DateTime',
'billingTerm' => 'string',
'billingType' => 'string',
'activationLimit' => 'int',
'courseId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'name' => null,
'storeUrl' => null,
'downloads' => null,
'glNumber' => null,
'isDownloadOnly' => null,
'icon' => null,
'sourceId' => null,
'sourceShopId' => null,
'shopProductType' => null,
'shopStatus' => null,
'price' => null,
'shopRegularPrice' => null,
'shopTaxStatus' => null,
'shopTaxClass' => null,
'currentVersion' => null,
'changelog' => null,
'type' => null,
'currency' => null,
'createdAt' => 'date-time',
'modifiedAt' => 'date-time',
'billingTerm' => null,
'billingType' => null,
'activationLimit' => null,
'courseId' => 'uuid'    ];

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
'storeUrl' => 'storeUrl',
'downloads' => 'downloads',
'glNumber' => 'glNumber',
'isDownloadOnly' => 'isDownloadOnly',
'icon' => 'icon',
'sourceId' => 'sourceId',
'sourceShopId' => 'sourceShopId',
'shopProductType' => 'shopProductType',
'shopStatus' => 'shopStatus',
'price' => 'price',
'shopRegularPrice' => 'shopRegularPrice',
'shopTaxStatus' => 'shopTaxStatus',
'shopTaxClass' => 'shopTaxClass',
'currentVersion' => 'currentVersion',
'changelog' => 'changelog',
'type' => 'type',
'currency' => 'currency',
'createdAt' => 'createdAt',
'modifiedAt' => 'modifiedAt',
'billingTerm' => 'billingTerm',
'billingType' => 'billingType',
'activationLimit' => 'activationLimit',
'courseId' => 'courseId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'name' => 'setName',
'storeUrl' => 'setStoreUrl',
'downloads' => 'setDownloads',
'glNumber' => 'setGlNumber',
'isDownloadOnly' => 'setIsDownloadOnly',
'icon' => 'setIcon',
'sourceId' => 'setSourceId',
'sourceShopId' => 'setSourceShopId',
'shopProductType' => 'setShopProductType',
'shopStatus' => 'setShopStatus',
'price' => 'setPrice',
'shopRegularPrice' => 'setShopRegularPrice',
'shopTaxStatus' => 'setShopTaxStatus',
'shopTaxClass' => 'setShopTaxClass',
'currentVersion' => 'setCurrentVersion',
'changelog' => 'setChangelog',
'type' => 'setType',
'currency' => 'setCurrency',
'createdAt' => 'setCreatedAt',
'modifiedAt' => 'setModifiedAt',
'billingTerm' => 'setBillingTerm',
'billingType' => 'setBillingType',
'activationLimit' => 'setActivationLimit',
'courseId' => 'setCourseId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'name' => 'getName',
'storeUrl' => 'getStoreUrl',
'downloads' => 'getDownloads',
'glNumber' => 'getGlNumber',
'isDownloadOnly' => 'getIsDownloadOnly',
'icon' => 'getIcon',
'sourceId' => 'getSourceId',
'sourceShopId' => 'getSourceShopId',
'shopProductType' => 'getShopProductType',
'shopStatus' => 'getShopStatus',
'price' => 'getPrice',
'shopRegularPrice' => 'getShopRegularPrice',
'shopTaxStatus' => 'getShopTaxStatus',
'shopTaxClass' => 'getShopTaxClass',
'currentVersion' => 'getCurrentVersion',
'changelog' => 'getChangelog',
'type' => 'getType',
'currency' => 'getCurrency',
'createdAt' => 'getCreatedAt',
'modifiedAt' => 'getModifiedAt',
'billingTerm' => 'getBillingTerm',
'billingType' => 'getBillingType',
'activationLimit' => 'getActivationLimit',
'courseId' => 'getCourseId'    ];

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
        $this->container['storeUrl'] = isset($data['storeUrl']) ? $data['storeUrl'] : null;
        $this->container['downloads'] = isset($data['downloads']) ? $data['downloads'] : null;
        $this->container['glNumber'] = isset($data['glNumber']) ? $data['glNumber'] : null;
        $this->container['isDownloadOnly'] = isset($data['isDownloadOnly']) ? $data['isDownloadOnly'] : null;
        $this->container['icon'] = isset($data['icon']) ? $data['icon'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceShopId'] = isset($data['sourceShopId']) ? $data['sourceShopId'] : null;
        $this->container['shopProductType'] = isset($data['shopProductType']) ? $data['shopProductType'] : null;
        $this->container['shopStatus'] = isset($data['shopStatus']) ? $data['shopStatus'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['shopRegularPrice'] = isset($data['shopRegularPrice']) ? $data['shopRegularPrice'] : null;
        $this->container['shopTaxStatus'] = isset($data['shopTaxStatus']) ? $data['shopTaxStatus'] : null;
        $this->container['shopTaxClass'] = isset($data['shopTaxClass']) ? $data['shopTaxClass'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['changelog'] = isset($data['changelog']) ? $data['changelog'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['billingTerm'] = isset($data['billingTerm']) ? $data['billingTerm'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['activationLimit'] = isset($data['activationLimit']) ? $data['activationLimit'] : null;
        $this->container['courseId'] = isset($data['courseId']) ? $data['courseId'] : null;
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
        if ($this->container['storeUrl'] === null) {
            $invalidProperties[] = "'storeUrl' can't be null";
        }
        if ($this->container['glNumber'] === null) {
            $invalidProperties[] = "'glNumber' can't be null";
        }
        if ($this->container['isDownloadOnly'] === null) {
            $invalidProperties[] = "'isDownloadOnly' can't be null";
        }
        if ($this->container['icon'] === null) {
            $invalidProperties[] = "'icon' can't be null";
        }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['sourceShopId'] === null) {
            $invalidProperties[] = "'sourceShopId' can't be null";
        }
        if ($this->container['shopProductType'] === null) {
            $invalidProperties[] = "'shopProductType' can't be null";
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
        if ($this->container['shopTaxStatus'] === null) {
            $invalidProperties[] = "'shopTaxStatus' can't be null";
        }
        if ($this->container['shopTaxClass'] === null) {
            $invalidProperties[] = "'shopTaxClass' can't be null";
        }
        if ($this->container['currentVersion'] === null) {
            $invalidProperties[] = "'currentVersion' can't be null";
        }
        if ($this->container['changelog'] === null) {
            $invalidProperties[] = "'changelog' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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
        if ($this->container['billingTerm'] === null) {
            $invalidProperties[] = "'billingTerm' can't be null";
        }
        if ($this->container['billingType'] === null) {
            $invalidProperties[] = "'billingType' can't be null";
        }
        if ($this->container['activationLimit'] === null) {
            $invalidProperties[] = "'activationLimit' can't be null";
        }
        if ($this->container['courseId'] === null) {
            $invalidProperties[] = "'courseId' can't be null";
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
     * Gets glNumber
     *
     * @return string
     */
    public function getGlNumber()
    {
        return $this->container['glNumber'];
    }

    /**
     * Sets glNumber
     *
     * @param string $glNumber glNumber
     *
     * @return $this
     */
    public function setGlNumber($glNumber)
    {
        $this->container['glNumber'] = $glNumber;

        return $this;
    }

    /**
     * Gets isDownloadOnly
     *
     * @return bool
     */
    public function getIsDownloadOnly()
    {
        return $this->container['isDownloadOnly'];
    }

    /**
     * Sets isDownloadOnly
     *
     * @param bool $isDownloadOnly isDownloadOnly
     *
     * @return $this
     */
    public function setIsDownloadOnly($isDownloadOnly)
    {
        $this->container['isDownloadOnly'] = $isDownloadOnly;

        return $this;
    }

    /**
     * Gets icon
     *
     * @return string
     */
    public function getIcon()
    {
        return $this->container['icon'];
    }

    /**
     * Sets icon
     *
     * @param string $icon icon
     *
     * @return $this
     */
    public function setIcon($icon)
    {
        $this->container['icon'] = $icon;

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
     * Gets shopProductType
     *
     * @return string
     */
    public function getShopProductType()
    {
        return $this->container['shopProductType'];
    }

    /**
     * Sets shopProductType
     *
     * @param string $shopProductType shopProductType
     *
     * @return $this
     */
    public function setShopProductType($shopProductType)
    {
        $this->container['shopProductType'] = $shopProductType;

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
     * Gets shopTaxStatus
     *
     * @return string
     */
    public function getShopTaxStatus()
    {
        return $this->container['shopTaxStatus'];
    }

    /**
     * Sets shopTaxStatus
     *
     * @param string $shopTaxStatus shopTaxStatus
     *
     * @return $this
     */
    public function setShopTaxStatus($shopTaxStatus)
    {
        $this->container['shopTaxStatus'] = $shopTaxStatus;

        return $this;
    }

    /**
     * Gets shopTaxClass
     *
     * @return string
     */
    public function getShopTaxClass()
    {
        return $this->container['shopTaxClass'];
    }

    /**
     * Sets shopTaxClass
     *
     * @param string $shopTaxClass shopTaxClass
     *
     * @return $this
     */
    public function setShopTaxClass($shopTaxClass)
    {
        $this->container['shopTaxClass'] = $shopTaxClass;

        return $this;
    }

    /**
     * Gets currentVersion
     *
     * @return string
     */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
     * Sets currentVersion
     *
     * @param string $currentVersion currentVersion
     *
     * @return $this
     */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;

        return $this;
    }

    /**
     * Gets changelog
     *
     * @return string
     */
    public function getChangelog()
    {
        return $this->container['changelog'];
    }

    /**
     * Sets changelog
     *
     * @param string $changelog changelog
     *
     * @return $this
     */
    public function setChangelog($changelog)
    {
        $this->container['changelog'] = $changelog;

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
     * Gets billingTerm
     *
     * @return string
     */
    public function getBillingTerm()
    {
        return $this->container['billingTerm'];
    }

    /**
     * Sets billingTerm
     *
     * @param string $billingTerm billingTerm
     *
     * @return $this
     */
    public function setBillingTerm($billingTerm)
    {
        $this->container['billingTerm'] = $billingTerm;

        return $this;
    }

    /**
     * Gets billingType
     *
     * @return string
     */
    public function getBillingType()
    {
        return $this->container['billingType'];
    }

    /**
     * Sets billingType
     *
     * @param string $billingType billingType
     *
     * @return $this
     */
    public function setBillingType($billingType)
    {
        $this->container['billingType'] = $billingType;

        return $this;
    }

    /**
     * Gets activationLimit
     *
     * @return int
     */
    public function getActivationLimit()
    {
        return $this->container['activationLimit'];
    }

    /**
     * Sets activationLimit
     *
     * @param int $activationLimit activationLimit
     *
     * @return $this
     */
    public function setActivationLimit($activationLimit)
    {
        $this->container['activationLimit'] = $activationLimit;

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
