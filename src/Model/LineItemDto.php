<?php
/**
 * LineItemDto
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
 * LineItemDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class LineItemDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'LineItemDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bundledItemTitle' => 'string',
'id' => 'int',
'name' => 'string',
'price' => 'int',
'productId' => 'int',
'quantity' => 'int',
'sku' => 'string',
'subtotal' => 'string',
'subtotalTax' => 'string',
'taxes' => '\Yoast\MyYoastApiClient\Model\LineItemTax[]',
'taxClass' => 'string',
'total' => 'string',
'totalTax' => 'string',
'variationId' => 'int',
'bundledBy' => 'int',
'bundledItems' => 'string[]',
'metaData' => '\Yoast\MyYoastApiClient\Model\MetaDataDto[]',
'parentName' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bundledItemTitle' => null,
'id' => null,
'name' => null,
'price' => null,
'productId' => null,
'quantity' => null,
'sku' => null,
'subtotal' => null,
'subtotalTax' => null,
'taxes' => null,
'taxClass' => null,
'total' => null,
'totalTax' => null,
'variationId' => null,
'bundledBy' => null,
'bundledItems' => null,
'metaData' => null,
'parentName' => null    ];

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
        'bundledItemTitle' => 'bundled_item_title',
'id' => 'id',
'name' => 'name',
'price' => 'price',
'productId' => 'product_id',
'quantity' => 'quantity',
'sku' => 'sku',
'subtotal' => 'subtotal',
'subtotalTax' => 'subtotal_tax',
'taxes' => 'taxes',
'taxClass' => 'tax_class',
'total' => 'total',
'totalTax' => 'total_tax',
'variationId' => 'variation_id',
'bundledBy' => 'bundled_by',
'bundledItems' => 'bundled_items',
'metaData' => 'meta_data',
'parentName' => 'parent_name'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bundledItemTitle' => 'setBundledItemTitle',
'id' => 'setId',
'name' => 'setName',
'price' => 'setPrice',
'productId' => 'setProductId',
'quantity' => 'setQuantity',
'sku' => 'setSku',
'subtotal' => 'setSubtotal',
'subtotalTax' => 'setSubtotalTax',
'taxes' => 'setTaxes',
'taxClass' => 'setTaxClass',
'total' => 'setTotal',
'totalTax' => 'setTotalTax',
'variationId' => 'setVariationId',
'bundledBy' => 'setBundledBy',
'bundledItems' => 'setBundledItems',
'metaData' => 'setMetaData',
'parentName' => 'setParentName'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bundledItemTitle' => 'getBundledItemTitle',
'id' => 'getId',
'name' => 'getName',
'price' => 'getPrice',
'productId' => 'getProductId',
'quantity' => 'getQuantity',
'sku' => 'getSku',
'subtotal' => 'getSubtotal',
'subtotalTax' => 'getSubtotalTax',
'taxes' => 'getTaxes',
'taxClass' => 'getTaxClass',
'total' => 'getTotal',
'totalTax' => 'getTotalTax',
'variationId' => 'getVariationId',
'bundledBy' => 'getBundledBy',
'bundledItems' => 'getBundledItems',
'metaData' => 'getMetaData',
'parentName' => 'getParentName'    ];

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
        $this->container['bundledItemTitle'] = isset($data['bundledItemTitle']) ? $data['bundledItemTitle'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['price'] = isset($data['price']) ? $data['price'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['sku'] = isset($data['sku']) ? $data['sku'] : null;
        $this->container['subtotal'] = isset($data['subtotal']) ? $data['subtotal'] : null;
        $this->container['subtotalTax'] = isset($data['subtotalTax']) ? $data['subtotalTax'] : null;
        $this->container['taxes'] = isset($data['taxes']) ? $data['taxes'] : null;
        $this->container['taxClass'] = isset($data['taxClass']) ? $data['taxClass'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['totalTax'] = isset($data['totalTax']) ? $data['totalTax'] : null;
        $this->container['variationId'] = isset($data['variationId']) ? $data['variationId'] : null;
        $this->container['bundledBy'] = isset($data['bundledBy']) ? $data['bundledBy'] : null;
        $this->container['bundledItems'] = isset($data['bundledItems']) ? $data['bundledItems'] : null;
        $this->container['metaData'] = isset($data['metaData']) ? $data['metaData'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
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
        if ($this->container['price'] === null) {
            $invalidProperties[] = "'price' can't be null";
        }
        if ($this->container['productId'] === null) {
            $invalidProperties[] = "'productId' can't be null";
        }
        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if ($this->container['sku'] === null) {
            $invalidProperties[] = "'sku' can't be null";
        }
        if ($this->container['subtotal'] === null) {
            $invalidProperties[] = "'subtotal' can't be null";
        }
        if ($this->container['subtotalTax'] === null) {
            $invalidProperties[] = "'subtotalTax' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
        }
        if ($this->container['taxClass'] === null) {
            $invalidProperties[] = "'taxClass' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
        }
        if ($this->container['totalTax'] === null) {
            $invalidProperties[] = "'totalTax' can't be null";
        }
        if ($this->container['variationId'] === null) {
            $invalidProperties[] = "'variationId' can't be null";
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
     * Gets bundledItemTitle
     *
     * @return string
     */
    public function getBundledItemTitle()
    {
        return $this->container['bundledItemTitle'];
    }

    /**
     * Sets bundledItemTitle
     *
     * @param string $bundledItemTitle bundledItemTitle
     *
     * @return $this
     */
    public function setBundledItemTitle($bundledItemTitle)
    {
        $this->container['bundledItemTitle'] = $bundledItemTitle;

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
     * Gets productId
     *
     * @return int
     */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
     * Sets productId
     *
     * @param int $productId productId
     *
     * @return $this
     */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity quantity
     *
     * @return $this
     */
    public function setQuantity($quantity)
    {
        $this->container['quantity'] = $quantity;

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
     * Gets subtotal
     *
     * @return string
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param string $subtotal subtotal
     *
     * @return $this
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }

    /**
     * Gets subtotalTax
     *
     * @return string
     */
    public function getSubtotalTax()
    {
        return $this->container['subtotalTax'];
    }

    /**
     * Sets subtotalTax
     *
     * @param string $subtotalTax subtotalTax
     *
     * @return $this
     */
    public function setSubtotalTax($subtotalTax)
    {
        $this->container['subtotalTax'] = $subtotalTax;

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
     * Gets variationId
     *
     * @return int
     */
    public function getVariationId()
    {
        return $this->container['variationId'];
    }

    /**
     * Sets variationId
     *
     * @param int $variationId variationId
     *
     * @return $this
     */
    public function setVariationId($variationId)
    {
        $this->container['variationId'] = $variationId;

        return $this;
    }

    /**
     * Gets bundledBy
     *
     * @return int
     */
    public function getBundledBy()
    {
        return $this->container['bundledBy'];
    }

    /**
     * Sets bundledBy
     *
     * @param int $bundledBy bundledBy
     *
     * @return $this
     */
    public function setBundledBy($bundledBy)
    {
        $this->container['bundledBy'] = $bundledBy;

        return $this;
    }

    /**
     * Gets bundledItems
     *
     * @return string[]
     */
    public function getBundledItems()
    {
        return $this->container['bundledItems'];
    }

    /**
     * Sets bundledItems
     *
     * @param string[] $bundledItems bundledItems
     *
     * @return $this
     */
    public function setBundledItems($bundledItems)
    {
        $this->container['bundledItems'] = $bundledItems;

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
     * Gets parentName
     *
     * @return string
     */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
     * Sets parentName
     *
     * @param string $parentName parentName
     *
     * @return $this
     */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;

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
