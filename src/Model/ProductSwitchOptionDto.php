<?php
/**
 * ProductSwitchOptionDto
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
 * ProductSwitchOptionDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProductSwitchOptionDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProductSwitchOptionDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'newProduct' => '\Yoast\MyYoastApiClient\Model\ProductDto',
        'newNextBilling' => '\DateTime',
        'switchAt' => '\DateTime',
        'newEstimatedRenewalPriceInCents' => 'int',
        'estimatedBundleDiscountPercentage' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'newProduct' => null,
        'newNextBilling' => 'date-time',
        'switchAt' => 'date-time',
        'newEstimatedRenewalPriceInCents' => null,
        'estimatedBundleDiscountPercentage' => null
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
        'newProduct' => 'newProduct',
        'newNextBilling' => 'newNextBilling',
        'switchAt' => 'switchAt',
        'newEstimatedRenewalPriceInCents' => 'newEstimatedRenewalPriceInCents',
        'estimatedBundleDiscountPercentage' => 'estimatedBundleDiscountPercentage'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'newProduct' => 'setNewProduct',
        'newNextBilling' => 'setNewNextBilling',
        'switchAt' => 'setSwitchAt',
        'newEstimatedRenewalPriceInCents' => 'setNewEstimatedRenewalPriceInCents',
        'estimatedBundleDiscountPercentage' => 'setEstimatedBundleDiscountPercentage'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'newProduct' => 'getNewProduct',
        'newNextBilling' => 'getNewNextBilling',
        'switchAt' => 'getSwitchAt',
        'newEstimatedRenewalPriceInCents' => 'getNewEstimatedRenewalPriceInCents',
        'estimatedBundleDiscountPercentage' => 'getEstimatedBundleDiscountPercentage'
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
        $this->container['newProduct'] = isset($data['newProduct']) ? $data['newProduct'] : null;
        $this->container['newNextBilling'] = isset($data['newNextBilling']) ? $data['newNextBilling'] : null;
        $this->container['switchAt'] = isset($data['switchAt']) ? $data['switchAt'] : null;
        $this->container['newEstimatedRenewalPriceInCents'] = isset($data['newEstimatedRenewalPriceInCents']) ? $data['newEstimatedRenewalPriceInCents'] : null;
        $this->container['estimatedBundleDiscountPercentage'] = isset($data['estimatedBundleDiscountPercentage']) ? $data['estimatedBundleDiscountPercentage'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['newProduct'] === null) {
            $invalidProperties[] = "'newProduct' can't be null";
        }
        if ($this->container['newNextBilling'] === null) {
            $invalidProperties[] = "'newNextBilling' can't be null";
        }
        if ($this->container['switchAt'] === null) {
            $invalidProperties[] = "'switchAt' can't be null";
        }
        if ($this->container['newEstimatedRenewalPriceInCents'] === null) {
            $invalidProperties[] = "'newEstimatedRenewalPriceInCents' can't be null";
        }
        if ($this->container['estimatedBundleDiscountPercentage'] === null) {
            $invalidProperties[] = "'estimatedBundleDiscountPercentage' can't be null";
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
     * Gets newProduct
     *
     * @return \Yoast\MyYoastApiClient\Model\ProductDto
     */
    public function getNewProduct()
    {
        return $this->container['newProduct'];
    }

    /**
     * Sets newProduct
     *
     * @param \Yoast\MyYoastApiClient\Model\ProductDto $newProduct newProduct
     *
     * @return $this
     */
    public function setNewProduct($newProduct)
    {
        $this->container['newProduct'] = $newProduct;

        return $this;
    }

    /**
     * Gets newNextBilling
     *
     * @return \DateTime
     */
    public function getNewNextBilling()
    {
        return $this->container['newNextBilling'];
    }

    /**
     * Sets newNextBilling
     *
     * @param \DateTime $newNextBilling newNextBilling
     *
     * @return $this
     */
    public function setNewNextBilling($newNextBilling)
    {
        $this->container['newNextBilling'] = $newNextBilling;

        return $this;
    }

    /**
     * Gets switchAt
     *
     * @return \DateTime
     */
    public function getSwitchAt()
    {
        return $this->container['switchAt'];
    }

    /**
     * Sets switchAt
     *
     * @param \DateTime $switchAt switchAt
     *
     * @return $this
     */
    public function setSwitchAt($switchAt)
    {
        $this->container['switchAt'] = $switchAt;

        return $this;
    }

    /**
     * Gets newEstimatedRenewalPriceInCents
     *
     * @return int
     */
    public function getNewEstimatedRenewalPriceInCents()
    {
        return $this->container['newEstimatedRenewalPriceInCents'];
    }

    /**
     * Sets newEstimatedRenewalPriceInCents
     *
     * @param int $newEstimatedRenewalPriceInCents newEstimatedRenewalPriceInCents
     *
     * @return $this
     */
    public function setNewEstimatedRenewalPriceInCents($newEstimatedRenewalPriceInCents)
    {
        $this->container['newEstimatedRenewalPriceInCents'] = $newEstimatedRenewalPriceInCents;

        return $this;
    }

    /**
     * Gets estimatedBundleDiscountPercentage
     *
     * @return int
     */
    public function getEstimatedBundleDiscountPercentage()
    {
        return $this->container['estimatedBundleDiscountPercentage'];
    }

    /**
     * Sets estimatedBundleDiscountPercentage
     *
     * @param int $estimatedBundleDiscountPercentage estimatedBundleDiscountPercentage
     *
     * @return $this
     */
    public function setEstimatedBundleDiscountPercentage($estimatedBundleDiscountPercentage)
    {
        $this->container['estimatedBundleDiscountPercentage'] = $estimatedBundleDiscountPercentage;

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
