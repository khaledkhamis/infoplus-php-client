<?php
/**
 * Location
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Infoplus API
 *
 * Infoplus API.
 *
 * OpenAPI spec version: beta
 * Contact: api@infopluscommerce.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Infoplus\Model;

use \ArrayAccess;
use \Infoplus\ObjectSerializer;

/**
 * Location Class Doc Comment
 *
 * @category Class
 * @package  Infoplus
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Location implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'location';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'warehouse_id' => 'int',
        'building_id' => 'int',
        'zone_id' => 'int',
        'aisle_id' => 'int',
        'billing_type_id' => 'int',
        'behavior_type' => 'string',
        'footprint_id' => 'int',
        'address_scheme_id' => 'int',
        'origin' => 'int',
        'address' => 'string',
        'level' => 'int',
        'bay' => 'int',
        'number' => 'int',
        'online' => 'bool',
        'priority_code' => 'int',
        'cost' => 'int',
        'allow_item_mixing' => 'bool',
        'content_mixing_rule' => 'string',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'quantity' => 'int',
        'custom_fields' => 'map[string,object]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int32',
        'warehouse_id' => 'int32',
        'building_id' => 'int32',
        'zone_id' => 'int32',
        'aisle_id' => 'int32',
        'billing_type_id' => 'int32',
        'behavior_type' => null,
        'footprint_id' => 'int32',
        'address_scheme_id' => 'int32',
        'origin' => 'int32',
        'address' => null,
        'level' => 'int32',
        'bay' => 'int32',
        'number' => 'int32',
        'online' => null,
        'priority_code' => 'int32',
        'cost' => 'int32',
        'allow_item_mixing' => null,
        'content_mixing_rule' => null,
        'create_date' => 'date-time',
        'modify_date' => 'date-time',
        'quantity' => 'int32',
        'custom_fields' => null
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
        'warehouse_id' => 'warehouseId',
        'building_id' => 'buildingId',
        'zone_id' => 'zoneId',
        'aisle_id' => 'aisleId',
        'billing_type_id' => 'billingTypeId',
        'behavior_type' => 'behaviorType',
        'footprint_id' => 'footprintId',
        'address_scheme_id' => 'addressSchemeId',
        'origin' => 'origin',
        'address' => 'address',
        'level' => 'level',
        'bay' => 'bay',
        'number' => 'number',
        'online' => 'online',
        'priority_code' => 'priorityCode',
        'cost' => 'cost',
        'allow_item_mixing' => 'allowItemMixing',
        'content_mixing_rule' => 'contentMixingRule',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'quantity' => 'quantity',
        'custom_fields' => 'customFields'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'warehouse_id' => 'setWarehouseId',
        'building_id' => 'setBuildingId',
        'zone_id' => 'setZoneId',
        'aisle_id' => 'setAisleId',
        'billing_type_id' => 'setBillingTypeId',
        'behavior_type' => 'setBehaviorType',
        'footprint_id' => 'setFootprintId',
        'address_scheme_id' => 'setAddressSchemeId',
        'origin' => 'setOrigin',
        'address' => 'setAddress',
        'level' => 'setLevel',
        'bay' => 'setBay',
        'number' => 'setNumber',
        'online' => 'setOnline',
        'priority_code' => 'setPriorityCode',
        'cost' => 'setCost',
        'allow_item_mixing' => 'setAllowItemMixing',
        'content_mixing_rule' => 'setContentMixingRule',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'quantity' => 'setQuantity',
        'custom_fields' => 'setCustomFields'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'warehouse_id' => 'getWarehouseId',
        'building_id' => 'getBuildingId',
        'zone_id' => 'getZoneId',
        'aisle_id' => 'getAisleId',
        'billing_type_id' => 'getBillingTypeId',
        'behavior_type' => 'getBehaviorType',
        'footprint_id' => 'getFootprintId',
        'address_scheme_id' => 'getAddressSchemeId',
        'origin' => 'getOrigin',
        'address' => 'getAddress',
        'level' => 'getLevel',
        'bay' => 'getBay',
        'number' => 'getNumber',
        'online' => 'getOnline',
        'priority_code' => 'getPriorityCode',
        'cost' => 'getCost',
        'allow_item_mixing' => 'getAllowItemMixing',
        'content_mixing_rule' => 'getContentMixingRule',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'quantity' => 'getQuantity',
        'custom_fields' => 'getCustomFields'
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
        $this->container['warehouse_id'] = isset($data['warehouse_id']) ? $data['warehouse_id'] : null;
        $this->container['building_id'] = isset($data['building_id']) ? $data['building_id'] : null;
        $this->container['zone_id'] = isset($data['zone_id']) ? $data['zone_id'] : null;
        $this->container['aisle_id'] = isset($data['aisle_id']) ? $data['aisle_id'] : null;
        $this->container['billing_type_id'] = isset($data['billing_type_id']) ? $data['billing_type_id'] : null;
        $this->container['behavior_type'] = isset($data['behavior_type']) ? $data['behavior_type'] : null;
        $this->container['footprint_id'] = isset($data['footprint_id']) ? $data['footprint_id'] : null;
        $this->container['address_scheme_id'] = isset($data['address_scheme_id']) ? $data['address_scheme_id'] : null;
        $this->container['origin'] = isset($data['origin']) ? $data['origin'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['bay'] = isset($data['bay']) ? $data['bay'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['online'] = isset($data['online']) ? $data['online'] : false;
        $this->container['priority_code'] = isset($data['priority_code']) ? $data['priority_code'] : null;
        $this->container['cost'] = isset($data['cost']) ? $data['cost'] : null;
        $this->container['allow_item_mixing'] = isset($data['allow_item_mixing']) ? $data['allow_item_mixing'] : false;
        $this->container['content_mixing_rule'] = isset($data['content_mixing_rule']) ? $data['content_mixing_rule'] : null;
        $this->container['create_date'] = isset($data['create_date']) ? $data['create_date'] : null;
        $this->container['modify_date'] = isset($data['modify_date']) ? $data['modify_date'] : null;
        $this->container['quantity'] = isset($data['quantity']) ? $data['quantity'] : null;
        $this->container['custom_fields'] = isset($data['custom_fields']) ? $data['custom_fields'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['warehouse_id'] === null) {
            $invalidProperties[] = "'warehouse_id' can't be null";
        }
        if ($this->container['billing_type_id'] === null) {
            $invalidProperties[] = "'billing_type_id' can't be null";
        }
        if ($this->container['behavior_type'] === null) {
            $invalidProperties[] = "'behavior_type' can't be null";
        }
        if ($this->container['footprint_id'] === null) {
            $invalidProperties[] = "'footprint_id' can't be null";
        }
        if ($this->container['online'] === null) {
            $invalidProperties[] = "'online' can't be null";
        }
        if ($this->container['allow_item_mixing'] === null) {
            $invalidProperties[] = "'allow_item_mixing' can't be null";
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

        if ($this->container['warehouse_id'] === null) {
            return false;
        }
        if ($this->container['billing_type_id'] === null) {
            return false;
        }
        if ($this->container['behavior_type'] === null) {
            return false;
        }
        if ($this->container['footprint_id'] === null) {
            return false;
        }
        if ($this->container['online'] === null) {
            return false;
        }
        if ($this->container['allow_item_mixing'] === null) {
            return false;
        }
        return true;
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
     * Gets warehouse_id
     *
     * @return int
     */
    public function getWarehouseId()
    {
        return $this->container['warehouse_id'];
    }

    /**
     * Sets warehouse_id
     *
     * @param int $warehouse_id warehouse_id
     *
     * @return $this
     */
    public function setWarehouseId($warehouse_id)
    {
        $this->container['warehouse_id'] = $warehouse_id;

        return $this;
    }

    /**
     * Gets building_id
     *
     * @return int
     */
    public function getBuildingId()
    {
        return $this->container['building_id'];
    }

    /**
     * Sets building_id
     *
     * @param int $building_id building_id
     *
     * @return $this
     */
    public function setBuildingId($building_id)
    {
        $this->container['building_id'] = $building_id;

        return $this;
    }

    /**
     * Gets zone_id
     *
     * @return int
     */
    public function getZoneId()
    {
        return $this->container['zone_id'];
    }

    /**
     * Sets zone_id
     *
     * @param int $zone_id zone_id
     *
     * @return $this
     */
    public function setZoneId($zone_id)
    {
        $this->container['zone_id'] = $zone_id;

        return $this;
    }

    /**
     * Gets aisle_id
     *
     * @return int
     */
    public function getAisleId()
    {
        return $this->container['aisle_id'];
    }

    /**
     * Sets aisle_id
     *
     * @param int $aisle_id aisle_id
     *
     * @return $this
     */
    public function setAisleId($aisle_id)
    {
        $this->container['aisle_id'] = $aisle_id;

        return $this;
    }

    /**
     * Gets billing_type_id
     *
     * @return int
     */
    public function getBillingTypeId()
    {
        return $this->container['billing_type_id'];
    }

    /**
     * Sets billing_type_id
     *
     * @param int $billing_type_id billing_type_id
     *
     * @return $this
     */
    public function setBillingTypeId($billing_type_id)
    {
        $this->container['billing_type_id'] = $billing_type_id;

        return $this;
    }

    /**
     * Gets behavior_type
     *
     * @return string
     */
    public function getBehaviorType()
    {
        return $this->container['behavior_type'];
    }

    /**
     * Sets behavior_type
     *
     * @param string $behavior_type behavior_type
     *
     * @return $this
     */
    public function setBehaviorType($behavior_type)
    {
        $this->container['behavior_type'] = $behavior_type;

        return $this;
    }

    /**
     * Gets footprint_id
     *
     * @return int
     */
    public function getFootprintId()
    {
        return $this->container['footprint_id'];
    }

    /**
     * Sets footprint_id
     *
     * @param int $footprint_id footprint_id
     *
     * @return $this
     */
    public function setFootprintId($footprint_id)
    {
        $this->container['footprint_id'] = $footprint_id;

        return $this;
    }

    /**
     * Gets address_scheme_id
     *
     * @return int
     */
    public function getAddressSchemeId()
    {
        return $this->container['address_scheme_id'];
    }

    /**
     * Sets address_scheme_id
     *
     * @param int $address_scheme_id address_scheme_id
     *
     * @return $this
     */
    public function setAddressSchemeId($address_scheme_id)
    {
        $this->container['address_scheme_id'] = $address_scheme_id;

        return $this;
    }

    /**
     * Gets origin
     *
     * @return int
     */
    public function getOrigin()
    {
        return $this->container['origin'];
    }

    /**
     * Sets origin
     *
     * @param int $origin origin
     *
     * @return $this
     */
    public function setOrigin($origin)
    {
        $this->container['origin'] = $origin;

        return $this;
    }

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param string $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
     * Sets level
     *
     * @param int $level level
     *
     * @return $this
     */
    public function setLevel($level)
    {
        $this->container['level'] = $level;

        return $this;
    }

    /**
     * Gets bay
     *
     * @return int
     */
    public function getBay()
    {
        return $this->container['bay'];
    }

    /**
     * Sets bay
     *
     * @param int $bay bay
     *
     * @return $this
     */
    public function setBay($bay)
    {
        $this->container['bay'] = $bay;

        return $this;
    }

    /**
     * Gets number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param int $number number
     *
     * @return $this
     */
    public function setNumber($number)
    {
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets online
     *
     * @return bool
     */
    public function getOnline()
    {
        return $this->container['online'];
    }

    /**
     * Sets online
     *
     * @param bool $online online
     *
     * @return $this
     */
    public function setOnline($online)
    {
        $this->container['online'] = $online;

        return $this;
    }

    /**
     * Gets priority_code
     *
     * @return int
     */
    public function getPriorityCode()
    {
        return $this->container['priority_code'];
    }

    /**
     * Sets priority_code
     *
     * @param int $priority_code priority_code
     *
     * @return $this
     */
    public function setPriorityCode($priority_code)
    {
        $this->container['priority_code'] = $priority_code;

        return $this;
    }

    /**
     * Gets cost
     *
     * @return int
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param int $cost cost
     *
     * @return $this
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets allow_item_mixing
     *
     * @return bool
     */
    public function getAllowItemMixing()
    {
        return $this->container['allow_item_mixing'];
    }

    /**
     * Sets allow_item_mixing
     *
     * @param bool $allow_item_mixing allow_item_mixing
     *
     * @return $this
     */
    public function setAllowItemMixing($allow_item_mixing)
    {
        $this->container['allow_item_mixing'] = $allow_item_mixing;

        return $this;
    }

    /**
     * Gets content_mixing_rule
     *
     * @return string
     */
    public function getContentMixingRule()
    {
        return $this->container['content_mixing_rule'];
    }

    /**
     * Sets content_mixing_rule
     *
     * @param string $content_mixing_rule content_mixing_rule
     *
     * @return $this
     */
    public function setContentMixingRule($content_mixing_rule)
    {
        $this->container['content_mixing_rule'] = $content_mixing_rule;

        return $this;
    }

    /**
     * Gets create_date
     *
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->container['create_date'];
    }

    /**
     * Sets create_date
     *
     * @param \DateTime $create_date create_date
     *
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        $this->container['create_date'] = $create_date;

        return $this;
    }

    /**
     * Gets modify_date
     *
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->container['modify_date'];
    }

    /**
     * Sets modify_date
     *
     * @param \DateTime $modify_date modify_date
     *
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        $this->container['modify_date'] = $modify_date;

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
     * Gets custom_fields
     *
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param map[string,object] $custom_fields custom_fields
     *
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

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


