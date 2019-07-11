<?php
/**
 * CourseEnrollment
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
 * Swagger Codegen version: 3.0.9
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
 * CourseEnrollment Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CourseEnrollment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CourseEnrollment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
'status' => 'string',
'progress' => 'int',
'createdAt' => '\DateTime',
'modifiedAt' => '\DateTime',
'isTrial' => 'bool',
'outsideTrialProgress' => 'bool',
'trialCompleted' => 'bool',
'lineItemId' => 'string',
'lineItemNumber' => 'int',
'expiryDate' => '\DateTime',
'studentId' => 'string',
'buyerId' => 'string',
'orderId' => 'string',
'courseId' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
'status' => null,
'progress' => null,
'createdAt' => 'date-time',
'modifiedAt' => 'date-time',
'isTrial' => null,
'outsideTrialProgress' => null,
'trialCompleted' => null,
'lineItemId' => null,
'lineItemNumber' => null,
'expiryDate' => 'date-time',
'studentId' => 'uuid',
'buyerId' => 'uuid',
'orderId' => 'uuid',
'courseId' => 'uuid'    ];

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
'status' => 'status',
'progress' => 'progress',
'createdAt' => 'createdAt',
'modifiedAt' => 'modifiedAt',
'isTrial' => 'isTrial',
'outsideTrialProgress' => 'outsideTrialProgress',
'trialCompleted' => 'trialCompleted',
'lineItemId' => 'lineItemId',
'lineItemNumber' => 'lineItemNumber',
'expiryDate' => 'expiryDate',
'studentId' => 'studentId',
'buyerId' => 'buyerId',
'orderId' => 'orderId',
'courseId' => 'courseId'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
'status' => 'setStatus',
'progress' => 'setProgress',
'createdAt' => 'setCreatedAt',
'modifiedAt' => 'setModifiedAt',
'isTrial' => 'setIsTrial',
'outsideTrialProgress' => 'setOutsideTrialProgress',
'trialCompleted' => 'setTrialCompleted',
'lineItemId' => 'setLineItemId',
'lineItemNumber' => 'setLineItemNumber',
'expiryDate' => 'setExpiryDate',
'studentId' => 'setStudentId',
'buyerId' => 'setBuyerId',
'orderId' => 'setOrderId',
'courseId' => 'setCourseId'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
'status' => 'getStatus',
'progress' => 'getProgress',
'createdAt' => 'getCreatedAt',
'modifiedAt' => 'getModifiedAt',
'isTrial' => 'getIsTrial',
'outsideTrialProgress' => 'getOutsideTrialProgress',
'trialCompleted' => 'getTrialCompleted',
'lineItemId' => 'getLineItemId',
'lineItemNumber' => 'getLineItemNumber',
'expiryDate' => 'getExpiryDate',
'studentId' => 'getStudentId',
'buyerId' => 'getBuyerId',
'orderId' => 'getOrderId',
'courseId' => 'getCourseId'    ];

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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['progress'] = isset($data['progress']) ? $data['progress'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['modifiedAt'] = isset($data['modifiedAt']) ? $data['modifiedAt'] : null;
        $this->container['isTrial'] = isset($data['isTrial']) ? $data['isTrial'] : null;
        $this->container['outsideTrialProgress'] = isset($data['outsideTrialProgress']) ? $data['outsideTrialProgress'] : null;
        $this->container['trialCompleted'] = isset($data['trialCompleted']) ? $data['trialCompleted'] : null;
        $this->container['lineItemId'] = isset($data['lineItemId']) ? $data['lineItemId'] : null;
        $this->container['lineItemNumber'] = isset($data['lineItemNumber']) ? $data['lineItemNumber'] : null;
        $this->container['expiryDate'] = isset($data['expiryDate']) ? $data['expiryDate'] : null;
        $this->container['studentId'] = isset($data['studentId']) ? $data['studentId'] : null;
        $this->container['buyerId'] = isset($data['buyerId']) ? $data['buyerId'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['courseId'] = isset($data['courseId']) ? $data['courseId'] : null;
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
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['progress'] === null) {
            $invalidProperties[] = "'progress' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['modifiedAt'] === null) {
            $invalidProperties[] = "'modifiedAt' can't be null";
        }
        if ($this->container['isTrial'] === null) {
            $invalidProperties[] = "'isTrial' can't be null";
        }
        if ($this->container['outsideTrialProgress'] === null) {
            $invalidProperties[] = "'outsideTrialProgress' can't be null";
        }
        if ($this->container['trialCompleted'] === null) {
            $invalidProperties[] = "'trialCompleted' can't be null";
        }
        if ($this->container['lineItemId'] === null) {
            $invalidProperties[] = "'lineItemId' can't be null";
        }
        if ($this->container['lineItemNumber'] === null) {
            $invalidProperties[] = "'lineItemNumber' can't be null";
        }
        if ($this->container['expiryDate'] === null) {
            $invalidProperties[] = "'expiryDate' can't be null";
        }
        if ($this->container['studentId'] === null) {
            $invalidProperties[] = "'studentId' can't be null";
        }
        if ($this->container['buyerId'] === null) {
            $invalidProperties[] = "'buyerId' can't be null";
        }
        if ($this->container['orderId'] === null) {
            $invalidProperties[] = "'orderId' can't be null";
        }
        if ($this->container['courseId'] === null) {
            $invalidProperties[] = "'courseId' can't be null";
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
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * @return int
     */
    public function getProgress()
    {
        return $this->container['progress'];
    }

    /**
     * Sets progress
     *
     * @param int $progress progress
     *
     * @return $this
     */
    public function setProgress($progress)
    {
        $this->container['progress'] = $progress;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param \DateTime $createdAt createdAt
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets modifiedAt
     *
     * @return \DateTime
     */
    public function getModifiedAt()
    {
        return $this->container['modifiedAt'];
    }

    /**
     * Sets modifiedAt
     *
     * @param \DateTime $modifiedAt modifiedAt
     *
     * @return $this
     */
    public function setModifiedAt($modifiedAt)
    {
        $this->container['modifiedAt'] = $modifiedAt;

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
     * Gets lineItemId
     *
     * @return string
     */
    public function getLineItemId()
    {
        return $this->container['lineItemId'];
    }

    /**
     * Sets lineItemId
     *
     * @param string $lineItemId lineItemId
     *
     * @return $this
     */
    public function setLineItemId($lineItemId)
    {
        $this->container['lineItemId'] = $lineItemId;

        return $this;
    }

    /**
     * Gets lineItemNumber
     *
     * @return int
     */
    public function getLineItemNumber()
    {
        return $this->container['lineItemNumber'];
    }

    /**
     * Sets lineItemNumber
     *
     * @param int $lineItemNumber lineItemNumber
     *
     * @return $this
     */
    public function setLineItemNumber($lineItemNumber)
    {
        $this->container['lineItemNumber'] = $lineItemNumber;

        return $this;
    }

    /**
     * Gets expiryDate
     *
     * @return \DateTime
     */
    public function getExpiryDate()
    {
        return $this->container['expiryDate'];
    }

    /**
     * Sets expiryDate
     *
     * @param \DateTime $expiryDate expiryDate
     *
     * @return $this
     */
    public function setExpiryDate($expiryDate)
    {
        $this->container['expiryDate'] = $expiryDate;

        return $this;
    }

    /**
     * Gets studentId
     *
     * @return string
     */
    public function getStudentId()
    {
        return $this->container['studentId'];
    }

    /**
     * Sets studentId
     *
     * @param string $studentId studentId
     *
     * @return $this
     */
    public function setStudentId($studentId)
    {
        $this->container['studentId'] = $studentId;

        return $this;
    }

    /**
     * Gets buyerId
     *
     * @return string
     */
    public function getBuyerId()
    {
        return $this->container['buyerId'];
    }

    /**
     * Sets buyerId
     *
     * @param string $buyerId buyerId
     *
     * @return $this
     */
    public function setBuyerId($buyerId)
    {
        $this->container['buyerId'] = $buyerId;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId orderId
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets courseId
     *
     * @return string
     */
    public function getCourseId()
    {
        return $this->container['courseId'];
    }

    /**
     * Sets courseId
     *
     * @param string $courseId courseId
     *
     * @return $this
     */
    public function setCourseId($courseId)
    {
        $this->container['courseId'] = $courseId;

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
