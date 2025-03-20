<?php
/**
 * HqAddressData
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * OpenAPI definition
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.6.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * HqAddressData Class Doc Comment
 *
 * @category Class
 * @description Headquarters address information. This is optional but if sent has to have the minimum values
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class HqAddressData implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'HqAddressData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'country' => 'string',
        'state' => 'string',
        'city' => 'string',
        'zip' => 'string',
        'firstAddressLine' => 'string',
        'nrInBuilding' => 'string',
        'mailRoute' => 'string',
        'additionalInfo1' => 'string',
        'additionalInfo2' => 'string',
        'additionalInfo3' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'country' => null,
        'state' => null,
        'city' => null,
        'zip' => null,
        'firstAddressLine' => null,
        'nrInBuilding' => null,
        'mailRoute' => null,
        'additionalInfo1' => null,
        'additionalInfo2' => null,
        'additionalInfo3' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'country' => false,
		'state' => false,
		'city' => false,
		'zip' => false,
		'firstAddressLine' => false,
		'nrInBuilding' => false,
		'mailRoute' => false,
		'additionalInfo1' => false,
		'additionalInfo2' => false,
		'additionalInfo3' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'country' => 'country',
        'state' => 'state',
        'city' => 'city',
        'zip' => 'zip',
        'firstAddressLine' => 'first_address_line',
        'nrInBuilding' => 'nrInBuilding',
        'mailRoute' => 'mailRoute',
        'additionalInfo1' => 'additionalInfo1',
        'additionalInfo2' => 'additionalInfo2',
        'additionalInfo3' => 'additionalInfo3'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'country' => 'setCountry',
        'state' => 'setState',
        'city' => 'setCity',
        'zip' => 'setZip',
        'firstAddressLine' => 'setFirstAddressLine',
        'nrInBuilding' => 'setNrInBuilding',
        'mailRoute' => 'setMailRoute',
        'additionalInfo1' => 'setAdditionalInfo1',
        'additionalInfo2' => 'setAdditionalInfo2',
        'additionalInfo3' => 'setAdditionalInfo3'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'country' => 'getCountry',
        'state' => 'getState',
        'city' => 'getCity',
        'zip' => 'getZip',
        'firstAddressLine' => 'getFirstAddressLine',
        'nrInBuilding' => 'getNrInBuilding',
        'mailRoute' => 'getMailRoute',
        'additionalInfo1' => 'getAdditionalInfo1',
        'additionalInfo2' => 'getAdditionalInfo2',
        'additionalInfo3' => 'getAdditionalInfo3'
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
        return self::$openAPIModelName;
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
        $this->setIfExists('country', $data ?? [], null);
        $this->setIfExists('state', $data ?? [], null);
        $this->setIfExists('city', $data ?? [], null);
        $this->setIfExists('zip', $data ?? [], null);
        $this->setIfExists('firstAddressLine', $data ?? [], null);
        $this->setIfExists('nrInBuilding', $data ?? [], null);
        $this->setIfExists('mailRoute', $data ?? [], null);
        $this->setIfExists('additionalInfo1', $data ?? [], null);
        $this->setIfExists('additionalInfo2', $data ?? [], null);
        $this->setIfExists('additionalInfo3', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['country']) && !preg_match("/^[A-Z]{2}$/", $this->container['country'])) {
            $invalidProperties[] = "invalid value for 'country', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if (!is_null($this->container['state']) && !preg_match("/^([A-Z]{2}(-[A-Z0-9]{1,3})?|(?!.*\\S))$/", $this->container['state'])) {
            $invalidProperties[] = "invalid value for 'state', must be conform to the pattern /^([A-Z]{2}(-[A-Z0-9]{1,3})?|(?!.*\\S))$/.";
        }

        if (!is_null($this->container['nrInBuilding']) && !preg_match("/^(.*[0-9].*)?$/", $this->container['nrInBuilding'])) {
            $invalidProperties[] = "invalid value for 'nrInBuilding', must be conform to the pattern /^(.*[0-9].*)?$/.";
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
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country Country of legal company address || ISO 3166
     *
     * @return self
     */
    public function setCountry($country)
    {
        if (is_null($country)) {
            throw new \InvalidArgumentException('non-nullable country cannot be null');
        }

        if ((!preg_match("/^[A-Z]{2}$/", $country))) {
            throw new \InvalidArgumentException("invalid value for \$country when calling HqAddressData., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string|null
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string|null $state State of the legal company address || ISO 3166
     *
     * @return self
     */
    public function setState($state)
    {
        if (is_null($state)) {
            throw new \InvalidArgumentException('non-nullable state cannot be null');
        }

        if ((!preg_match("/^([A-Z]{2}(-[A-Z0-9]{1,3})?|(?!.*\\S))$/", $state))) {
            throw new \InvalidArgumentException("invalid value for \$state when calling HqAddressData., must conform to the pattern /^([A-Z]{2}(-[A-Z0-9]{1,3})?|(?!.*\\S))$/.");
        }

        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string|null
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string|null $city City of legal company address
     *
     * @return self
     */
    public function setCity($city)
    {
        if (is_null($city)) {
            throw new \InvalidArgumentException('non-nullable city cannot be null');
        }
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets zip
     *
     * @return string|null
     */
    public function getZip()
    {
        return $this->container['zip'];
    }

    /**
     * Sets zip
     *
     * @param string|null $zip Zip code of the legal company address
     *
     * @return self
     */
    public function setZip($zip)
    {
        if (is_null($zip)) {
            throw new \InvalidArgumentException('non-nullable zip cannot be null');
        }
        $this->container['zip'] = $zip;

        return $this;
    }

    /**
     * Gets firstAddressLine
     *
     * @return string|null
     */
    public function getFirstAddressLine()
    {
        return $this->container['firstAddressLine'];
    }

    /**
     * Sets firstAddressLine
     *
     * @param string|null $firstAddressLine Street and street number of legal company address
     *
     * @return self
     */
    public function setFirstAddressLine($firstAddressLine)
    {
        if (is_null($firstAddressLine)) {
            throw new \InvalidArgumentException('non-nullable firstAddressLine cannot be null');
        }
        $this->container['firstAddressLine'] = $firstAddressLine;

        return $this;
    }

    /**
     * Gets nrInBuilding
     *
     * @return string|null
     */
    public function getNrInBuilding()
    {
        return $this->container['nrInBuilding'];
    }

    /**
     * Sets nrInBuilding
     *
     * @param string|null $nrInBuilding Number within the building of the legal company address || Can be NULL
     *
     * @return self
     */
    public function setNrInBuilding($nrInBuilding)
    {
        if (is_null($nrInBuilding)) {
            throw new \InvalidArgumentException('non-nullable nrInBuilding cannot be null');
        }

        if ((!preg_match("/^(.*[0-9].*)?$/", $nrInBuilding))) {
            throw new \InvalidArgumentException("invalid value for \$nrInBuilding when calling HqAddressData., must conform to the pattern /^(.*[0-9].*)?$/.");
        }

        $this->container['nrInBuilding'] = $nrInBuilding;

        return $this;
    }

    /**
     * Gets mailRoute
     *
     * @return string|null
     */
    public function getMailRoute()
    {
        return $this->container['mailRoute'];
    }

    /**
     * Sets mailRoute
     *
     * @param string|null $mailRoute Mail routing of the legal company address || Can be NULL
     *
     * @return self
     */
    public function setMailRoute($mailRoute)
    {
        if (is_null($mailRoute)) {
            throw new \InvalidArgumentException('non-nullable mailRoute cannot be null');
        }
        $this->container['mailRoute'] = $mailRoute;

        return $this;
    }

    /**
     * Gets additionalInfo1
     *
     * @return string|null
     */
    public function getAdditionalInfo1()
    {
        return $this->container['additionalInfo1'];
    }

    /**
     * Sets additionalInfo1
     *
     * @param string|null $additionalInfo1 More information on the address of the legal company address || Can be NULL
     *
     * @return self
     */
    public function setAdditionalInfo1($additionalInfo1)
    {
        if (is_null($additionalInfo1)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo1 cannot be null');
        }
        $this->container['additionalInfo1'] = $additionalInfo1;

        return $this;
    }

    /**
     * Gets additionalInfo2
     *
     * @return string|null
     */
    public function getAdditionalInfo2()
    {
        return $this->container['additionalInfo2'];
    }

    /**
     * Sets additionalInfo2
     *
     * @param string|null $additionalInfo2 More information on the address of the legal company address || Can be NULL
     *
     * @return self
     */
    public function setAdditionalInfo2($additionalInfo2)
    {
        if (is_null($additionalInfo2)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo2 cannot be null');
        }
        $this->container['additionalInfo2'] = $additionalInfo2;

        return $this;
    }

    /**
     * Gets additionalInfo3
     *
     * @return string|null
     */
    public function getAdditionalInfo3()
    {
        return $this->container['additionalInfo3'];
    }

    /**
     * Sets additionalInfo3
     *
     * @param string|null $additionalInfo3 More information on the address of the legal company address || Can be NULL
     *
     * @return self
     */
    public function setAdditionalInfo3($additionalInfo3)
    {
        if (is_null($additionalInfo3)) {
            throw new \InvalidArgumentException('non-nullable additionalInfo3 cannot be null');
        }
        $this->container['additionalInfo3'] = $additionalInfo3;

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
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
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
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


