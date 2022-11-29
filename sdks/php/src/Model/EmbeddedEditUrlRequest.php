<?php
/**
 * EmbeddedEditUrlRequest
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

namespace HelloSignSDK\Model;

use ArrayAccess;
use HelloSignSDK\ObjectSerializer;
use JsonSerializable;

/**
 * EmbeddedEditUrlRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class EmbeddedEditUrlRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'EmbeddedEditUrlRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'allow_edit_ccs' => 'bool',
        'cc_roles' => 'string[]',
        'editor_options' => '\HelloSignSDK\Model\SubEditorOptions',
        'force_signer_roles' => 'bool',
        'force_subject_message' => 'bool',
        'merge_fields' => '\HelloSignSDK\Model\SubMergeField[]',
        'preview_only' => 'bool',
        'show_preview' => 'bool',
        'show_progress_stepper' => 'bool',
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
        'allow_edit_ccs' => null,
        'cc_roles' => null,
        'editor_options' => null,
        'force_signer_roles' => null,
        'force_subject_message' => null,
        'merge_fields' => null,
        'preview_only' => null,
        'show_preview' => null,
        'show_progress_stepper' => null,
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
        'allow_edit_ccs' => 'allow_edit_ccs',
        'cc_roles' => 'cc_roles',
        'editor_options' => 'editor_options',
        'force_signer_roles' => 'force_signer_roles',
        'force_subject_message' => 'force_subject_message',
        'merge_fields' => 'merge_fields',
        'preview_only' => 'preview_only',
        'show_preview' => 'show_preview',
        'show_progress_stepper' => 'show_progress_stepper',
        'test_mode' => 'test_mode',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'allow_edit_ccs' => 'setAllowEditCcs',
        'cc_roles' => 'setCcRoles',
        'editor_options' => 'setEditorOptions',
        'force_signer_roles' => 'setForceSignerRoles',
        'force_subject_message' => 'setForceSubjectMessage',
        'merge_fields' => 'setMergeFields',
        'preview_only' => 'setPreviewOnly',
        'show_preview' => 'setShowPreview',
        'show_progress_stepper' => 'setShowProgressStepper',
        'test_mode' => 'setTestMode',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'allow_edit_ccs' => 'getAllowEditCcs',
        'cc_roles' => 'getCcRoles',
        'editor_options' => 'getEditorOptions',
        'force_signer_roles' => 'getForceSignerRoles',
        'force_subject_message' => 'getForceSubjectMessage',
        'merge_fields' => 'getMergeFields',
        'preview_only' => 'getPreviewOnly',
        'show_preview' => 'getShowPreview',
        'show_progress_stepper' => 'getShowProgressStepper',
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
        $this->container['allow_edit_ccs'] = $data['allow_edit_ccs'] ?? false;
        $this->container['cc_roles'] = $data['cc_roles'] ?? null;
        $this->container['editor_options'] = $data['editor_options'] ?? null;
        $this->container['force_signer_roles'] = $data['force_signer_roles'] ?? false;
        $this->container['force_subject_message'] = $data['force_subject_message'] ?? false;
        $this->container['merge_fields'] = $data['merge_fields'] ?? null;
        $this->container['preview_only'] = $data['preview_only'] ?? false;
        $this->container['show_preview'] = $data['show_preview'] ?? false;
        $this->container['show_progress_stepper'] = $data['show_progress_stepper'] ?? true;
        $this->container['test_mode'] = $data['test_mode'] ?? false;
    }

    public static function fromArray(array $data): EmbeddedEditUrlRequest
    {
        /** @var EmbeddedEditUrlRequest $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            EmbeddedEditUrlRequest::class,
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
     * Gets allow_edit_ccs
     *
     * @return bool|null
     */
    public function getAllowEditCcs()
    {
        return $this->container['allow_edit_ccs'];
    }

    /**
     * Sets allow_edit_ccs
     *
     * @param bool|null $allow_edit_ccs this allows the requester to enable/disable to add or change CC roles when editing the template
     *
     * @return self
     */
    public function setAllowEditCcs(?bool $allow_edit_ccs)
    {
        $this->container['allow_edit_ccs'] = $allow_edit_ccs;

        return $this;
    }

    /**
     * Gets cc_roles
     *
     * @return string[]|null
     */
    public function getCcRoles()
    {
        return $this->container['cc_roles'];
    }

    /**
     * Sets cc_roles
     *
     * @param string[]|null $cc_roles The CC roles that must be assigned when using the template to send a signature request. To remove all CC roles, pass in a single role with no name. For use in a POST request.
     *
     * @return self
     */
    public function setCcRoles(?array $cc_roles)
    {
        $this->container['cc_roles'] = $cc_roles;

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
     * Gets force_signer_roles
     *
     * @return bool|null
     */
    public function getForceSignerRoles()
    {
        return $this->container['force_signer_roles'];
    }

    /**
     * Sets force_signer_roles
     *
     * @param bool|null $force_signer_roles provide users the ability to review/edit the template signer roles
     *
     * @return self
     */
    public function setForceSignerRoles(?bool $force_signer_roles)
    {
        $this->container['force_signer_roles'] = $force_signer_roles;

        return $this;
    }

    /**
     * Gets force_subject_message
     *
     * @return bool|null
     */
    public function getForceSubjectMessage()
    {
        return $this->container['force_subject_message'];
    }

    /**
     * Sets force_subject_message
     *
     * @param bool|null $force_subject_message provide users the ability to review/edit the template subject and message
     *
     * @return self
     */
    public function setForceSubjectMessage(?bool $force_subject_message)
    {
        $this->container['force_subject_message'] = $force_subject_message;

        return $this;
    }

    /**
     * Gets merge_fields
     *
     * @return SubMergeField[]|null
     */
    public function getMergeFields()
    {
        return $this->container['merge_fields'];
    }

    /**
     * Sets merge_fields
     *
     * @param SubMergeField[]|null $merge_fields Add additional merge fields to the template, which can be used used to pre-fill data by passing values into signature requests made with that template.      Remove all merge fields on the template by passing an empty array `[]`.
     *
     * @return self
     */
    public function setMergeFields(?array $merge_fields)
    {
        $this->container['merge_fields'] = $merge_fields;

        return $this;
    }

    /**
     * Gets preview_only
     *
     * @return bool|null
     */
    public function getPreviewOnly()
    {
        return $this->container['preview_only'];
    }

    /**
     * Sets preview_only
     *
     * @param bool|null $preview_only This allows the requester to enable the preview experience (i.e. does not allow the requester's end user to add any additional fields via the editor).  **Note**: This parameter overwrites `show_preview=true` (if set).
     *
     * @return self
     */
    public function setPreviewOnly(?bool $preview_only)
    {
        $this->container['preview_only'] = $preview_only;

        return $this;
    }

    /**
     * Gets show_preview
     *
     * @return bool|null
     */
    public function getShowPreview()
    {
        return $this->container['show_preview'];
    }

    /**
     * Sets show_preview
     *
     * @param bool|null $show_preview this allows the requester to enable the editor/preview experience
     *
     * @return self
     */
    public function setShowPreview(?bool $show_preview)
    {
        $this->container['show_preview'] = $show_preview;

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
     * @param bool|null $test_mode Whether this is a test, locked templates will only be available for editing if this is set to `true`. Defaults to `false`.
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
