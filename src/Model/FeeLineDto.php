<?php
/**
 * FeeLineDto
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
 * Swagger Codegen version: 3.0.68
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
 * FeeLineDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class FeeLineDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'FeeLineDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'name' => 'string',
        'taxClass' => 'string',
        'taxStatus' => 'string',
        'amount' => 'string',
        'total' => 'string',
        'totalTax' => 'string',
        'taxes' => '\Yoast\MyYoastApiClient\Model\LineItemTax[]',
        'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'taxClass' => null,
        'taxStatus' => null,
        'amount' => null,
        'total' => null,
        'totalTax' => null,
        'taxes' => null,
        'metaData' => null
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
        'name' => 'name',
        'taxClass' => 'tax_class',
        'taxStatus' => 'tax_status',
        'amount' => 'amount',
        'total' => 'total',
        'totalTax' => 'total_tax',
        'taxes' => 'taxes',
        'metaData' => 'meta_data'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'taxClass' => 'setTaxClass',
        'taxStatus' => 'setTaxStatus',
        'amount' => 'setAmount',
        'total' => 'setTotal',
        'totalTax' => 'setTotalTax',
        'taxes' => 'setTaxes',
        'metaData' => 'setMetaData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'taxClass' => 'getTaxClass',
        'taxStatus' => 'getTaxStatus',
        'amount' => 'getAmount',
        'total' => 'getTotal',
        'totalTax' => 'getTotalTax',
        'taxes' => 'getTaxes',
        'metaData' => 'getMetaData'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['taxClass'] = isset($data['taxClass']) ? $data['taxClass'] : null;
        $this->container['taxStatus'] = isset($data['taxStatus']) ? $data['taxStatus'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalTax'] = isset($data['totalTax']) ? $data['totalTax'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
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
        if ($this->container['taxClass'] === null) {
            $invalidProperties[] = "'taxClass' can't be null";
        }
        if ($this->container['taxStatus'] === null) {
            $invalidProperties[] = "'taxStatus' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['totalTax'] === null) {
            $invalidProperties[] = "'totalTax' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
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
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param string $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param string $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

        return $this;
    }

    /**
     * Gets totalTax
     *
     * @return string
     */
    public function getTotalTax()
    {
        return $this->container['totalTax'];
    }

    /**
     * Sets totalTax
     *
     * @param string $totalTax totalTax
     *
     * @return $this
     */
    public function setTotalTax($totalTax)
    {
        $this->container['totalTax'] = $totalTax;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \Yoast\MyYoastApiClient\Model\LineItemTax[]
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \Yoast\MyYoastApiClient\Model\LineItemTax[] $taxes taxes
     *
     * @return $this
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

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
