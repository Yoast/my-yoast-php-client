<?php
/**
 * Subscription
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
 * Swagger Codegen version: 3.0.41
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
 * Subscription Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Subscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Subscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'startDate' => '\DateTime',
'endDate' => '\DateTime',
'sourceId' => 'int',
'sourceLineItemId' => 'int',
'sourceShopId' => 'int',
'status' => 'string',
'currency' => 'string',
'date' => '\DateTime',
'price' => 'int',
'name' => 'string',
'nextPayment' => '\DateTime',
'limit' => 'int',
'used' => 'int',
'createdAt' => '\DateTime',
'modifiedAt' => '\DateTime',
'requiresManualRenewal' => 'bool',
'renewalSecret' => 'string',
'subscriptionNumber' => 'string',
'lastBillingTerm' => 'string',
'subscriberId' => 'string',
'productId' => 'Uuid',
'provisionerId' => 'Uuid'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'startDate' => 'date-time',
'endDate' => 'date-time',
'sourceId' => null,
'sourceLineItemId' => null,
'sourceShopId' => null,
'status' => null,
'currency' => null,
'date' => 'date-time',
'price' => null,
'name' => null,
'nextPayment' => 'date-time',
'limit' => null,
'used' => null,
'createdAt' => 'date-time',
'modifiedAt' => 'date-time',
'requiresManualRenewal' => null,
'renewalSecret' => null,
'subscriptionNumber' => null,
'lastBillingTerm' => null,
'subscriberId' => 'uuid',
'productId' => null,
'provisionerId' => null    ];

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
'startDate' => 'startDate',
'endDate' => 'endDate',
'sourceId' => 'sourceId',
'sourceLineItemId' => 'sourceLineItemId',
'sourceShopId' => 'sourceShopId',
'status' => 'status',
'currency' => 'currency',
'date' => 'date',
'price' => 'price',
'name' => 'name',
'nextPayment' => 'nextPayment',
'limit' => 'limit',
'used' => 'used',
'createdAt' => 'createdAt',
'modifiedAt' => 'modifiedAt',
'requiresManualRenewal' => 'requiresManualRenewal',
'renewalSecret' => 'renewalSecret',
'subscriptionNumber' => 'subscriptionNumber',
'lastBillingTerm' => 'lastBillingTerm',
'subscriberId' => 'subscriberId',
'productId' => 'productId',
'provisionerId' => 'provisionerId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate',
'sourceId' => 'setSourceId',
'sourceLineItemId' => 'setSourceLineItemId',
'sourceShopId' => 'setSourceShopId',
'status' => 'setStatus',
'currency' => 'setCurrency',
'date' => 'setDate',
'price' => 'setPrice',
'name' => 'setName',
'nextPayment' => 'setNextPayment',
'limit' => 'setLimit',
'used' => 'setUsed',
'createdAt' => 'setCreatedAt',
'modifiedAt' => 'setModifiedAt',
'requiresManualRenewal' => 'setRequiresManualRenewal',
'renewalSecret' => 'setRenewalSecret',
'subscriptionNumber' => 'setSubscriptionNumber',
'lastBillingTerm' => 'setLastBillingTerm',
'subscriberId' => 'setSubscriberId',
'productId' => 'setProductId',
'provisionerId' => 'setProvisionerId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate',
'sourceId' => 'getSourceId',
'sourceLineItemId' => 'getSourceLineItemId',
'sourceShopId' => 'getSourceShopId',
'status' => 'getStatus',
'currency' => 'getCurrency',
'date' => 'getDate',
'price' => 'getPrice',
'name' => 'getName',
'nextPayment' => 'getNextPayment',
'limit' => 'getLimit',
'used' => 'getUsed',
'createdAt' => 'getCreatedAt',
'modifiedAt' => 'getModifiedAt',
'requiresManualRenewal' => 'getRequiresManualRenewal',
'renewalSecret' => 'getRenewalSecret',
'subscriptionNumber' => 'getSubscriptionNumber',
'lastBillingTerm' => 'getLastBillingTerm',
'subscriberId' => 'getSubscriberId',
'productId' => 'getProductId',
'provisionerId' => 'getProvisionerId'    ];

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
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceLineItemId'] = isset($data['sourceLineItemId']) ? $data['sourceLineItemId'] : null;
        $this->container['sourceShopId'] = isset($data['sourceShopId']) ? $data['sourceShopId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['currency'] = isset($data['currency']) ? $data['currency'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nextPayment'] = isset($data['nextPayment']) ? $data['nextPayment'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['requiresManualRenewal'] = isset($data['requiresManualRenewal']) ? $data['requiresManualRenewal'] : null;
        $this->container['renewalSecret'] = isset($data['renewalSecret']) ? $data['renewalSecret'] : null;
        $this->container['subscriptionNumber'] = isset($data['subscriptionNumber']) ? $data['subscriptionNumber'] : null;
        $this->container['lastBillingTerm'] = isset($data['lastBillingTerm']) ? $data['lastBillingTerm'] : null;
        $this->container['subscriberId'] = isset($data['subscriberId']) ? $data['subscriberId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['provisionerId'] = isset($data['provisionerId']) ? $data['provisionerId'] : null;
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
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['sourceLineItemId'] === null) {
            $invalidProperties[] = "'sourceLineItemId' can't be null";
        }
        if ($this->container['sourceShopId'] === null) {
            $invalidProperties[] = "'sourceShopId' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['currency'] === null) {
            $invalidProperties[] = "'currency' can't be null";
        }
        if ($this->container['date'] === null) {
            $invalidProperties[] = "'date' can't be null";
        }
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['nextPayment'] === null) {
            $invalidProperties[] = "'nextPayment' can't be null";
        }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['requiresManualRenewal'] === null) {
            $invalidProperties[] = "'requiresManualRenewal' can't be null";
        }
        if ($this->container['renewalSecret'] === null) {
            $invalidProperties[] = "'renewalSecret' can't be null";
        }
        if ($this->container['subscriptionNumber'] === null) {
            $invalidProperties[] = "'subscriptionNumber' can't be null";
        }
        if ($this->container['lastBillingTerm'] === null) {
            $invalidProperties[] = "'lastBillingTerm' can't be null";
        }
        if ($this->container['subscriberId'] === null) {
            $invalidProperties[] = "'subscriberId' can't be null";
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
     * Gets startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param \DateTime $startDate startDate
     *
     * @return $this
     */
    public function setStartDate($startDate)
    {
        $this->container['startDate'] = $startDate;

        return $this;
    }

    /**
     * Gets endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param \DateTime $endDate endDate
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

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
     * Gets sourceLineItemId
     *
     * @return int
     */
    public function getSourceLineItemId()
    {
        return $this->container['sourceLineItemId'];
    }

    /**
     * Sets sourceLineItemId
     *
     * @param int $sourceLineItemId sourceLineItemId
     *
     * @return $this
     */
    public function setSourceLineItemId($sourceLineItemId)
    {
        $this->container['sourceLineItemId'] = $sourceLineItemId;

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
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

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
     * Gets nextPayment
     *
     * @return \DateTime
     */
    public function getNextPayment()
    {
        return $this->container['nextPayment'];
    }

    /**
     * Sets nextPayment
     *
     * @param \DateTime $nextPayment nextPayment
     *
     * @return $this
     */
    public function setNextPayment($nextPayment)
    {
        $this->container['nextPayment'] = $nextPayment;

        return $this;
    }

    /**
     * Gets limit
     *
     * @return int
     */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
     * Sets limit
     *
     * @param int $limit limit
     *
     * @return $this
     */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;

        return $this;
    }

    /**
     * Gets used
     *
     * @return int
     */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
     * Sets used
     *
     * @param int $used used
     *
     * @return $this
     */
    public function setUsed($used)
    {
        $this->container['used'] = $used;

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
     * Gets requiresManualRenewal
     *
     * @return bool
     */
    public function getRequiresManualRenewal()
    {
        return $this->container['requiresManualRenewal'];
    }

    /**
     * Sets requiresManualRenewal
     *
     * @param bool $requiresManualRenewal requiresManualRenewal
     *
     * @return $this
     */
    public function setRequiresManualRenewal($requiresManualRenewal)
    {
        $this->container['requiresManualRenewal'] = $requiresManualRenewal;

        return $this;
    }

    /**
     * Gets renewalSecret
     *
     * @return string
     */
    public function getRenewalSecret()
    {
        return $this->container['renewalSecret'];
    }

    /**
     * Sets renewalSecret
     *
     * @param string $renewalSecret renewalSecret
     *
     * @return $this
     */
    public function setRenewalSecret($renewalSecret)
    {
        $this->container['renewalSecret'] = $renewalSecret;

        return $this;
    }

    /**
     * Gets subscriptionNumber
     *
     * @return string
     */
    public function getSubscriptionNumber()
    {
        return $this->container['subscriptionNumber'];
    }

    /**
     * Sets subscriptionNumber
     *
     * @param string $subscriptionNumber subscriptionNumber
     *
     * @return $this
     */
    public function setSubscriptionNumber($subscriptionNumber)
    {
        $this->container['subscriptionNumber'] = $subscriptionNumber;

        return $this;
    }

    /**
     * Gets lastBillingTerm
     *
     * @return string
     */
    public function getLastBillingTerm()
    {
        return $this->container['lastBillingTerm'];
    }

    /**
     * Sets lastBillingTerm
     *
     * @param string $lastBillingTerm lastBillingTerm
     *
     * @return $this
     */
    public function setLastBillingTerm($lastBillingTerm)
    {
        $this->container['lastBillingTerm'] = $lastBillingTerm;

        return $this;
    }

    /**
     * Gets subscriberId
     *
     * @return string
     */
    public function getSubscriberId()
    {
        return $this->container['subscriberId'];
    }

    /**
     * Sets subscriberId
     *
     * @param string $subscriberId subscriberId
     *
     * @return $this
     */
    public function setSubscriberId($subscriberId)
    {
        $this->container['subscriberId'] = $subscriberId;

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
     * Gets provisionerId
     *
     * @return Uuid
     */
    public function getProvisionerId()
    {
        return $this->container['provisionerId'];
    }

    /**
     * Sets provisionerId
     *
     * @param Uuid $provisionerId provisionerId
     *
     * @return $this
     */
    public function setProvisionerId($provisionerId)
    {
        $this->container['provisionerId'] = $provisionerId;

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
