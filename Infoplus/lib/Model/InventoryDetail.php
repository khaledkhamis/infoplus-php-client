<?php
/**
 * InventoryDetail
 *
 * PHP version 5
 *
 * @category Class
 * @package  Infoplus
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Infoplus\Model;

use \ArrayAccess;
/**
 * InventoryDetail Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InventoryDetail implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'warehouse_location_id' => 'int',
        'quantity' => 'int',
        'distribution_date' => '\DateTime',
        'units_per_case' => 'int',
        'units_per_wrap' => 'int',
        'revision_date' => 'string',
        'production_lot' => 'string',
        'oldest_receipt_date' => '\DateTime',
        'lob_id' => 'int',
        'po_no' => 'string',
        'custom_fields' => 'map[string,object]',
        'sku' => 'string'
    );
  
    static function swaggerTypes() {
        return self::$swaggerTypes;
    }

    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'id' => 'id',
        'warehouse_location_id' => 'warehouseLocationId',
        'quantity' => 'quantity',
        'distribution_date' => 'distributionDate',
        'units_per_case' => 'unitsPerCase',
        'units_per_wrap' => 'unitsPerWrap',
        'revision_date' => 'revisionDate',
        'production_lot' => 'productionLot',
        'oldest_receipt_date' => 'oldestReceiptDate',
        'lob_id' => 'lobId',
        'po_no' => 'poNo',
        'custom_fields' => 'customFields',
        'sku' => 'sku'
    );
  
    static function attributeMap() {
        return self::$attributeMap;
    }

    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'id' => 'setId',
        'warehouse_location_id' => 'setWarehouseLocationId',
        'quantity' => 'setQuantity',
        'distribution_date' => 'setDistributionDate',
        'units_per_case' => 'setUnitsPerCase',
        'units_per_wrap' => 'setUnitsPerWrap',
        'revision_date' => 'setRevisionDate',
        'production_lot' => 'setProductionLot',
        'oldest_receipt_date' => 'setOldestReceiptDate',
        'lob_id' => 'setLobId',
        'po_no' => 'setPoNo',
        'custom_fields' => 'setCustomFields',
        'sku' => 'setSku'
    );
  
    static function setters() {
        return self::$setters;
    }

    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'id' => 'getId',
        'warehouse_location_id' => 'getWarehouseLocationId',
        'quantity' => 'getQuantity',
        'distribution_date' => 'getDistributionDate',
        'units_per_case' => 'getUnitsPerCase',
        'units_per_wrap' => 'getUnitsPerWrap',
        'revision_date' => 'getRevisionDate',
        'production_lot' => 'getProductionLot',
        'oldest_receipt_date' => 'getOldestReceiptDate',
        'lob_id' => 'getLobId',
        'po_no' => 'getPoNo',
        'custom_fields' => 'getCustomFields',
        'sku' => 'getSku'
    );
  
    static function getters() {
        return self::$getters;
    }

    
    /**
      * $id 
      * @var int
      */
    protected $id;
    
    /**
      * $warehouse_location_id 
      * @var int
      */
    protected $warehouse_location_id;
    
    /**
      * $quantity 
      * @var int
      */
    protected $quantity;
    
    /**
      * $distribution_date 
      * @var \DateTime
      */
    protected $distribution_date;
    
    /**
      * $units_per_case 
      * @var int
      */
    protected $units_per_case;
    
    /**
      * $units_per_wrap 
      * @var int
      */
    protected $units_per_wrap;
    
    /**
      * $revision_date 
      * @var string
      */
    protected $revision_date;
    
    /**
      * $production_lot 
      * @var string
      */
    protected $production_lot;
    
    /**
      * $oldest_receipt_date 
      * @var \DateTime
      */
    protected $oldest_receipt_date;
    
    /**
      * $lob_id 
      * @var int
      */
    protected $lob_id;
    
    /**
      * $po_no 
      * @var string
      */
    protected $po_no;
    
    /**
      * $custom_fields 
      * @var map[string,object]
      */
    protected $custom_fields;
    
    /**
      * $sku 
      * @var string
      */
    protected $sku;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->warehouse_location_id = $data["warehouse_location_id"];
            $this->quantity = $data["quantity"];
            $this->distribution_date = $data["distribution_date"];
            $this->units_per_case = $data["units_per_case"];
            $this->units_per_wrap = $data["units_per_wrap"];
            $this->revision_date = $data["revision_date"];
            $this->production_lot = $data["production_lot"];
            $this->oldest_receipt_date = $data["oldest_receipt_date"];
            $this->lob_id = $data["lob_id"];
            $this->po_no = $data["po_no"];
            $this->custom_fields = $data["custom_fields"];
            $this->sku = $data["sku"];
        }
    }
    
    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
  
    /**
     * Sets id
     * @param int $id 
     * @return $this
     */
    public function setId($id)
    {
        
        $this->id = $id;
        return $this;
    }
    
    /**
     * Gets warehouse_location_id
     * @return int
     */
    public function getWarehouseLocationId()
    {
        return $this->warehouse_location_id;
    }
  
    /**
     * Sets warehouse_location_id
     * @param int $warehouse_location_id 
     * @return $this
     */
    public function setWarehouseLocationId($warehouse_location_id)
    {
        
        $this->warehouse_location_id = $warehouse_location_id;
        return $this;
    }
    
    /**
     * Gets quantity
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }
  
    /**
     * Sets quantity
     * @param int $quantity 
     * @return $this
     */
    public function setQuantity($quantity)
    {
        
        $this->quantity = $quantity;
        return $this;
    }
    
    /**
     * Gets distribution_date
     * @return \DateTime
     */
    public function getDistributionDate()
    {
        return $this->distribution_date;
    }
  
    /**
     * Sets distribution_date
     * @param \DateTime $distribution_date 
     * @return $this
     */
    public function setDistributionDate($distribution_date)
    {
        
        $this->distribution_date = $distribution_date;
        return $this;
    }
    
    /**
     * Gets units_per_case
     * @return int
     */
    public function getUnitsPerCase()
    {
        return $this->units_per_case;
    }
  
    /**
     * Sets units_per_case
     * @param int $units_per_case 
     * @return $this
     */
    public function setUnitsPerCase($units_per_case)
    {
        
        $this->units_per_case = $units_per_case;
        return $this;
    }
    
    /**
     * Gets units_per_wrap
     * @return int
     */
    public function getUnitsPerWrap()
    {
        return $this->units_per_wrap;
    }
  
    /**
     * Sets units_per_wrap
     * @param int $units_per_wrap 
     * @return $this
     */
    public function setUnitsPerWrap($units_per_wrap)
    {
        
        $this->units_per_wrap = $units_per_wrap;
        return $this;
    }
    
    /**
     * Gets revision_date
     * @return string
     */
    public function getRevisionDate()
    {
        return $this->revision_date;
    }
  
    /**
     * Sets revision_date
     * @param string $revision_date 
     * @return $this
     */
    public function setRevisionDate($revision_date)
    {
        
        $this->revision_date = $revision_date;
        return $this;
    }
    
    /**
     * Gets production_lot
     * @return string
     */
    public function getProductionLot()
    {
        return $this->production_lot;
    }
  
    /**
     * Sets production_lot
     * @param string $production_lot 
     * @return $this
     */
    public function setProductionLot($production_lot)
    {
        
        $this->production_lot = $production_lot;
        return $this;
    }
    
    /**
     * Gets oldest_receipt_date
     * @return \DateTime
     */
    public function getOldestReceiptDate()
    {
        return $this->oldest_receipt_date;
    }
  
    /**
     * Sets oldest_receipt_date
     * @param \DateTime $oldest_receipt_date 
     * @return $this
     */
    public function setOldestReceiptDate($oldest_receipt_date)
    {
        
        $this->oldest_receipt_date = $oldest_receipt_date;
        return $this;
    }
    
    /**
     * Gets lob_id
     * @return int
     */
    public function getLobId()
    {
        return $this->lob_id;
    }
  
    /**
     * Sets lob_id
     * @param int $lob_id 
     * @return $this
     */
    public function setLobId($lob_id)
    {
        
        $this->lob_id = $lob_id;
        return $this;
    }
    
    /**
     * Gets po_no
     * @return string
     */
    public function getPoNo()
    {
        return $this->po_no;
    }
  
    /**
     * Sets po_no
     * @param string $po_no 
     * @return $this
     */
    public function setPoNo($po_no)
    {
        
        $this->po_no = $po_no;
        return $this;
    }
    
    /**
     * Gets custom_fields
     * @return map[string,object]
     */
    public function getCustomFields()
    {
        return $this->custom_fields;
    }
  
    /**
     * Sets custom_fields
     * @param map[string,object] $custom_fields 
     * @return $this
     */
    public function setCustomFields($custom_fields)
    {
        
        $this->custom_fields = $custom_fields;
        return $this;
    }
    
    /**
     * Gets sku
     * @return string
     */
    public function getSku()
    {
        return $this->sku;
    }
  
    /**
     * Sets sku
     * @param string $sku 
     * @return $this
     */
    public function setSku($sku)
    {
        
        $this->sku = $sku;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\Infoplus\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\Infoplus\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
