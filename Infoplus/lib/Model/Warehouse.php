<?php
/**
 * Warehouse
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
 * Warehouse Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     Infoplus
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Warehouse implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'id' => 'int',
        'client' => 'int',
        'name' => 'string',
        'address' => 'string',
        'company' => 'string',
        'street1' => 'string',
        'street2' => 'string',
        'street3' => 'string',
        'city' => 'string',
        'state' => 'string',
        'zip' => 'string',
        'country' => 'string',
        'phone' => 'string',
        'location_barcode_prefix' => 'string',
        'lpn_prefix' => 'string',
        'create_date' => '\DateTime',
        'modify_date' => '\DateTime',
        'custom_fields' => 'map[string,object]'
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
        'client' => 'client',
        'name' => 'name',
        'address' => 'address',
        'company' => 'company',
        'street1' => 'street1',
        'street2' => 'street2',
        'street3' => 'street3',
        'city' => 'city',
        'state' => 'state',
        'zip' => 'zip',
        'country' => 'country',
        'phone' => 'phone',
        'location_barcode_prefix' => 'locationBarcodePrefix',
        'lpn_prefix' => 'lpnPrefix',
        'create_date' => 'createDate',
        'modify_date' => 'modifyDate',
        'custom_fields' => 'customFields'
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
        'client' => 'setClient',
        'name' => 'setName',
        'address' => 'setAddress',
        'company' => 'setCompany',
        'street1' => 'setStreet1',
        'street2' => 'setStreet2',
        'street3' => 'setStreet3',
        'city' => 'setCity',
        'state' => 'setState',
        'zip' => 'setZip',
        'country' => 'setCountry',
        'phone' => 'setPhone',
        'location_barcode_prefix' => 'setLocationBarcodePrefix',
        'lpn_prefix' => 'setLpnPrefix',
        'create_date' => 'setCreateDate',
        'modify_date' => 'setModifyDate',
        'custom_fields' => 'setCustomFields'
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
        'client' => 'getClient',
        'name' => 'getName',
        'address' => 'getAddress',
        'company' => 'getCompany',
        'street1' => 'getStreet1',
        'street2' => 'getStreet2',
        'street3' => 'getStreet3',
        'city' => 'getCity',
        'state' => 'getState',
        'zip' => 'getZip',
        'country' => 'getCountry',
        'phone' => 'getPhone',
        'location_barcode_prefix' => 'getLocationBarcodePrefix',
        'lpn_prefix' => 'getLpnPrefix',
        'create_date' => 'getCreateDate',
        'modify_date' => 'getModifyDate',
        'custom_fields' => 'getCustomFields'
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
      * $client 
      * @var int
      */
    protected $client;
    
    /**
      * $name 
      * @var string
      */
    protected $name;
    
    /**
      * $address 
      * @var string
      */
    protected $address;
    
    /**
      * $company 
      * @var string
      */
    protected $company;
    
    /**
      * $street1 
      * @var string
      */
    protected $street1;
    
    /**
      * $street2 
      * @var string
      */
    protected $street2;
    
    /**
      * $street3 
      * @var string
      */
    protected $street3;
    
    /**
      * $city 
      * @var string
      */
    protected $city;
    
    /**
      * $state 
      * @var string
      */
    protected $state;
    
    /**
      * $zip 
      * @var string
      */
    protected $zip;
    
    /**
      * $country 
      * @var string
      */
    protected $country;
    
    /**
      * $phone 
      * @var string
      */
    protected $phone;
    
    /**
      * $location_barcode_prefix 
      * @var string
      */
    protected $location_barcode_prefix;
    
    /**
      * $lpn_prefix 
      * @var string
      */
    protected $lpn_prefix;
    
    /**
      * $create_date 
      * @var \DateTime
      */
    protected $create_date;
    
    /**
      * $modify_date 
      * @var \DateTime
      */
    protected $modify_date;
    
    /**
      * $custom_fields 
      * @var map[string,object]
      */
    protected $custom_fields;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        
        if ($data != null) {
            $this->id = $data["id"];
            $this->client = $data["client"];
            $this->name = $data["name"];
            $this->address = $data["address"];
            $this->company = $data["company"];
            $this->street1 = $data["street1"];
            $this->street2 = $data["street2"];
            $this->street3 = $data["street3"];
            $this->city = $data["city"];
            $this->state = $data["state"];
            $this->zip = $data["zip"];
            $this->country = $data["country"];
            $this->phone = $data["phone"];
            $this->location_barcode_prefix = $data["location_barcode_prefix"];
            $this->lpn_prefix = $data["lpn_prefix"];
            $this->create_date = $data["create_date"];
            $this->modify_date = $data["modify_date"];
            $this->custom_fields = $data["custom_fields"];
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
     * Gets client
     * @return int
     */
    public function getClient()
    {
        return $this->client;
    }
  
    /**
     * Sets client
     * @param int $client 
     * @return $this
     */
    public function setClient($client)
    {
        
        $this->client = $client;
        return $this;
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name 
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets address
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }
  
    /**
     * Sets address
     * @param string $address 
     * @return $this
     */
    public function setAddress($address)
    {
        
        $this->address = $address;
        return $this;
    }
    
    /**
     * Gets company
     * @return string
     */
    public function getCompany()
    {
        return $this->company;
    }
  
    /**
     * Sets company
     * @param string $company 
     * @return $this
     */
    public function setCompany($company)
    {
        
        $this->company = $company;
        return $this;
    }
    
    /**
     * Gets street1
     * @return string
     */
    public function getStreet1()
    {
        return $this->street1;
    }
  
    /**
     * Sets street1
     * @param string $street1 
     * @return $this
     */
    public function setStreet1($street1)
    {
        
        $this->street1 = $street1;
        return $this;
    }
    
    /**
     * Gets street2
     * @return string
     */
    public function getStreet2()
    {
        return $this->street2;
    }
  
    /**
     * Sets street2
     * @param string $street2 
     * @return $this
     */
    public function setStreet2($street2)
    {
        
        $this->street2 = $street2;
        return $this;
    }
    
    /**
     * Gets street3
     * @return string
     */
    public function getStreet3()
    {
        return $this->street3;
    }
  
    /**
     * Sets street3
     * @param string $street3 
     * @return $this
     */
    public function setStreet3($street3)
    {
        
        $this->street3 = $street3;
        return $this;
    }
    
    /**
     * Gets city
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }
  
    /**
     * Sets city
     * @param string $city 
     * @return $this
     */
    public function setCity($city)
    {
        
        $this->city = $city;
        return $this;
    }
    
    /**
     * Gets state
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
  
    /**
     * Sets state
     * @param string $state 
     * @return $this
     */
    public function setState($state)
    {
        
        $this->state = $state;
        return $this;
    }
    
    /**
     * Gets zip
     * @return string
     */
    public function getZip()
    {
        return $this->zip;
    }
  
    /**
     * Sets zip
     * @param string $zip 
     * @return $this
     */
    public function setZip($zip)
    {
        
        $this->zip = $zip;
        return $this;
    }
    
    /**
     * Gets country
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
  
    /**
     * Sets country
     * @param string $country 
     * @return $this
     */
    public function setCountry($country)
    {
        
        $this->country = $country;
        return $this;
    }
    
    /**
     * Gets phone
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }
  
    /**
     * Sets phone
     * @param string $phone 
     * @return $this
     */
    public function setPhone($phone)
    {
        
        $this->phone = $phone;
        return $this;
    }
    
    /**
     * Gets location_barcode_prefix
     * @return string
     */
    public function getLocationBarcodePrefix()
    {
        return $this->location_barcode_prefix;
    }
  
    /**
     * Sets location_barcode_prefix
     * @param string $location_barcode_prefix 
     * @return $this
     */
    public function setLocationBarcodePrefix($location_barcode_prefix)
    {
        
        $this->location_barcode_prefix = $location_barcode_prefix;
        return $this;
    }
    
    /**
     * Gets lpn_prefix
     * @return string
     */
    public function getLpnPrefix()
    {
        return $this->lpn_prefix;
    }
  
    /**
     * Sets lpn_prefix
     * @param string $lpn_prefix 
     * @return $this
     */
    public function setLpnPrefix($lpn_prefix)
    {
        
        $this->lpn_prefix = $lpn_prefix;
        return $this;
    }
    
    /**
     * Gets create_date
     * @return \DateTime
     */
    public function getCreateDate()
    {
        return $this->create_date;
    }
  
    /**
     * Sets create_date
     * @param \DateTime $create_date 
     * @return $this
     */
    public function setCreateDate($create_date)
    {
        
        $this->create_date = $create_date;
        return $this;
    }
    
    /**
     * Gets modify_date
     * @return \DateTime
     */
    public function getModifyDate()
    {
        return $this->modify_date;
    }
  
    /**
     * Sets modify_date
     * @param \DateTime $modify_date 
     * @return $this
     */
    public function setModifyDate($modify_date)
    {
        
        $this->modify_date = $modify_date;
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
