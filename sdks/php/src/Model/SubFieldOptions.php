<?php
/**
 * SubFieldOptions
 *
 * PHP version 7.3
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */

/**
 * Dropbox Sign API
 *
 * Dropbox Sign v3 API
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: apisupport@hellosign.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HelloSign\Model;

use ArrayAccess;
use HelloSign\ObjectSerializer;
use InvalidArgumentException;
use JsonSerializable;

/**
 * SubFieldOptions Class Doc Comment
 *
 * @category Class
 * @description This allows the requester to specify field options for a signature request.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubFieldOptions implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'SubFieldOptions';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'date_format' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'date_format' => null,
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'date_format' => 'date_format',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'date_format' => 'setDateFormat',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'date_format' => 'getDateFormat',
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

    public const DATE_FORMAT_MMDDYYYY = 'MM / DD / YYYY';
    public const DATE_FORMAT_MM_DD_YYYY = 'MM - DD - YYYY';
    public const DATE_FORMAT_DDMMYYYY = 'DD / MM / YYYY';
    public const DATE_FORMAT_DD_MM_YYYY = 'DD - MM - YYYY';
    public const DATE_FORMAT_YYYYMMDD = 'YYYY / MM / DD';
    public const DATE_FORMAT_YYYY_MM_DD = 'YYYY - MM - DD';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDateFormatAllowableValues()
    {
        return [
            self::DATE_FORMAT_MMDDYYYY,
            self::DATE_FORMAT_MM_DD_YYYY,
            self::DATE_FORMAT_DDMMYYYY,
            self::DATE_FORMAT_DD_MM_YYYY,
            self::DATE_FORMAT_YYYYMMDD,
            self::DATE_FORMAT_YYYY_MM_DD,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var array
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param array|null $data Associated array of property values
     *                         initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['date_format'] = $data['date_format'] ?? null;
    }

    public static function fromArray(array $data): SubFieldOptions
    {
        /** @var SubFieldOptions $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            SubFieldOptions::class,
        );

        return $obj;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['date_format'] === null) {
            $invalidProperties[] = "'date_format' can't be null";
        }
        $allowedValues = $this->getDateFormatAllowableValues();
        if (!is_null($this->container['date_format']) && !in_array($this->container['date_format'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'date_format', must be one of '%s'",
                $this->container['date_format'],
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
     * Gets date_format
     *
     * @return string
     */
    public function getDateFormat()
    {
        return $this->container['date_format'];
    }

    /**
     * Sets date_format
     *
     * @param string $date_format allows requester to specify the date format (see list of allowed [formats](/api/reference/constants/#date-formats))  **Note**: Only available for Premium and higher
     *
     * @return self
     */
    public function setDateFormat(string $date_format)
    {
        $allowedValues = $this->getDateFormatAllowableValues();
        if (!in_array($date_format, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'date_format', must be one of '%s'",
                    $date_format,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['date_format'] = $date_format;

        return $this;
    }

    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param mixed $offset Offset
     *
     * @return bool
     */
    #[\ReturnTypeWillChange]
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param mixed $offset Offset
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
     * @param mixed $offset Offset
     * @param mixed $value Value to be set
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
     * @param mixed $offset Offset
     *
     * @return void
     */
    #[\ReturnTypeWillChange]
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @see https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return scalar|object|array|null returns data which can be serialized by json_encode(), which is a value
     *                                  of any type other than a resource
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
            JSON_UNESCAPED_SLASHES
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
