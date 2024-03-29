<?php
/**
 * User
 *
 * PHP version 5
 *
 * @category Class
 * @package  VATSIM\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * VATSIM API
 *
 * API for VATSIM. This API only accepts and returns application/json - e-mail api@vatsim.net for troubleshooting
 *
 * OpenAPI spec version: v1
 * Contact: api@vatsim.net
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.16
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace VATSIM\Client\Model;

use \ArrayAccess;
use \VATSIM\Client\ObjectSerializer;

/**
 * User Class Doc Comment
 *
 * @category Class
 * @package  VATSIM\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class User implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'User';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'rating' => 'int',
        'pilotrating' => 'int',
        'nameFirst' => 'string',
        'nameLast' => 'string',
        'age' => 'int',
        'countystate' => 'string',
        'country' => 'string',
        'suspDate' => '\DateTime',
        'regDate' => '\DateTime',
        'region' => 'string',
        'division' => 'string',
        'subdivision' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'rating' => null,
        'pilotrating' => null,
        'nameFirst' => null,
        'nameLast' => null,
        'age' => null,
        'countystate' => null,
        'country' => null,
        'suspDate' => 'date-time',
        'regDate' => 'date-time',
        'region' => null,
        'division' => null,
        'subdivision' => null
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
        'rating' => 'rating',
        'pilotrating' => 'pilotrating',
        'nameFirst' => 'name_first',
        'nameLast' => 'name_last',
        'age' => 'age',
        'countystate' => 'countystate',
        'country' => 'country',
        'suspDate' => 'susp_date',
        'regDate' => 'reg_date',
        'region' => 'region',
        'division' => 'division',
        'subdivision' => 'subdivision'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'rating' => 'setRating',
        'pilotrating' => 'setPilotrating',
        'nameFirst' => 'setNameFirst',
        'nameLast' => 'setNameLast',
        'age' => 'setAge',
        'countystate' => 'setCountystate',
        'country' => 'setCountry',
        'suspDate' => 'setSuspDate',
        'regDate' => 'setRegDate',
        'region' => 'setRegion',
        'division' => 'setDivision',
        'subdivision' => 'setSubdivision'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'rating' => 'getRating',
        'pilotrating' => 'getPilotrating',
        'nameFirst' => 'getNameFirst',
        'nameLast' => 'getNameLast',
        'age' => 'getAge',
        'countystate' => 'getCountystate',
        'country' => 'getCountry',
        'suspDate' => 'getSuspDate',
        'regDate' => 'getRegDate',
        'region' => 'getRegion',
        'division' => 'getDivision',
        'subdivision' => 'getSubdivision'
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
        $this->container['rating'] = isset($data['rating']) ? $data['rating'] : null;
        $this->container['pilotrating'] = isset($data['pilotrating']) ? $data['pilotrating'] : null;
        $this->container['nameFirst'] = isset($data['nameFirst']) ? $data['nameFirst'] : null;
        $this->container['nameLast'] = isset($data['nameLast']) ? $data['nameLast'] : null;
        $this->container['age'] = isset($data['age']) ? $data['age'] : null;
        $this->container['countystate'] = isset($data['countystate']) ? $data['countystate'] : null;
        $this->container['country'] = isset($data['country']) ? $data['country'] : null;
        $this->container['suspDate'] = isset($data['suspDate']) ? $data['suspDate'] : null;
        $this->container['regDate'] = isset($data['regDate']) ? $data['regDate'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['division'] = isset($data['division']) ? $data['division'] : null;
        $this->container['subdivision'] = isset($data['subdivision']) ? $data['subdivision'] : null;
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
        if ((mb_strlen($this->container['id']) > 8)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 8.";
        }

        if ((mb_strlen($this->container['id']) < 1)) {
            $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['rating'] === null) {
            $invalidProperties[] = "'rating' can't be null";
        }
        if ($this->container['nameFirst'] === null) {
            $invalidProperties[] = "'nameFirst' can't be null";
        }
        if ((mb_strlen($this->container['nameFirst']) > 64)) {
            $invalidProperties[] = "invalid value for 'nameFirst', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['nameFirst']) < 1)) {
            $invalidProperties[] = "invalid value for 'nameFirst', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['nameLast'] === null) {
            $invalidProperties[] = "'nameLast' can't be null";
        }
        if ((mb_strlen($this->container['nameLast']) > 64)) {
            $invalidProperties[] = "invalid value for 'nameLast', the character length must be smaller than or equal to 64.";
        }

        if ((mb_strlen($this->container['nameLast']) < 1)) {
            $invalidProperties[] = "invalid value for 'nameLast', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['age'] === null) {
            $invalidProperties[] = "'age' can't be null";
        }
        if (($this->container['age'] > 2147483647)) {
            $invalidProperties[] = "invalid value for 'age', must be smaller than or equal to 2147483647.";
        }

        if (($this->container['age'] < -2147483648)) {
            $invalidProperties[] = "invalid value for 'age', must be bigger than or equal to -2147483648.";
        }

        if ($this->container['countystate'] === null) {
            $invalidProperties[] = "'countystate' can't be null";
        }
        if ((mb_strlen($this->container['countystate']) > 100)) {
            $invalidProperties[] = "invalid value for 'countystate', the character length must be smaller than or equal to 100.";
        }

        if ((mb_strlen($this->container['countystate']) < 0)) {
            $invalidProperties[] = "invalid value for 'countystate', the character length must be bigger than or equal to 0.";
        }

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 4)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 4.";
        }

        if ((mb_strlen($this->container['country']) < 1)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['regDate'] === null) {
            $invalidProperties[] = "'regDate' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['division'] === null) {
            $invalidProperties[] = "'division' can't be null";
        }
        if (!is_null($this->container['subdivision']) && (mb_strlen($this->container['subdivision']) > 6)) {
            $invalidProperties[] = "invalid value for 'subdivision', the character length must be smaller than or equal to 6.";
        }

        if (!is_null($this->container['subdivision']) && (mb_strlen($this->container['subdivision']) < 0)) {
            $invalidProperties[] = "invalid value for 'subdivision', the character length must be bigger than or equal to 0.";
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
        if ((mb_strlen($id) > 8)) {
            throw new \InvalidArgumentException('invalid length for $id when calling User., must be smaller than or equal to 8.');
        }
        if ((mb_strlen($id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $id when calling User., must be bigger than or equal to 1.');
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->container['rating'];
    }

    /**
     * Sets rating
     *
     * @param int $rating rating
     *
     * @return $this
     */
    public function setRating($rating)
    {
        $this->container['rating'] = $rating;

        return $this;
    }

    /**
     * Gets pilotrating
     *
     * @return int
     */
    public function getPilotrating()
    {
        return $this->container['pilotrating'];
    }

    /**
     * Sets pilotrating
     *
     * @param int $pilotrating pilotrating
     *
     * @return $this
     */
    public function setPilotrating($pilotrating)
    {
        $this->container['pilotrating'] = $pilotrating;

        return $this;
    }

    /**
     * Gets nameFirst
     *
     * @return string
     */
    public function getNameFirst()
    {
        return $this->container['nameFirst'];
    }

    /**
     * Sets nameFirst
     *
     * @param string $nameFirst nameFirst
     *
     * @return $this
     */
    public function setNameFirst($nameFirst)
    {
        if ((mb_strlen($nameFirst) > 64)) {
            throw new \InvalidArgumentException('invalid length for $nameFirst when calling User., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($nameFirst) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nameFirst when calling User., must be bigger than or equal to 1.');
        }

        $this->container['nameFirst'] = $nameFirst;

        return $this;
    }

    /**
     * Gets nameLast
     *
     * @return string
     */
    public function getNameLast()
    {
        return $this->container['nameLast'];
    }

    /**
     * Sets nameLast
     *
     * @param string $nameLast nameLast
     *
     * @return $this
     */
    public function setNameLast($nameLast)
    {
        if ((mb_strlen($nameLast) > 64)) {
            throw new \InvalidArgumentException('invalid length for $nameLast when calling User., must be smaller than or equal to 64.');
        }
        if ((mb_strlen($nameLast) < 1)) {
            throw new \InvalidArgumentException('invalid length for $nameLast when calling User., must be bigger than or equal to 1.');
        }

        $this->container['nameLast'] = $nameLast;

        return $this;
    }

    /**
     * Gets age
     *
     * @return int
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param int $age age
     *
     * @return $this
     */
    public function setAge($age)
    {

        if (($age > 2147483647)) {
            throw new \InvalidArgumentException('invalid value for $age when calling User., must be smaller than or equal to 2147483647.');
        }
        if (($age < -2147483648)) {
            throw new \InvalidArgumentException('invalid value for $age when calling User., must be bigger than or equal to -2147483648.');
        }

        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets countystate
     *
     * @return string
     */
    public function getCountystate()
    {
        return $this->container['countystate'];
    }

    /**
     * Sets countystate
     *
     * @param string $countystate countystate
     *
     * @return $this
     */
    public function setCountystate($countystate)
    {
        if ((mb_strlen($countystate) > 100)) {
            throw new \InvalidArgumentException('invalid length for $countystate when calling User., must be smaller than or equal to 100.');
        }
        if ((mb_strlen($countystate) < 0)) {
            throw new \InvalidArgumentException('invalid length for $countystate when calling User., must be bigger than or equal to 0.');
        }

        $this->container['countystate'] = $countystate;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return $this
     */
    public function setCountry($country)
    {
        if ((mb_strlen($country) > 4)) {
            throw new \InvalidArgumentException('invalid length for $country when calling User., must be smaller than or equal to 4.');
        }
        if ((mb_strlen($country) < 1)) {
            throw new \InvalidArgumentException('invalid length for $country when calling User., must be bigger than or equal to 1.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets suspDate
     *
     * @return \DateTime
     */
    public function getSuspDate()
    {
        return $this->container['suspDate'];
    }

    /**
     * Sets suspDate
     *
     * @param \DateTime $suspDate suspDate
     *
     * @return $this
     */
    public function setSuspDate($suspDate)
    {
        $this->container['suspDate'] = $suspDate;

        return $this;
    }

    /**
     * Gets regDate
     *
     * @return \DateTime
     */
    public function getRegDate()
    {
        return $this->container['regDate'];
    }

    /**
     * Sets regDate
     *
     * @param \DateTime $regDate regDate
     *
     * @return $this
     */
    public function setRegDate($regDate)
    {
        $this->container['regDate'] = $regDate;

        return $this;
    }

    /**
     * Gets region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
     * Sets region
     *
     * @param string $region region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->container['region'] = $region;

        return $this;
    }

    /**
     * Gets division
     *
     * @return string
     */
    public function getDivision()
    {
        return $this->container['division'];
    }

    /**
     * Sets division
     *
     * @param string $division division
     *
     * @return $this
     */
    public function setDivision($division)
    {
        $this->container['division'] = $division;

        return $this;
    }

    /**
     * Gets subdivision
     *
     * @return string
     */
    public function getSubdivision()
    {
        return $this->container['subdivision'];
    }

    /**
     * Sets subdivision
     *
     * @param string $subdivision subdivision
     *
     * @return $this
     */
    public function setSubdivision($subdivision)
    {
        if (!is_null($subdivision) && (mb_strlen($subdivision) > 6)) {
            throw new \InvalidArgumentException('invalid length for $subdivision when calling User., must be smaller than or equal to 6.');
        }
        if (!is_null($subdivision) && (mb_strlen($subdivision) < 0)) {
            throw new \InvalidArgumentException('invalid length for $subdivision when calling User., must be bigger than or equal to 0.');
        }

        $this->container['subdivision'] = $subdivision;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    public function offsetGet($offset): mixed
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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


