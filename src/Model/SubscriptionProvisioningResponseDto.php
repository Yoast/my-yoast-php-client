<?php
/**
 * SubscriptionProvisioningResponseDto
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yoast.com provisioning API
 *
 * The Yoast provisioning API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.29
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
 * SubscriptionProvisioningResponseDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SubscriptionProvisioningResponseDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'SubscriptionProvisioningResponseDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'iD' => 'string',
'subscriptionNumber' => 'string',
'status' => 'string',
'startDate' => 'int',
'endDate' => 'int',
'pluginDownloadUrls' => 'string[]',
'siteUrl' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'iD' => null,
'subscriptionNumber' => null,
'status' => null,
'startDate' => null,
'endDate' => null,
'pluginDownloadUrls' => null,
'siteUrl' => null    ];

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
        'iD' => 'ID',
'subscriptionNumber' => 'subscriptionNumber',
'status' => 'status',
'startDate' => 'startDate',
'endDate' => 'endDate',
'pluginDownloadUrls' => 'pluginDownloadUrls',
'siteUrl' => 'siteUrl'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'iD' => 'setID',
'subscriptionNumber' => 'setSubscriptionNumber',
'status' => 'setStatus',
'startDate' => 'setStartDate',
'endDate' => 'setEndDate',
'pluginDownloadUrls' => 'setPluginDownloadUrls',
'siteUrl' => 'setSiteUrl'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'iD' => 'getID',
'subscriptionNumber' => 'getSubscriptionNumber',
'status' => 'getStatus',
'startDate' => 'getStartDate',
'endDate' => 'getEndDate',
'pluginDownloadUrls' => 'getPluginDownloadUrls',
'siteUrl' => 'getSiteUrl'    ];

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
        $this->container['iD'] = isset($data['iD']) ? $data['iD'] : null;
        $this->container['subscriptionNumber'] = isset($data['subscriptionNumber']) ? $data['subscriptionNumber'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startDate'] = isset($data['startDate']) ? $data['startDate'] : null;
        $this->container['endDate'] = isset($data['endDate']) ? $data['endDate'] : null;
        $this->container['pluginDownloadUrls'] = isset($data['pluginDownloadUrls']) ? $data['pluginDownloadUrls'] : null;
        $this->container['siteUrl'] = isset($data['siteUrl']) ? $data['siteUrl'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['iD'] === null) {
            $invalidProperties[] = "'iD' can't be null";
        }
        if ($this->container['subscriptionNumber'] === null) {
            $invalidProperties[] = "'subscriptionNumber' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['startDate'] === null) {
            $invalidProperties[] = "'startDate' can't be null";
        }
        if ($this->container['endDate'] === null) {
            $invalidProperties[] = "'endDate' can't be null";
        }
        if ($this->container['pluginDownloadUrls'] === null) {
            $invalidProperties[] = "'pluginDownloadUrls' can't be null";
        }
        if ($this->container['siteUrl'] === null) {
            $invalidProperties[] = "'siteUrl' can't be null";
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
     * Gets iD
     *
     * @return string
     */
    public function getID()
    {
        return $this->container['iD'];
    }

    /**
     * Sets iD
     *
     * @param string $iD The subscription ID to be used privately.
     *
     * @return $this
     */
    public function setID($iD)
    {
        $this->container['iD'] = $iD;

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
     * @param string $subscriptionNumber The subscription invoice number, can be communicated publicly.
     *
     * @return $this
     */
    public function setSubscriptionNumber($subscriptionNumber)
    {
        $this->container['subscriptionNumber'] = $subscriptionNumber;

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
     * @param string $status The status of the subscription.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets startDate
     *
     * @return int
     */
    public function getStartDate()
    {
        return $this->container['startDate'];
    }

    /**
     * Sets startDate
     *
     * @param int $startDate The date the subscription has started.
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
     * @return int
     */
    public function getEndDate()
    {
        return $this->container['endDate'];
    }

    /**
     * Sets endDate
     *
     * @param int $endDate The date the subscription will expire.
     *
     * @return $this
     */
    public function setEndDate($endDate)
    {
        $this->container['endDate'] = $endDate;

        return $this;
    }

    /**
     * Gets pluginDownloadUrls
     *
     * @return string[]
     */
    public function getPluginDownloadUrls()
    {
        return $this->container['pluginDownloadUrls'];
    }

    /**
     * Sets pluginDownloadUrls
     *
     * @param string[] $pluginDownloadUrls The URLs for the latest version of the download for the products in the subscription.
     *
     * @return $this
     */
    public function setPluginDownloadUrls($pluginDownloadUrls)
    {
        $this->container['pluginDownloadUrls'] = $pluginDownloadUrls;

        return $this;
    }

    /**
     * Gets siteUrl
     *
     * @return string
     */
    public function getSiteUrl()
    {
        return $this->container['siteUrl'];
    }

    /**
     * Sets siteUrl
     *
     * @param string $siteUrl The URL for the site connected to this subscription.
     *
     * @return $this
     */
    public function setSiteUrl($siteUrl)
    {
        $this->container['siteUrl'] = $siteUrl;

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
