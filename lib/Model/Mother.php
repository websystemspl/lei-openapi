<?php
/**
 * Mother
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
 * Mother Class Doc Comment
 *
 * @category Class
 * @description If no LEI is given for a mother, or this is generally not available, an exception must be selected and the LEI field can be NULL.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Mother implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Mother';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'exception_key' => 'string',
        'exception_reference' => 'string',
        'lei' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'exception_key' => null,
        'exception_reference' => null,
        'lei' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'exception_key' => false,
		'exception_reference' => false,
		'lei' => false
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
        'exception_key' => 'exceptionKey',
        'exception_reference' => 'exceptionReference',
        'lei' => 'lei'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'exception_key' => 'setExceptionKey',
        'exception_reference' => 'setExceptionReference',
        'lei' => 'setLei'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'exception_key' => 'getExceptionKey',
        'exception_reference' => 'getExceptionReference',
        'lei' => 'getLei'
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

    public const EXCEPTION_KEY_NO_LEI = 'ExceptionKey.NO_LEI';
    public const EXCEPTION_KEY_NON_CONSOLIDATING = 'ExceptionKey.NON_CONSOLIDATING';
    public const EXCEPTION_KEY_NATURAL_PERSONS = 'ExceptionKey.NATURAL_PERSONS';
    public const EXCEPTION_KEY_NO_KNOWN_PERSON = 'ExceptionKey.NO_KNOWN_PERSON';
    public const EXCEPTION_KEY_NON_PUBLIC = 'ExceptionKey.NON_PUBLIC';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getExceptionKeyAllowableValues()
    {
        return [
            self::EXCEPTION_KEY_NO_LEI,
            self::EXCEPTION_KEY_NON_CONSOLIDATING,
            self::EXCEPTION_KEY_NATURAL_PERSONS,
            self::EXCEPTION_KEY_NO_KNOWN_PERSON,
            self::EXCEPTION_KEY_NON_PUBLIC,
        ];
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
        $this->setIfExists('exception_key', $data ?? [], null);
        $this->setIfExists('exception_reference', $data ?? [], null);
        $this->setIfExists('lei', $data ?? [], null);
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

        $allowedValues = $this->getExceptionKeyAllowableValues();
        if (!is_null($this->container['exception_key']) && !in_array($this->container['exception_key'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'exception_key', must be one of '%s'",
                $this->container['exception_key'],
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
     * Gets exception_key
     *
     * @return string|null
     */
    public function getExceptionKey()
    {
        return $this->container['exception_key'];
    }

    /**
     * Sets exception_key
     *
     * @param string|null $exception_key Exception to not naming the parent company || NULL if rr_lei SET || Options: 'NO_LEI', 'NO_KNOWN_PERSON', 'NON_PUBLIC', 'NATURAL_PERSON
     *
     * @return self
     */
    public function setExceptionKey($exception_key)
    {
        if (is_null($exception_key)) {
            throw new \InvalidArgumentException('non-nullable exception_key cannot be null');
        }
        $allowedValues = $this->getExceptionKeyAllowableValues();
        if (!in_array($exception_key, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'exception_key', must be one of '%s'",
                    $exception_key,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['exception_key'] = $exception_key;

        return $this;
    }

    /**
     * Gets exception_reference
     *
     * @return string|null
     */
    public function getExceptionReference()
    {
        return $this->container['exception_reference'];
    }

    /**
     * Sets exception_reference
     *
     * @param string|null $exception_reference A reference to the exception to not naming the parent company || Can be NULL
     *
     * @return self
     */
    public function setExceptionReference($exception_reference)
    {
        if (is_null($exception_reference)) {
            throw new \InvalidArgumentException('non-nullable exception_reference cannot be null');
        }
        $this->container['exception_reference'] = $exception_reference;

        return $this;
    }

    /**
     * Gets lei
     *
     * @return string|null
     */
    public function getLei()
    {
        return $this->container['lei'];
    }

    /**
     * Sets lei
     *
     * @param string|null $lei LEI of the parent company || Can be NULL if rr_exception_key set
     *
     * @return self
     */
    public function setLei($lei)
    {
        if (is_null($lei)) {
            throw new \InvalidArgumentException('non-nullable lei cannot be null');
        }
        $this->container['lei'] = $lei;

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


