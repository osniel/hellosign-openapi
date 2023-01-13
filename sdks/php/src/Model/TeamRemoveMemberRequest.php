<?php
/**
 * TeamRemoveMemberRequest
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
 * TeamRemoveMemberRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TeamRemoveMemberRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TeamRemoveMemberRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'account_id' => 'string',
        'email_address' => 'string',
        'new_owner_email_address' => 'string',
        'new_team_id' => 'string',
        'new_role' => 'string',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'account_id' => null,
        'email_address' => 'email',
        'new_owner_email_address' => 'email',
        'new_team_id' => null,
        'new_role' => null,
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
        'account_id' => 'account_id',
        'email_address' => 'email_address',
        'new_owner_email_address' => 'new_owner_email_address',
        'new_team_id' => 'new_team_id',
        'new_role' => 'new_role',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'account_id' => 'setAccountId',
        'email_address' => 'setEmailAddress',
        'new_owner_email_address' => 'setNewOwnerEmailAddress',
        'new_team_id' => 'setNewTeamId',
        'new_role' => 'setNewRole',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'account_id' => 'getAccountId',
        'email_address' => 'getEmailAddress',
        'new_owner_email_address' => 'getNewOwnerEmailAddress',
        'new_team_id' => 'getNewTeamId',
        'new_role' => 'getNewRole',
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

    public const NEW_ROLE_MEMBER = 'Member';
    public const NEW_ROLE_DEVELOPER = 'Developer';
    public const NEW_ROLE_TEAM_MANAGER = 'Team Manager';
    public const NEW_ROLE_ADMIN = 'Admin';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNewRoleAllowableValues()
    {
        return [
            self::NEW_ROLE_MEMBER,
            self::NEW_ROLE_DEVELOPER,
            self::NEW_ROLE_TEAM_MANAGER,
            self::NEW_ROLE_ADMIN,
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
        $this->container['account_id'] = $data['account_id'] ?? null;
        $this->container['email_address'] = $data['email_address'] ?? null;
        $this->container['new_owner_email_address'] = $data['new_owner_email_address'] ?? null;
        $this->container['new_team_id'] = $data['new_team_id'] ?? null;
        $this->container['new_role'] = $data['new_role'] ?? null;
    }

    public static function fromArray(array $data): TeamRemoveMemberRequest
    {
        /** @var TeamRemoveMemberRequest $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            TeamRemoveMemberRequest::class,
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

        $allowedValues = $this->getNewRoleAllowableValues();
        if (!is_null($this->container['new_role']) && !in_array($this->container['new_role'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'new_role', must be one of '%s'",
                $this->container['new_role'],
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
     * Gets account_id
     *
     * @return string|null
     */
    public function getAccountId()
    {
        return $this->container['account_id'];
    }

    /**
     * Sets account_id
     *
     * @param string|null $account_id **account_id** or **email_address** is required. If both are provided, the account id prevails.  Account id to remove from your Team.
     *
     * @return self
     */
    public function setAccountId(?string $account_id)
    {
        $this->container['account_id'] = $account_id;

        return $this;
    }

    /**
     * Gets email_address
     *
     * @return string|null
     */
    public function getEmailAddress()
    {
        return $this->container['email_address'];
    }

    /**
     * Sets email_address
     *
     * @param string|null $email_address **account_id** or **email_address** is required. If both are provided, the account id prevails.  Email address of the Account to remove from your Team.
     *
     * @return self
     */
    public function setEmailAddress(?string $email_address)
    {
        $this->container['email_address'] = $email_address;

        return $this;
    }

    /**
     * Gets new_owner_email_address
     *
     * @return string|null
     */
    public function getNewOwnerEmailAddress()
    {
        return $this->container['new_owner_email_address'];
    }

    /**
     * Sets new_owner_email_address
     *
     * @param string|null $new_owner_email_address The email address of an Account on this Team to receive all documents, templates, and API apps (if applicable) from the removed Account. If not provided, and on an Enterprise plan, this data will remain with the removed Account.  **Note**: Only available for Enterprise plans.
     *
     * @return self
     */
    public function setNewOwnerEmailAddress(?string $new_owner_email_address)
    {
        $this->container['new_owner_email_address'] = $new_owner_email_address;

        return $this;
    }

    /**
     * Gets new_team_id
     *
     * @return string|null
     */
    public function getNewTeamId()
    {
        return $this->container['new_team_id'];
    }

    /**
     * Sets new_team_id
     *
     * @param string|null $new_team_id id of the new Team
     *
     * @return self
     */
    public function setNewTeamId(?string $new_team_id)
    {
        $this->container['new_team_id'] = $new_team_id;

        return $this;
    }

    /**
     * Gets new_role
     *
     * @return string|null
     */
    public function getNewRole()
    {
        return $this->container['new_role'];
    }

    /**
     * Sets new_role
     *
     * @param string|null $new_role A new role member will take in a new Team.  **Note**: This parameter is used only if `new_team_id` is provided.
     *
     * @return self
     */
    public function setNewRole(?string $new_role)
    {
        $allowedValues = $this->getNewRoleAllowableValues();
        if (!is_null($new_role) && !in_array($new_role, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'new_role', must be one of '%s'",
                    $new_role,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['new_role'] = $new_role;

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
