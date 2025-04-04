<?php
/**
 * TransactionDataDto
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
 * TransactionDataDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TransactionDataDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TransactionDataDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'string',
        'paymentId' => 'string',
        'createdOn' => 'string',
        'updatedOn' => 'string',
        'paid' => 'bool',
        'transactionObject' => '\Yoast\MyYoastApiClient\Model\Transaction'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'paymentId' => null,
        'createdOn' => null,
        'updatedOn' => null,
        'paid' => null,
        'transactionObject' => null
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
        'transactionId' => 'transactionId',
        'paymentId' => 'paymentId',
        'createdOn' => 'createdOn',
        'updatedOn' => 'updatedOn',
        'paid' => 'paid',
        'transactionObject' => 'transactionObject'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'paymentId' => 'setPaymentId',
        'createdOn' => 'setCreatedOn',
        'updatedOn' => 'setUpdatedOn',
        'paid' => 'setPaid',
        'transactionObject' => 'setTransactionObject'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'paymentId' => 'getPaymentId',
        'createdOn' => 'getCreatedOn',
        'updatedOn' => 'getUpdatedOn',
        'paid' => 'getPaid',
        'transactionObject' => 'getTransactionObject'
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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['paymentId'] = isset($data['paymentId']) ? $data['paymentId'] : null;
        $this->container['createdOn'] = isset($data['createdOn']) ? $data['createdOn'] : null;
        $this->container['updatedOn'] = isset($data['updatedOn']) ? $data['updatedOn'] : null;
        $this->container['paid'] = isset($data['paid']) ? $data['paid'] : null;
        $this->container['transactionObject'] = isset($data['transactionObject']) ? $data['transactionObject'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['transactionId'] === null) {
            $invalidProperties[] = "'transactionId' can't be null";
        }
        if ($this->container['paymentId'] === null) {
            $invalidProperties[] = "'paymentId' can't be null";
        }
        if ($this->container['createdOn'] === null) {
            $invalidProperties[] = "'createdOn' can't be null";
        }
        if ($this->container['updatedOn'] === null) {
            $invalidProperties[] = "'updatedOn' can't be null";
        }
        if ($this->container['paid'] === null) {
            $invalidProperties[] = "'paid' can't be null";
        }
        if ($this->container['transactionObject'] === null) {
            $invalidProperties[] = "'transactionObject' can't be null";
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
     * Gets transactionId
     *
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     *
     * @param string $transactionId transactionId
     *
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets paymentId
     *
     * @return string
     */
    public function getPaymentId()
    {
        return $this->container['paymentId'];
    }

    /**
     * Sets paymentId
     *
     * @param string $paymentId paymentId
     *
     * @return $this
     */
    public function setPaymentId($paymentId)
    {
        $this->container['paymentId'] = $paymentId;

        return $this;
    }

    /**
     * Gets createdOn
     *
     * @return string
     */
    public function getCreatedOn()
    {
        return $this->container['createdOn'];
    }

    /**
     * Sets createdOn
     *
     * @param string $createdOn createdOn
     *
     * @return $this
     */
    public function setCreatedOn($createdOn)
    {
        $this->container['createdOn'] = $createdOn;

        return $this;
    }

    /**
     * Gets updatedOn
     *
     * @return string
     */
    public function getUpdatedOn()
    {
        return $this->container['updatedOn'];
    }

    /**
     * Sets updatedOn
     *
     * @param string $updatedOn updatedOn
     *
     * @return $this
     */
    public function setUpdatedOn($updatedOn)
    {
        $this->container['updatedOn'] = $updatedOn;

        return $this;
    }

    /**
     * Gets paid
     *
     * @return bool
     */
    public function getPaid()
    {
        return $this->container['paid'];
    }

    /**
     * Sets paid
     *
     * @param bool $paid paid
     *
     * @return $this
     */
    public function setPaid($paid)
    {
        $this->container['paid'] = $paid;

        return $this;
    }

    /**
     * Gets transactionObject
     *
     * @return \Yoast\MyYoastApiClient\Model\Transaction
     */
    public function getTransactionObject()
    {
        return $this->container['transactionObject'];
    }

    /**
     * Sets transactionObject
     *
     * @param \Yoast\MyYoastApiClient\Model\Transaction $transactionObject transactionObject
     *
     * @return $this
     */
    public function setTransactionObject($transactionObject)
    {
        $this->container['transactionObject'] = $transactionObject;

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
