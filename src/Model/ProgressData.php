<?php
/**
 * ProgressData
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
 * Swagger Codegen version: 2.4.7
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
 * ProgressData Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProgressData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ProgressData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'status' => 'string',
        'progress' => 'float',
        'outsideTrialProgress' => 'bool',
        'studentId' => 'float',
        'courseId' => 'float',
        'isTrial' => 'bool',
        'trialCompleted' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'status' => null,
        'progress' => null,
        'outsideTrialProgress' => null,
        'studentId' => null,
        'courseId' => null,
        'isTrial' => null,
        'trialCompleted' => null
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
        'status' => 'status',
        'progress' => 'progress',
        'outsideTrialProgress' => 'outsideTrialProgress',
        'studentId' => 'studentId',
        'courseId' => 'courseId',
        'isTrial' => 'isTrial',
        'trialCompleted' => 'trialCompleted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'status' => 'setStatus',
        'progress' => 'setProgress',
        'outsideTrialProgress' => 'setOutsideTrialProgress',
        'studentId' => 'setStudentId',
        'courseId' => 'setCourseId',
        'isTrial' => 'setIsTrial',
        'trialCompleted' => 'setTrialCompleted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'status' => 'getStatus',
        'progress' => 'getProgress',
        'outsideTrialProgress' => 'getOutsideTrialProgress',
        'studentId' => 'getStudentId',
        'courseId' => 'getCourseId',
        'isTrial' => 'getIsTrial',
        'trialCompleted' => 'getTrialCompleted'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['outsideTrialProgress'] = isset($data['outsideTrialProgress']) ? $data['outsideTrialProgress'] : null;
        $this->container['studentId'] = isset($data['studentId']) ? $data['studentId'] : null;
        $this->container['courseId'] = isset($data['courseId']) ? $data['courseId'] : null;
        $this->container['isTrial'] = isset($data['isTrial']) ? $data['isTrial'] : null;
        $this->container['trialCompleted'] = isset($data['trialCompleted']) ? $data['trialCompleted'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['outsideTrialProgress'] === null) {
            $invalidProperties[] = "'outsideTrialProgress' can't be null";
        }
        if ($this->container['studentId'] === null) {
            $invalidProperties[] = "'studentId' can't be null";
        }
        if ($this->container['courseId'] === null) {
            $invalidProperties[] = "'courseId' can't be null";
        }
        if ($this->container['isTrial'] === null) {
            $invalidProperties[] = "'isTrial' can't be null";
        }
        if ($this->container['trialCompleted'] === null) {
            $invalidProperties[] = "'trialCompleted' can't be null";
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
     * Gets progress
     *
     * @return float
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param float $progress progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets outsideTrialProgress
     *
     * @return bool
     */
    public function getOutsideTrialProgress()
    {
        return $this->container['outsideTrialProgress'];
    }

    /**
     * Sets outsideTrialProgress
     *
     * @param bool $outsideTrialProgress outsideTrialProgress
     *
     * @return $this
     */
    public function setOutsideTrialProgress($outsideTrialProgress)
    {
        $this->container['outsideTrialProgress'] = $outsideTrialProgress;

        return $this;
    }

    /**
     * Gets studentId
     *
     * @return float
     */
    public function getStudentId()
    {
        return $this->container['studentId'];
    }

    /**
     * Sets studentId
     *
     * @param float $studentId studentId
     *
     * @return $this
     */
    public function setStudentId($studentId)
    {
        $this->container['studentId'] = $studentId;

        return $this;
    }

    /**
     * Gets courseId
     *
     * @return float
     */
    public function getCourseId()
    {
        return $this->container['courseId'];
    }

    /**
     * Sets courseId
     *
     * @param float $courseId courseId
     *
     * @return $this
     */
    public function setCourseId($courseId)
    {
        $this->container['courseId'] = $courseId;

        return $this;
    }

    /**
     * Gets isTrial
     *
     * @return bool
     */
    public function getIsTrial()
    {
        return $this->container['isTrial'];
    }

    /**
     * Sets isTrial
     *
     * @param bool $isTrial isTrial
     *
     * @return $this
     */
    public function setIsTrial($isTrial)
    {
        $this->container['isTrial'] = $isTrial;

        return $this;
    }

    /**
     * Gets trialCompleted
     *
     * @return bool
     */
    public function getTrialCompleted()
    {
        return $this->container['trialCompleted'];
    }

    /**
     * Sets trialCompleted
     *
     * @param bool $trialCompleted trialCompleted
     *
     * @return $this
     */
    public function setTrialCompleted($trialCompleted)
    {
        $this->container['trialCompleted'] = $trialCompleted;

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


