<?php
/**
 * UnclaimedDraftEditAndResendRequest
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

namespace Dropbox\Sign\Model;

use ArrayAccess;
use Dropbox\Sign\ObjectSerializer;
use JsonSerializable;

/**
 * UnclaimedDraftEditAndResendRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UnclaimedDraftEditAndResendRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UnclaimedDraftEditAndResendRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'client_id' => 'string',
        'editor_options' => '\Dropbox\Sign\Model\SubEditorOptions',
        'is_for_embedded_signing' => 'bool',
        'requester_email_address' => 'string',
        'requesting_redirect_url' => 'string',
        'show_progress_stepper' => 'bool',
        'signing_redirect_url' => 'string',
        'test_mode' => 'bool',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'client_id' => null,
        'editor_options' => null,
        'is_for_embedded_signing' => null,
        'requester_email_address' => 'email',
        'requesting_redirect_url' => null,
        'show_progress_stepper' => null,
        'signing_redirect_url' => null,
        'test_mode' => null,
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
        'client_id' => 'client_id',
        'editor_options' => 'editor_options',
        'is_for_embedded_signing' => 'is_for_embedded_signing',
        'requester_email_address' => 'requester_email_address',
        'requesting_redirect_url' => 'requesting_redirect_url',
        'show_progress_stepper' => 'show_progress_stepper',
        'signing_redirect_url' => 'signing_redirect_url',
        'test_mode' => 'test_mode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'client_id' => 'setClientId',
        'editor_options' => 'setEditorOptions',
        'is_for_embedded_signing' => 'setIsForEmbeddedSigning',
        'requester_email_address' => 'setRequesterEmailAddress',
        'requesting_redirect_url' => 'setRequestingRedirectUrl',
        'show_progress_stepper' => 'setShowProgressStepper',
        'signing_redirect_url' => 'setSigningRedirectUrl',
        'test_mode' => 'setTestMode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'client_id' => 'getClientId',
        'editor_options' => 'getEditorOptions',
        'is_for_embedded_signing' => 'getIsForEmbeddedSigning',
        'requester_email_address' => 'getRequesterEmailAddress',
        'requesting_redirect_url' => 'getRequestingRedirectUrl',
        'show_progress_stepper' => 'getShowProgressStepper',
        'signing_redirect_url' => 'getSigningRedirectUrl',
        'test_mode' => 'getTestMode',
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
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['editor_options'] = $data['editor_options'] ?? null;
        $this->container['is_for_embedded_signing'] = $data['is_for_embedded_signing'] ?? null;
        $this->container['requester_email_address'] = $data['requester_email_address'] ?? null;
        $this->container['requesting_redirect_url'] = $data['requesting_redirect_url'] ?? null;
        $this->container['show_progress_stepper'] = $data['show_progress_stepper'] ?? true;
        $this->container['signing_redirect_url'] = $data['signing_redirect_url'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? false;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): UnclaimedDraftEditAndResendRequest
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): UnclaimedDraftEditAndResendRequest
    {
        /** @var UnclaimedDraftEditAndResendRequest $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            UnclaimedDraftEditAndResendRequest::class,
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

        if ($this->container['client_id'] === null) {
            $invalidProperties[] = "'client_id' can't be null";
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
     * Gets client_id
     *
     * @return string
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string $client_id Client id of the app used to create the draft. Used to apply the branding and callback url defined for the app.
     *
     * @return self
     */
    public function setClientId(string $client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets editor_options
     *
     * @return SubEditorOptions|null
     */
    public function getEditorOptions()
    {
        return $this->container['editor_options'];
    }

    /**
     * Sets editor_options
     *
     * @param SubEditorOptions|null $editor_options editor_options
     *
     * @return self
     */
    public function setEditorOptions(?SubEditorOptions $editor_options)
    {
        $this->container['editor_options'] = $editor_options;

        return $this;
    }

    /**
     * Gets is_for_embedded_signing
     *
     * @return bool|null
     */
    public function getIsForEmbeddedSigning()
    {
        return $this->container['is_for_embedded_signing'];
    }

    /**
     * Sets is_for_embedded_signing
     *
     * @param bool|null $is_for_embedded_signing the request created from this draft will also be signable in embedded mode if set to `true`
     *
     * @return self
     */
    public function setIsForEmbeddedSigning(?bool $is_for_embedded_signing)
    {
        $this->container['is_for_embedded_signing'] = $is_for_embedded_signing;

        return $this;
    }

    /**
     * Gets requester_email_address
     *
     * @return string|null
     */
    public function getRequesterEmailAddress()
    {
        return $this->container['requester_email_address'];
    }

    /**
     * Sets requester_email_address
     *
     * @param string|null $requester_email_address The email address of the user that should be designated as the requester of this draft. If not set, original requester's email address will be used.
     *
     * @return self
     */
    public function setRequesterEmailAddress(?string $requester_email_address)
    {
        $this->container['requester_email_address'] = $requester_email_address;

        return $this;
    }

    /**
     * Gets requesting_redirect_url
     *
     * @return string|null
     */
    public function getRequestingRedirectUrl()
    {
        return $this->container['requesting_redirect_url'];
    }

    /**
     * Sets requesting_redirect_url
     *
     * @param string|null $requesting_redirect_url the URL you want signers redirected to after they successfully request a signature
     *
     * @return self
     */
    public function setRequestingRedirectUrl(?string $requesting_redirect_url)
    {
        $this->container['requesting_redirect_url'] = $requesting_redirect_url;

        return $this;
    }

    /**
     * Gets show_progress_stepper
     *
     * @return bool|null
     */
    public function getShowProgressStepper()
    {
        return $this->container['show_progress_stepper'];
    }

    /**
     * Sets show_progress_stepper
     *
     * @param bool|null $show_progress_stepper when only one step remains in the signature request process and this parameter is set to `false` then the progress stepper will be hidden
     *
     * @return self
     */
    public function setShowProgressStepper(?bool $show_progress_stepper)
    {
        $this->container['show_progress_stepper'] = $show_progress_stepper;

        return $this;
    }

    /**
     * Gets signing_redirect_url
     *
     * @return string|null
     */
    public function getSigningRedirectUrl()
    {
        return $this->container['signing_redirect_url'];
    }

    /**
     * Sets signing_redirect_url
     *
     * @param string|null $signing_redirect_url the URL you want signers redirected to after they successfully sign
     *
     * @return self
     */
    public function setSigningRedirectUrl(?string $signing_redirect_url)
    {
        $this->container['signing_redirect_url'] = $signing_redirect_url;

        return $this;
    }

    /**
     * Gets test_mode
     *
     * @return bool|null
     */
    public function getTestMode()
    {
        return $this->container['test_mode'];
    }

    /**
     * Sets test_mode
     *
     * @param bool|null $test_mode Whether this is a test, the signature request created from this draft will not be legally binding if set to `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setTestMode(?bool $test_mode)
    {
        $this->container['test_mode'] = $test_mode;

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
