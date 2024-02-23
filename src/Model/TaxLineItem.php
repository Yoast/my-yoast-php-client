<?php
/**
 * TaxLineItem
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
 * TaxLineItem Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxLineItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxLineItem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'compound' => 'bool',
'label' => 'string',
'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]',
'rateCode' => 'string',
'rateId' => 'int',
'shippingTaxTotal' => 'string',
'taxTotal' => 'string',
'ratePercent' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'compound' => null,
'label' => null,
'metaData' => null,
'rateCode' => null,
'rateId' => null,
'shippingTaxTotal' => null,
'taxTotal' => null,
'ratePercent' => null    ];

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
'compound' => 'compound',
'label' => 'label',
'metaData' => 'meta_data',
'rateCode' => 'rate_code',
'rateId' => 'rate_id',
'shippingTaxTotal' => 'shipping_tax_total',
'taxTotal' => 'tax_total',
'ratePercent' => 'rate_percent'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'compound' => 'setCompound',
'label' => 'setLabel',
'metaData' => 'setMetaData',
'rateCode' => 'setRateCode',
'rateId' => 'setRateId',
'shippingTaxTotal' => 'setShippingTaxTotal',
'taxTotal' => 'setTaxTotal',
'ratePercent' => 'setRatePercent'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'compound' => 'getCompound',
'label' => 'getLabel',
'metaData' => 'getMetaData',
'rateCode' => 'getRateCode',
'rateId' => 'getRateId',
'shippingTaxTotal' => 'getShippingTaxTotal',
'taxTotal' => 'getTaxTotal',
'ratePercent' => 'getRatePercent'    ];

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
        $this->container['compound'] = isset($data['compound']) ? $data['compound'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['rateCode'] = isset($data['rateCode']) ? $data['rateCode'] : null;
        $this->container['rateId'] = isset($data['rateId']) ? $data['rateId'] : null;
        $this->container['shippingTaxTotal'] = isset($data['shippingTaxTotal']) ? $data['shippingTaxTotal'] : null;
        $this->container['taxTotal'] = isset($data['taxTotal']) ? $data['taxTotal'] : null;
        $this->container['ratePercent'] = isset($data['ratePercent']) ? $data['ratePercent'] : null;
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
        if ($this->container['compound'] === null) {
            $invalidProperties[] = "'compound' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        if ($this->container['metaData'] === null) {
            $invalidProperties[] = "'metaData' can't be null";
        }
        if ($this->container['rateCode'] === null) {
            $invalidProperties[] = "'rateCode' can't be null";
        }
        if ($this->container['rateId'] === null) {
            $invalidProperties[] = "'rateId' can't be null";
        }
        if ($this->container['shippingTaxTotal'] === null) {
            $invalidProperties[] = "'shippingTaxTotal' can't be null";
        }
        if ($this->container['taxTotal'] === null) {
            $invalidProperties[] = "'taxTotal' can't be null";
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
     * Gets compound
     *
     * @return bool
     */
    public function getCompound()
    {
        return $this->container['compound'];
    }

    /**
     * Sets compound
     *
     * @param bool $compound compound
     *
     * @return $this
     */
    public function setCompound($compound)
    {
        $this->container['compound'] = $compound;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label label
     *
     * @return $this
     */
    public function setLabel($label)
    {
        $this->container['label'] = $label;

        return $this;
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
     * Gets rateCode
     *
     * @return string
     */
    public function getRateCode()
    {
        return $this->container['rateCode'];
    }

    /**
     * Sets rateCode
     *
     * @param string $rateCode rateCode
     *
     * @return $this
     */
    public function setRateCode($rateCode)
    {
        $this->container['rateCode'] = $rateCode;

        return $this;
    }

    /**
     * Gets rateId
     *
     * @return int
     */
    public function getRateId()
    {
        return $this->container['rateId'];
    }

    /**
     * Sets rateId
     *
     * @param int $rateId rateId
     *
     * @return $this
     */
    public function setRateId($rateId)
    {
        $this->container['rateId'] = $rateId;

        return $this;
    }

    /**
     * Gets shippingTaxTotal
     *
     * @return string
     */
    public function getShippingTaxTotal()
    {
        return $this->container['shippingTaxTotal'];
    }

    /**
     * Sets shippingTaxTotal
     *
     * @param string $shippingTaxTotal shippingTaxTotal
     *
     * @return $this
     */
    public function setShippingTaxTotal($shippingTaxTotal)
    {
        $this->container['shippingTaxTotal'] = $shippingTaxTotal;

        return $this;
    }

    /**
     * Gets taxTotal
     *
     * @return string
     */
    public function getTaxTotal()
    {
        return $this->container['taxTotal'];
    }

    /**
     * Sets taxTotal
     *
     * @param string $taxTotal taxTotal
     *
     * @return $this
     */
    public function setTaxTotal($taxTotal)
    {
        $this->container['taxTotal'] = $taxTotal;

        return $this;
    }

    /**
     * Gets ratePercent
     *
     * @return int
     */
    public function getRatePercent()
    {
        return $this->container['ratePercent'];
    }

    /**
     * Sets ratePercent
     *
     * @param int $ratePercent ratePercent
     *
     * @return $this
     */
    public function setRatePercent($ratePercent)
    {
        $this->container['ratePercent'] = $ratePercent;

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
