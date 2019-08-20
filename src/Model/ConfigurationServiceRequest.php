<?php
/**
 * ConfigurationServiceRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * my-yoast
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yoast\MyYoastApiClient\Model;

use \ArrayAccess;

/**
 * ConfigurationServiceRequest Class Doc Comment
 *
 * @category    Class
 * @package     Yoast\MyYoastApiClient
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ConfigurationServiceRequest implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ConfigurationServiceRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'status' => 'string',
        'backup_required' => 'bool',
        'backup_created' => '\DateTime',
        'import_from' => 'string',
        'import_done' => '\DateTime',
        'search_console_required' => 'bool',
        'search_console_connected' => '\DateTime',
        'submitted_at' => '\DateTime',
        'completed_at' => '\DateTime',
        'accepted_at' => '\DateTime',
        'report' => 'string',
        'site_id' => 'string',
        'customer_id' => 'string',
        'assignee_id' => 'string',
        'order_id' => 'string',
        'created_at' => '\DateTime',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'status' => null,
        'backup_required' => null,
        'backup_created' => 'date-time',
        'import_from' => null,
        'import_done' => 'date-time',
        'search_console_required' => null,
        'search_console_connected' => 'date-time',
        'submitted_at' => 'date-time',
        'completed_at' => 'date-time',
        'accepted_at' => 'date-time',
        'report' => null,
        'site_id' => null,
        'customer_id' => null,
        'assignee_id' => null,
        'order_id' => null,
        'created_at' => 'date-time',
        'updated_at' => 'date-time'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'id' => 'id',
        'status' => 'status',
        'backup_required' => 'backupRequired',
        'backup_created' => 'backupCreated',
        'import_from' => 'importFrom',
        'import_done' => 'importDone',
        'search_console_required' => 'searchConsoleRequired',
        'search_console_connected' => 'searchConsoleConnected',
        'submitted_at' => 'submittedAt',
        'completed_at' => 'completedAt',
        'accepted_at' => 'acceptedAt',
        'report' => 'report',
        'site_id' => 'siteId',
        'customer_id' => 'customerId',
        'assignee_id' => 'assigneeId',
        'order_id' => 'orderId',
        'created_at' => 'createdAt',
        'updated_at' => 'updatedAt'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'status' => 'setStatus',
        'backup_required' => 'setBackupRequired',
        'backup_created' => 'setBackupCreated',
        'import_from' => 'setImportFrom',
        'import_done' => 'setImportDone',
        'search_console_required' => 'setSearchConsoleRequired',
        'search_console_connected' => 'setSearchConsoleConnected',
        'submitted_at' => 'setSubmittedAt',
        'completed_at' => 'setCompletedAt',
        'accepted_at' => 'setAcceptedAt',
        'report' => 'setReport',
        'site_id' => 'setSiteId',
        'customer_id' => 'setCustomerId',
        'assignee_id' => 'setAssigneeId',
        'order_id' => 'setOrderId',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'status' => 'getStatus',
        'backup_required' => 'getBackupRequired',
        'backup_created' => 'getBackupCreated',
        'import_from' => 'getImportFrom',
        'import_done' => 'getImportDone',
        'search_console_required' => 'getSearchConsoleRequired',
        'search_console_connected' => 'getSearchConsoleConnected',
        'submitted_at' => 'getSubmittedAt',
        'completed_at' => 'getCompletedAt',
        'accepted_at' => 'getAcceptedAt',
        'report' => 'getReport',
        'site_id' => 'getSiteId',
        'customer_id' => 'getCustomerId',
        'assignee_id' => 'getAssigneeId',
        'order_id' => 'getOrderId',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['backup_required'] = isset($data['backup_required']) ? $data['backup_required'] : false;
        $this->container['backup_created'] = isset($data['backup_created']) ? $data['backup_created'] : null;
        $this->container['import_from'] = isset($data['import_from']) ? $data['import_from'] : null;
        $this->container['import_done'] = isset($data['import_done']) ? $data['import_done'] : null;
        $this->container['search_console_required'] = isset($data['search_console_required']) ? $data['search_console_required'] : false;
        $this->container['search_console_connected'] = isset($data['search_console_connected']) ? $data['search_console_connected'] : null;
        $this->container['submitted_at'] = isset($data['submitted_at']) ? $data['submitted_at'] : null;
        $this->container['completed_at'] = isset($data['completed_at']) ? $data['completed_at'] : null;
        $this->container['accepted_at'] = isset($data['accepted_at']) ? $data['accepted_at'] : null;
        $this->container['report'] = isset($data['report']) ? $data['report'] : null;
        $this->container['site_id'] = isset($data['site_id']) ? $data['site_id'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['assignee_id'] = isset($data['assignee_id']) ? $data['assignee_id'] : null;
        $this->container['order_id'] = isset($data['order_id']) ? $data['order_id'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalid_properties[] = "'status' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets status
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     * @param string $status
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets backup_required
     * @return bool
     */
    public function getBackupRequired()
    {
        return $this->container['backup_required'];
    }

    /**
     * Sets backup_required
     * @param bool $backup_required
     * @return $this
     */
    public function setBackupRequired($backup_required)
    {
        $this->container['backup_required'] = $backup_required;

        return $this;
    }

    /**
     * Gets backup_created
     * @return \DateTime
     */
    public function getBackupCreated()
    {
        return $this->container['backup_created'];
    }

    /**
     * Sets backup_created
     * @param \DateTime $backup_created
     * @return $this
     */
    public function setBackupCreated($backup_created)
    {
        $this->container['backup_created'] = $backup_created;

        return $this;
    }

    /**
     * Gets import_from
     * @return string
     */
    public function getImportFrom()
    {
        return $this->container['import_from'];
    }

    /**
     * Sets import_from
     * @param string $import_from
     * @return $this
     */
    public function setImportFrom($import_from)
    {
        $this->container['import_from'] = $import_from;

        return $this;
    }

    /**
     * Gets import_done
     * @return \DateTime
     */
    public function getImportDone()
    {
        return $this->container['import_done'];
    }

    /**
     * Sets import_done
     * @param \DateTime $import_done
     * @return $this
     */
    public function setImportDone($import_done)
    {
        $this->container['import_done'] = $import_done;

        return $this;
    }

    /**
     * Gets search_console_required
     * @return bool
     */
    public function getSearchConsoleRequired()
    {
        return $this->container['search_console_required'];
    }

    /**
     * Sets search_console_required
     * @param bool $search_console_required
     * @return $this
     */
    public function setSearchConsoleRequired($search_console_required)
    {
        $this->container['search_console_required'] = $search_console_required;

        return $this;
    }

    /**
     * Gets search_console_connected
     * @return \DateTime
     */
    public function getSearchConsoleConnected()
    {
        return $this->container['search_console_connected'];
    }

    /**
     * Sets search_console_connected
     * @param \DateTime $search_console_connected
     * @return $this
     */
    public function setSearchConsoleConnected($search_console_connected)
    {
        $this->container['search_console_connected'] = $search_console_connected;

        return $this;
    }

    /**
     * Gets submitted_at
     * @return \DateTime
     */
    public function getSubmittedAt()
    {
        return $this->container['submitted_at'];
    }

    /**
     * Sets submitted_at
     * @param \DateTime $submitted_at
     * @return $this
     */
    public function setSubmittedAt($submitted_at)
    {
        $this->container['submitted_at'] = $submitted_at;

        return $this;
    }

    /**
     * Gets completed_at
     * @return \DateTime
     */
    public function getCompletedAt()
    {
        return $this->container['completed_at'];
    }

    /**
     * Sets completed_at
     * @param \DateTime $completed_at
     * @return $this
     */
    public function setCompletedAt($completed_at)
    {
        $this->container['completed_at'] = $completed_at;

        return $this;
    }

    /**
     * Gets accepted_at
     * @return \DateTime
     */
    public function getAcceptedAt()
    {
        return $this->container['accepted_at'];
    }

    /**
     * Sets accepted_at
     * @param \DateTime $accepted_at
     * @return $this
     */
    public function setAcceptedAt($accepted_at)
    {
        $this->container['accepted_at'] = $accepted_at;

        return $this;
    }

    /**
     * Gets report
     * @return string
     */
    public function getReport()
    {
        return $this->container['report'];
    }

    /**
     * Sets report
     * @param string $report
     * @return $this
     */
    public function setReport($report)
    {
        $this->container['report'] = $report;

        return $this;
    }

    /**
     * Gets site_id
     * @return string
     */
    public function getSiteId()
    {
        return $this->container['site_id'];
    }

    /**
     * Sets site_id
     * @param string $site_id
     * @return $this
     */
    public function setSiteId($site_id)
    {
        $this->container['site_id'] = $site_id;

        return $this;
    }

    /**
     * Gets customer_id
     * @return string
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     * @param string $customer_id
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets assignee_id
     * @return string
     */
    public function getAssigneeId()
    {
        return $this->container['assignee_id'];
    }

    /**
     * Sets assignee_id
     * @param string $assignee_id
     * @return $this
     */
    public function setAssigneeId($assignee_id)
    {
        $this->container['assignee_id'] = $assignee_id;

        return $this;
    }

    /**
     * Gets order_id
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['order_id'];
    }

    /**
     * Sets order_id
     * @param string $order_id
     * @return $this
     */
    public function setOrderId($order_id)
    {
        $this->container['order_id'] = $order_id;

        return $this;
    }

    /**
     * Gets created_at
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     * @param \DateTime $created_at
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     * @param \DateTime $updated_at
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Yoast\MyYoastApiClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Yoast\MyYoastApiClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


