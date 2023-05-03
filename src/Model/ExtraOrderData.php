<?php
/**
 * ExtraOrderData
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
 * ExtraOrderData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ExtraOrderData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ExtraOrderData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'customer' => '\Yoast\MyYoastApiClient\Model\CustomerData',
'shopId' => 'int',
'paymentReference' => 'string',
'automatic' => 'bool',
'billingType' => 'string',
'vatNumber' => 'string',
'renewalKey' => 'string',
'acceptsMarketing' => 'bool',
'transactions' => '\Yoast\MyYoastApiClient\Model\TransactionDataDto[]',
'wooRefunds' => '\Yoast\MyYoastApiClient\Model\RefundDataDto[]',
'orderIntent' => 'string',
'relatedSubscriptionNumber' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'customer' => null,
'shopId' => null,
'paymentReference' => null,
'automatic' => null,
'billingType' => null,
'vatNumber' => null,
'renewalKey' => null,
'acceptsMarketing' => null,
'transactions' => null,
'wooRefunds' => null,
'orderIntent' => null,
'relatedSubscriptionNumber' => null    ];

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
        'customer' => 'customer',
'shopId' => 'shop_id',
'paymentReference' => 'payment_reference',
'automatic' => 'automatic',
'billingType' => 'billingType',
'vatNumber' => 'vat_number',
'renewalKey' => 'renewal_key',
'acceptsMarketing' => 'accepts_marketing',
'transactions' => 'transactions',
'wooRefunds' => 'woo_refunds',
'orderIntent' => 'order_intent',
'relatedSubscriptionNumber' => 'related_subscription_number'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'customer' => 'setCustomer',
'shopId' => 'setShopId',
'paymentReference' => 'setPaymentReference',
'automatic' => 'setAutomatic',
'billingType' => 'setBillingType',
'vatNumber' => 'setVatNumber',
'renewalKey' => 'setRenewalKey',
'acceptsMarketing' => 'setAcceptsMarketing',
'transactions' => 'setTransactions',
'wooRefunds' => 'setWooRefunds',
'orderIntent' => 'setOrderIntent',
'relatedSubscriptionNumber' => 'setRelatedSubscriptionNumber'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'customer' => 'getCustomer',
'shopId' => 'getShopId',
'paymentReference' => 'getPaymentReference',
'automatic' => 'getAutomatic',
'billingType' => 'getBillingType',
'vatNumber' => 'getVatNumber',
'renewalKey' => 'getRenewalKey',
'acceptsMarketing' => 'getAcceptsMarketing',
'transactions' => 'getTransactions',
'wooRefunds' => 'getWooRefunds',
'orderIntent' => 'getOrderIntent',
'relatedSubscriptionNumber' => 'getRelatedSubscriptionNumber'    ];

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

    const ORDER_INTENT_PURCHASE = 'Purchase';
const ORDER_INTENT_RENEWAL = 'Renewal';
const ORDER_INTENT_UPGRADE = 'Upgrade';
const ORDER_INTENT_SWITCH_PAYMENT_METHOD = 'SwitchPaymentMethod';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getOrderIntentAllowableValues()
    {
        return [
            self::ORDER_INTENT_PURCHASE,
self::ORDER_INTENT_RENEWAL,
self::ORDER_INTENT_UPGRADE,
self::ORDER_INTENT_SWITCH_PAYMENT_METHOD,        ];
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
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['shopId'] = isset($data['shopId']) ? $data['shopId'] : null;
        $this->container['paymentReference'] = isset($data['paymentReference']) ? $data['paymentReference'] : null;
        $this->container['automatic'] = isset($data['automatic']) ? $data['automatic'] : null;
        $this->container['billingType'] = isset($data['billingType']) ? $data['billingType'] : null;
        $this->container['vatNumber'] = isset($data['vatNumber']) ? $data['vatNumber'] : null;
        $this->container['renewalKey'] = isset($data['renewalKey']) ? $data['renewalKey'] : null;
        $this->container['acceptsMarketing'] = isset($data['acceptsMarketing']) ? $data['acceptsMarketing'] : null;
        $this->container['transactions'] = isset($data['transactions']) ? $data['transactions'] : null;
        $this->container['wooRefunds'] = isset($data['wooRefunds']) ? $data['wooRefunds'] : null;
        $this->container['orderIntent'] = isset($data['orderIntent']) ? $data['orderIntent'] : null;
        $this->container['relatedSubscriptionNumber'] = isset($data['relatedSubscriptionNumber']) ? $data['relatedSubscriptionNumber'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['shopId'] === null) {
            $invalidProperties[] = "'shopId' can't be null";
        }
        if ($this->container['paymentReference'] === null) {
            $invalidProperties[] = "'paymentReference' can't be null";
        }
        if ($this->container['automatic'] === null) {
            $invalidProperties[] = "'automatic' can't be null";
        }
        if ($this->container['billingType'] === null) {
            $invalidProperties[] = "'billingType' can't be null";
        }
        if ($this->container['transactions'] === null) {
            $invalidProperties[] = "'transactions' can't be null";
        }
        if ($this->container['wooRefunds'] === null) {
            $invalidProperties[] = "'wooRefunds' can't be null";
        }
        $allowedValues = $this->getOrderIntentAllowableValues();
        if (!is_null($this->container['orderIntent']) && !in_array($this->container['orderIntent'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'orderIntent', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets customer
     *
     * @return \Yoast\MyYoastApiClient\Model\CustomerData
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Yoast\MyYoastApiClient\Model\CustomerData $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets shopId
     *
     * @return int
     */
    public function getShopId()
    {
        return $this->container['shopId'];
    }

    /**
     * Sets shopId
     *
     * @param int $shopId shopId
     *
     * @return $this
     */
    public function setShopId($shopId)
    {
        $this->container['shopId'] = $shopId;

        return $this;
    }

    /**
     * Gets paymentReference
     *
     * @return string
     */
    public function getPaymentReference()
    {
        return $this->container['paymentReference'];
    }

    /**
     * Sets paymentReference
     *
     * @param string $paymentReference paymentReference
     *
     * @return $this
     */
    public function setPaymentReference($paymentReference)
    {
        $this->container['paymentReference'] = $paymentReference;

        return $this;
    }

    /**
     * Gets automatic
     *
     * @return bool
     */
    public function getAutomatic()
    {
        return $this->container['automatic'];
    }

    /**
     * Sets automatic
     *
     * @param bool $automatic automatic
     *
     * @return $this
     */
    public function setAutomatic($automatic)
    {
        $this->container['automatic'] = $automatic;

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
     * Gets vatNumber
     *
     * @return string
     */
    public function getVatNumber()
    {
        return $this->container['vatNumber'];
    }

    /**
     * Sets vatNumber
     *
     * @param string $vatNumber vatNumber
     *
     * @return $this
     */
    public function setVatNumber($vatNumber)
    {
        $this->container['vatNumber'] = $vatNumber;

        return $this;
    }

    /**
     * Gets renewalKey
     *
     * @return string
     */
    public function getRenewalKey()
    {
        return $this->container['renewalKey'];
    }

    /**
     * Sets renewalKey
     *
     * @param string $renewalKey renewalKey
     *
     * @return $this
     */
    public function setRenewalKey($renewalKey)
    {
        $this->container['renewalKey'] = $renewalKey;

        return $this;
    }

    /**
     * Gets acceptsMarketing
     *
     * @return bool
     */
    public function getAcceptsMarketing()
    {
        return $this->container['acceptsMarketing'];
    }

    /**
     * Sets acceptsMarketing
     *
     * @param bool $acceptsMarketing acceptsMarketing
     *
     * @return $this
     */
    public function setAcceptsMarketing($acceptsMarketing)
    {
        $this->container['acceptsMarketing'] = $acceptsMarketing;

        return $this;
    }

    /**
     * Gets transactions
     *
     * @return \Yoast\MyYoastApiClient\Model\TransactionDataDto[]
     */
    public function getTransactions()
    {
        return $this->container['transactions'];
    }

    /**
     * Sets transactions
     *
     * @param \Yoast\MyYoastApiClient\Model\TransactionDataDto[] $transactions transactions
     *
     * @return $this
     */
    public function setTransactions($transactions)
    {
        $this->container['transactions'] = $transactions;

        return $this;
    }

    /**
     * Gets wooRefunds
     *
     * @return \Yoast\MyYoastApiClient\Model\RefundDataDto[]
     */
    public function getWooRefunds()
    {
        return $this->container['wooRefunds'];
    }

    /**
     * Sets wooRefunds
     *
     * @param \Yoast\MyYoastApiClient\Model\RefundDataDto[] $wooRefunds wooRefunds
     *
     * @return $this
     */
    public function setWooRefunds($wooRefunds)
    {
        $this->container['wooRefunds'] = $wooRefunds;

        return $this;
    }

    /**
     * Gets orderIntent
     *
     * @return string
     */
    public function getOrderIntent()
    {
        return $this->container['orderIntent'];
    }

    /**
     * Sets orderIntent
     *
     * @param string $orderIntent orderIntent
     *
     * @return $this
     */
    public function setOrderIntent($orderIntent)
    {
        $allowedValues = $this->getOrderIntentAllowableValues();
        if (!is_null($orderIntent) && !in_array($orderIntent, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'orderIntent', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['orderIntent'] = $orderIntent;

        return $this;
    }

    /**
     * Gets relatedSubscriptionNumber
     *
     * @return string
     */
    public function getRelatedSubscriptionNumber()
    {
        return $this->container['relatedSubscriptionNumber'];
    }

    /**
     * Sets relatedSubscriptionNumber
     *
     * @param string $relatedSubscriptionNumber relatedSubscriptionNumber
     *
     * @return $this
     */
    public function setRelatedSubscriptionNumber($relatedSubscriptionNumber)
    {
        $this->container['relatedSubscriptionNumber'] = $relatedSubscriptionNumber;

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
