<?php
/**
 * RefundDataDto
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
 * RefundDataDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RefundDataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RefundDataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
'dateCreated' => '\DateTime',
'dateCreatedGmt' => '\DateTime',
'amount' => 'string',
'reason' => 'string',
'refundedBy' => 'int',
'refundedPayment' => 'bool',
'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]',
'lineItems' => '\Yoast\MyYoastApiClient\Model\LineItemDto[]',
'shippingLines' => 'string[]',
'taxLines' => 'array[]',
'feeLines' => 'string[]'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'dateCreated' => 'date-time',
'dateCreatedGmt' => 'date-time',
'amount' => null,
'reason' => null,
'refundedBy' => null,
'refundedPayment' => null,
'metaData' => null,
'lineItems' => null,
'shippingLines' => null,
'taxLines' => null,
'feeLines' => null    ];

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
'dateCreated' => 'date_created',
'dateCreatedGmt' => 'date_created_gmt',
'amount' => 'amount',
'reason' => 'reason',
'refundedBy' => 'refunded_by',
'refundedPayment' => 'refunded_payment',
'metaData' => 'meta_data',
'lineItems' => 'line_items',
'shippingLines' => 'shipping_lines',
'taxLines' => 'tax_lines',
'feeLines' => 'fee_lines'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'dateCreated' => 'setDateCreated',
'dateCreatedGmt' => 'setDateCreatedGmt',
'amount' => 'setAmount',
'reason' => 'setReason',
'refundedBy' => 'setRefundedBy',
'refundedPayment' => 'setRefundedPayment',
'metaData' => 'setMetaData',
'lineItems' => 'setLineItems',
'shippingLines' => 'setShippingLines',
'taxLines' => 'setTaxLines',
'feeLines' => 'setFeeLines'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'dateCreated' => 'getDateCreated',
'dateCreatedGmt' => 'getDateCreatedGmt',
'amount' => 'getAmount',
'reason' => 'getReason',
'refundedBy' => 'getRefundedBy',
'refundedPayment' => 'getRefundedPayment',
'metaData' => 'getMetaData',
'lineItems' => 'getLineItems',
'shippingLines' => 'getShippingLines',
'taxLines' => 'getTaxLines',
'feeLines' => 'getFeeLines'    ];

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
        $this->container['dateCreated'] = isset($data['dateCreated']) ? $data['dateCreated'] : null;
        $this->container['dateCreatedGmt'] = isset($data['dateCreatedGmt']) ? $data['dateCreatedGmt'] : null;
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['reason'] = isset($data['reason']) ? $data['reason'] : null;
        $this->container['refundedBy'] = isset($data['refundedBy']) ? $data['refundedBy'] : null;
        $this->container['refundedPayment'] = isset($data['refundedPayment']) ? $data['refundedPayment'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['lineItems'] = isset($data['lineItems']) ? $data['lineItems'] : null;
        $this->container['shippingLines'] = isset($data['shippingLines']) ? $data['shippingLines'] : null;
        $this->container['taxLines'] = isset($data['taxLines']) ? $data['taxLines'] : null;
        $this->container['feeLines'] = isset($data['feeLines']) ? $data['feeLines'] : null;
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
        if ($this->container['dateCreated'] === null) {
            $invalidProperties[] = "'dateCreated' can't be null";
        }
        if ($this->container['dateCreatedGmt'] === null) {
            $invalidProperties[] = "'dateCreatedGmt' can't be null";
        }
        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['reason'] === null) {
            $invalidProperties[] = "'reason' can't be null";
        }
        if ($this->container['refundedBy'] === null) {
            $invalidProperties[] = "'refundedBy' can't be null";
        }
        if ($this->container['refundedPayment'] === null) {
            $invalidProperties[] = "'refundedPayment' can't be null";
        }
        if ($this->container['metaData'] === null) {
            $invalidProperties[] = "'metaData' can't be null";
        }
        if ($this->container['lineItems'] === null) {
            $invalidProperties[] = "'lineItems' can't be null";
        }
        if ($this->container['shippingLines'] === null) {
            $invalidProperties[] = "'shippingLines' can't be null";
        }
        if ($this->container['taxLines'] === null) {
            $invalidProperties[] = "'taxLines' can't be null";
        }
        if ($this->container['feeLines'] === null) {
            $invalidProperties[] = "'feeLines' can't be null";
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
     * Gets dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->container['dateCreated'];
    }

    /**
     * Sets dateCreated
     *
     * @param \DateTime $dateCreated dateCreated
     *
     * @return $this
     */
    public function setDateCreated($dateCreated)
    {
        $this->container['dateCreated'] = $dateCreated;

        return $this;
    }

    /**
     * Gets dateCreatedGmt
     *
     * @return \DateTime
     */
    public function getDateCreatedGmt()
    {
        return $this->container['dateCreatedGmt'];
    }

    /**
     * Sets dateCreatedGmt
     *
     * @param \DateTime $dateCreatedGmt dateCreatedGmt
     *
     * @return $this
     */
    public function setDateCreatedGmt($dateCreatedGmt)
    {
        $this->container['dateCreatedGmt'] = $dateCreatedGmt;

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
     * Gets reason
     *
     * @return string
     */
    public function getReason()
    {
        return $this->container['reason'];
    }

    /**
     * Sets reason
     *
     * @param string $reason reason
     *
     * @return $this
     */
    public function setReason($reason)
    {
        $this->container['reason'] = $reason;

        return $this;
    }

    /**
     * Gets refundedBy
     *
     * @return int
     */
    public function getRefundedBy()
    {
        return $this->container['refundedBy'];
    }

    /**
     * Sets refundedBy
     *
     * @param int $refundedBy refundedBy
     *
     * @return $this
     */
    public function setRefundedBy($refundedBy)
    {
        $this->container['refundedBy'] = $refundedBy;

        return $this;
    }

    /**
     * Gets refundedPayment
     *
     * @return bool
     */
    public function getRefundedPayment()
    {
        return $this->container['refundedPayment'];
    }

    /**
     * Sets refundedPayment
     *
     * @param bool $refundedPayment refundedPayment
     *
     * @return $this
     */
    public function setRefundedPayment($refundedPayment)
    {
        $this->container['refundedPayment'] = $refundedPayment;

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
     * Gets lineItems
     *
     * @return \Yoast\MyYoastApiClient\Model\LineItemDto[]
     */
    public function getLineItems()
    {
        return $this->container['lineItems'];
    }

    /**
     * Sets lineItems
     *
     * @param \Yoast\MyYoastApiClient\Model\LineItemDto[] $lineItems lineItems
     *
     * @return $this
     */
    public function setLineItems($lineItems)
    {
        $this->container['lineItems'] = $lineItems;

        return $this;
    }

    /**
     * Gets shippingLines
     *
     * @return string[]
     */
    public function getShippingLines()
    {
        return $this->container['shippingLines'];
    }

    /**
     * Sets shippingLines
     *
     * @param string[] $shippingLines shippingLines
     *
     * @return $this
     */
    public function setShippingLines($shippingLines)
    {
        $this->container['shippingLines'] = $shippingLines;

        return $this;
    }

    /**
     * Gets taxLines
     *
     * @return array[]
     */
    public function getTaxLines()
    {
        return $this->container['taxLines'];
    }

    /**
     * Sets taxLines
     *
     * @param array[] $taxLines taxLines
     *
     * @return $this
     */
    public function setTaxLines($taxLines)
    {
        $this->container['taxLines'] = $taxLines;

        return $this;
    }

    /**
     * Gets feeLines
     *
     * @return string[]
     */
    public function getFeeLines()
    {
        return $this->container['feeLines'];
    }

    /**
     * Sets feeLines
     *
     * @param string[] $feeLines feeLines
     *
     * @return $this
     */
    public function setFeeLines($feeLines)
    {
        $this->container['feeLines'] = $feeLines;

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
