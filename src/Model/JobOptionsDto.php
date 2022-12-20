<?php
/**
 * JobOptionsDto
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
 * Swagger Codegen version: 3.0.36
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
 * JobOptionsDto Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class JobOptionsDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'JobOptionsDto';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'priority' => 'int',
'delay' => 'int',
'attempts' => 'int',
'repeat' => 'object',
'backoff' => 'object',
'lifo' => 'bool',
'timeout' => 'int',
'jobId' => 'object',
'removeOnComplete' => 'object',
'removeOnFail' => 'object',
'stackTraceLimit' => 'int'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'priority' => null,
'delay' => null,
'attempts' => null,
'repeat' => null,
'backoff' => null,
'lifo' => null,
'timeout' => null,
'jobId' => null,
'removeOnComplete' => null,
'removeOnFail' => null,
'stackTraceLimit' => null    ];

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
        'priority' => 'priority',
'delay' => 'delay',
'attempts' => 'attempts',
'repeat' => 'repeat',
'backoff' => 'backoff',
'lifo' => 'lifo',
'timeout' => 'timeout',
'jobId' => 'jobId',
'removeOnComplete' => 'removeOnComplete',
'removeOnFail' => 'removeOnFail',
'stackTraceLimit' => 'stackTraceLimit'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'priority' => 'setPriority',
'delay' => 'setDelay',
'attempts' => 'setAttempts',
'repeat' => 'setRepeat',
'backoff' => 'setBackoff',
'lifo' => 'setLifo',
'timeout' => 'setTimeout',
'jobId' => 'setJobId',
'removeOnComplete' => 'setRemoveOnComplete',
'removeOnFail' => 'setRemoveOnFail',
'stackTraceLimit' => 'setStackTraceLimit'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'priority' => 'getPriority',
'delay' => 'getDelay',
'attempts' => 'getAttempts',
'repeat' => 'getRepeat',
'backoff' => 'getBackoff',
'lifo' => 'getLifo',
'timeout' => 'getTimeout',
'jobId' => 'getJobId',
'removeOnComplete' => 'getRemoveOnComplete',
'removeOnFail' => 'getRemoveOnFail',
'stackTraceLimit' => 'getStackTraceLimit'    ];

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
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['delay'] = isset($data['delay']) ? $data['delay'] : null;
        $this->container['attempts'] = isset($data['attempts']) ? $data['attempts'] : null;
        $this->container['repeat'] = isset($data['repeat']) ? $data['repeat'] : null;
        $this->container['backoff'] = isset($data['backoff']) ? $data['backoff'] : null;
        $this->container['lifo'] = isset($data['lifo']) ? $data['lifo'] : null;
        $this->container['timeout'] = isset($data['timeout']) ? $data['timeout'] : null;
        $this->container['jobId'] = isset($data['jobId']) ? $data['jobId'] : null;
        $this->container['removeOnComplete'] = isset($data['removeOnComplete']) ? $data['removeOnComplete'] : null;
        $this->container['removeOnFail'] = isset($data['removeOnFail']) ? $data['removeOnFail'] : null;
        $this->container['stackTraceLimit'] = isset($data['stackTraceLimit']) ? $data['stackTraceLimit'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

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
     * Gets priority
     *
     * @return int
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param int $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets delay
     *
     * @return int
     */
    public function getDelay()
    {
        return $this->container['delay'];
    }

    /**
     * Sets delay
     *
     * @param int $delay delay
     *
     * @return $this
     */
    public function setDelay($delay)
    {
        $this->container['delay'] = $delay;

        return $this;
    }

    /**
     * Gets attempts
     *
     * @return int
     */
    public function getAttempts()
    {
        return $this->container['attempts'];
    }

    /**
     * Sets attempts
     *
     * @param int $attempts attempts
     *
     * @return $this
     */
    public function setAttempts($attempts)
    {
        $this->container['attempts'] = $attempts;

        return $this;
    }

    /**
     * Gets repeat
     *
     * @return object
     */
    public function getRepeat()
    {
        return $this->container['repeat'];
    }

    /**
     * Sets repeat
     *
     * @param object $repeat repeat
     *
     * @return $this
     */
    public function setRepeat($repeat)
    {
        $this->container['repeat'] = $repeat;

        return $this;
    }

    /**
     * Gets backoff
     *
     * @return object
     */
    public function getBackoff()
    {
        return $this->container['backoff'];
    }

    /**
     * Sets backoff
     *
     * @param object $backoff backoff
     *
     * @return $this
     */
    public function setBackoff($backoff)
    {
        $this->container['backoff'] = $backoff;

        return $this;
    }

    /**
     * Gets lifo
     *
     * @return bool
     */
    public function getLifo()
    {
        return $this->container['lifo'];
    }

    /**
     * Sets lifo
     *
     * @param bool $lifo lifo
     *
     * @return $this
     */
    public function setLifo($lifo)
    {
        $this->container['lifo'] = $lifo;

        return $this;
    }

    /**
     * Gets timeout
     *
     * @return int
     */
    public function getTimeout()
    {
        return $this->container['timeout'];
    }

    /**
     * Sets timeout
     *
     * @param int $timeout timeout
     *
     * @return $this
     */
    public function setTimeout($timeout)
    {
        $this->container['timeout'] = $timeout;

        return $this;
    }

    /**
     * Gets jobId
     *
     * @return object
     */
    public function getJobId()
    {
        return $this->container['jobId'];
    }

    /**
     * Sets jobId
     *
     * @param object $jobId jobId
     *
     * @return $this
     */
    public function setJobId($jobId)
    {
        $this->container['jobId'] = $jobId;

        return $this;
    }

    /**
     * Gets removeOnComplete
     *
     * @return object
     */
    public function getRemoveOnComplete()
    {
        return $this->container['removeOnComplete'];
    }

    /**
     * Sets removeOnComplete
     *
     * @param object $removeOnComplete removeOnComplete
     *
     * @return $this
     */
    public function setRemoveOnComplete($removeOnComplete)
    {
        $this->container['removeOnComplete'] = $removeOnComplete;

        return $this;
    }

    /**
     * Gets removeOnFail
     *
     * @return object
     */
    public function getRemoveOnFail()
    {
        return $this->container['removeOnFail'];
    }

    /**
     * Sets removeOnFail
     *
     * @param object $removeOnFail removeOnFail
     *
     * @return $this
     */
    public function setRemoveOnFail($removeOnFail)
    {
        $this->container['removeOnFail'] = $removeOnFail;

        return $this;
    }

    /**
     * Gets stackTraceLimit
     *
     * @return int
     */
    public function getStackTraceLimit()
    {
        return $this->container['stackTraceLimit'];
    }

    /**
     * Sets stackTraceLimit
     *
     * @param int $stackTraceLimit stackTraceLimit
     *
     * @return $this
     */
    public function setStackTraceLimit($stackTraceLimit)
    {
        $this->container['stackTraceLimit'] = $stackTraceLimit;

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
