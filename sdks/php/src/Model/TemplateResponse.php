<?php
/**
 * TemplateResponse
 *
 * PHP version 7.4
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
 * TemplateResponse Class Doc Comment
 *
 * @category Class
 * @description Contains information about the templates you and your team have created.
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 * @internal This class should not be instantiated directly
 */
class TemplateResponse implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'TemplateResponse';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'template_id' => 'string',
        'title' => 'string',
        'message' => 'string',
        'updated_at' => 'int',
        'is_embedded' => 'bool',
        'is_creator' => 'bool',
        'can_edit' => 'bool',
        'is_locked' => 'bool',
        'metadata' => 'array',
        'signer_roles' => '\Dropbox\Sign\Model\TemplateResponseSignerRole[]',
        'cc_roles' => '\Dropbox\Sign\Model\TemplateResponseCCRole[]',
        'documents' => '\Dropbox\Sign\Model\TemplateResponseDocument[]',
        'custom_fields' => '\Dropbox\Sign\Model\TemplateResponseDocumentCustomFieldBase[]',
        'named_form_fields' => '\Dropbox\Sign\Model\TemplateResponseDocumentFormFieldBase[]',
        'accounts' => '\Dropbox\Sign\Model\TemplateResponseAccount[]',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'template_id' => null,
        'title' => null,
        'message' => null,
        'updated_at' => null,
        'is_embedded' => null,
        'is_creator' => null,
        'can_edit' => null,
        'is_locked' => null,
        'metadata' => null,
        'signer_roles' => null,
        'cc_roles' => null,
        'documents' => null,
        'custom_fields' => null,
        'named_form_fields' => null,
        'accounts' => null,
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
        'template_id' => 'template_id',
        'title' => 'title',
        'message' => 'message',
        'updated_at' => 'updated_at',
        'is_embedded' => 'is_embedded',
        'is_creator' => 'is_creator',
        'can_edit' => 'can_edit',
        'is_locked' => 'is_locked',
        'metadata' => 'metadata',
        'signer_roles' => 'signer_roles',
        'cc_roles' => 'cc_roles',
        'documents' => 'documents',
        'custom_fields' => 'custom_fields',
        'named_form_fields' => 'named_form_fields',
        'accounts' => 'accounts',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'template_id' => 'setTemplateId',
        'title' => 'setTitle',
        'message' => 'setMessage',
        'updated_at' => 'setUpdatedAt',
        'is_embedded' => 'setIsEmbedded',
        'is_creator' => 'setIsCreator',
        'can_edit' => 'setCanEdit',
        'is_locked' => 'setIsLocked',
        'metadata' => 'setMetadata',
        'signer_roles' => 'setSignerRoles',
        'cc_roles' => 'setCcRoles',
        'documents' => 'setDocuments',
        'custom_fields' => 'setCustomFields',
        'named_form_fields' => 'setNamedFormFields',
        'accounts' => 'setAccounts',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'template_id' => 'getTemplateId',
        'title' => 'getTitle',
        'message' => 'getMessage',
        'updated_at' => 'getUpdatedAt',
        'is_embedded' => 'getIsEmbedded',
        'is_creator' => 'getIsCreator',
        'can_edit' => 'getCanEdit',
        'is_locked' => 'getIsLocked',
        'metadata' => 'getMetadata',
        'signer_roles' => 'getSignerRoles',
        'cc_roles' => 'getCcRoles',
        'documents' => 'getDocuments',
        'custom_fields' => 'getCustomFields',
        'named_form_fields' => 'getNamedFormFields',
        'accounts' => 'getAccounts',
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
        $this->container['template_id'] = $data['template_id'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
        $this->container['is_embedded'] = $data['is_embedded'] ?? null;
        $this->container['is_creator'] = $data['is_creator'] ?? null;
        $this->container['can_edit'] = $data['can_edit'] ?? null;
        $this->container['is_locked'] = $data['is_locked'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['signer_roles'] = $data['signer_roles'] ?? null;
        $this->container['cc_roles'] = $data['cc_roles'] ?? null;
        $this->container['documents'] = $data['documents'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['named_form_fields'] = $data['named_form_fields'] ?? null;
        $this->container['accounts'] = $data['accounts'] ?? null;
    }

    /** @deprecated use ::init() */
    public static function fromArray(array $data): TemplateResponse
    {
        return self::init($data);
    }

    /** Attempt to instantiate and hydrate a new instance of this class */
    public static function init(array $data): TemplateResponse
    {
        /** @var TemplateResponse $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            TemplateResponse::class,
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
     * Gets template_id
     *
     * @return string|null
     */
    public function getTemplateId()
    {
        return $this->container['template_id'];
    }

    /**
     * Sets template_id
     *
     * @param string|null $template_id the id of the Template
     *
     * @return self
     */
    public function setTemplateId(?string $template_id)
    {
        $this->container['template_id'] = $template_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title The title of the Template. This will also be the default subject of the message sent to signers when using this Template to send a SignatureRequest. This can be overridden when sending the SignatureRequest.
     *
     * @return self
     */
    public function setTitle(?string $title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message The default message that will be sent to signers when using this Template to send a SignatureRequest. This can be overridden when sending the SignatureRequest.
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return int|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param int|null $updated_at time the template was last updated
     *
     * @return self
     */
    public function setUpdatedAt(?int $updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets is_embedded
     *
     * @return bool|null
     */
    public function getIsEmbedded()
    {
        return $this->container['is_embedded'];
    }

    /**
     * Sets is_embedded
     *
     * @param bool|null $is_embedded `true` if this template was created using an embedded flow, `false` if it was created on our website
     *
     * @return self
     */
    public function setIsEmbedded(?bool $is_embedded)
    {
        $this->container['is_embedded'] = $is_embedded;

        return $this;
    }

    /**
     * Gets is_creator
     *
     * @return bool|null
     */
    public function getIsCreator()
    {
        return $this->container['is_creator'];
    }

    /**
     * Sets is_creator
     *
     * @param bool|null $is_creator `true` if you are the owner of this template, `false` if it's been shared with you by a team member
     *
     * @return self
     */
    public function setIsCreator(?bool $is_creator)
    {
        $this->container['is_creator'] = $is_creator;

        return $this;
    }

    /**
     * Gets can_edit
     *
     * @return bool|null
     */
    public function getCanEdit()
    {
        return $this->container['can_edit'];
    }

    /**
     * Sets can_edit
     *
     * @param bool|null $can_edit indicates whether edit rights have been granted to you by the owner (always `true` if that's you)
     *
     * @return self
     */
    public function setCanEdit(?bool $can_edit)
    {
        $this->container['can_edit'] = $can_edit;

        return $this;
    }

    /**
     * Gets is_locked
     *
     * @return bool|null
     */
    public function getIsLocked()
    {
        return $this->container['is_locked'];
    }

    /**
     * Sets is_locked
     *
     * @param bool|null $is_locked Indicates whether the template is locked. If `true`, then the template was created outside your quota and can only be used in `test_mode`. If `false`, then the template is within your quota and can be used to create signature requests.
     *
     * @return self
     */
    public function setIsLocked(?bool $is_locked)
    {
        $this->container['is_locked'] = $is_locked;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array|null $metadata the metadata attached to the template
     *
     * @return self
     */
    public function setMetadata(?array $metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets signer_roles
     *
     * @return TemplateResponseSignerRole[]|null
     */
    public function getSignerRoles()
    {
        return $this->container['signer_roles'];
    }

    /**
     * Sets signer_roles
     *
     * @param TemplateResponseSignerRole[]|null $signer_roles an array of the designated signer roles that must be specified when sending a SignatureRequest using this Template
     *
     * @return self
     */
    public function setSignerRoles(?array $signer_roles)
    {
        $this->container['signer_roles'] = $signer_roles;

        return $this;
    }

    /**
     * Gets cc_roles
     *
     * @return TemplateResponseCCRole[]|null
     */
    public function getCcRoles()
    {
        return $this->container['cc_roles'];
    }

    /**
     * Sets cc_roles
     *
     * @param TemplateResponseCCRole[]|null $cc_roles an array of the designated CC roles that must be specified when sending a SignatureRequest using this Template
     *
     * @return self
     */
    public function setCcRoles(?array $cc_roles)
    {
        $this->container['cc_roles'] = $cc_roles;

        return $this;
    }

    /**
     * Gets documents
     *
     * @return TemplateResponseDocument[]|null
     */
    public function getDocuments()
    {
        return $this->container['documents'];
    }

    /**
     * Sets documents
     *
     * @param TemplateResponseDocument[]|null $documents An array describing each document associated with this Template. Includes form field data for each document.
     *
     * @return self
     */
    public function setDocuments(?array $documents)
    {
        $this->container['documents'] = $documents;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return TemplateResponseDocumentCustomFieldBase[]|null
     * @deprecated
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param TemplateResponseDocumentCustomFieldBase[]|null $custom_fields Deprecated. Use `custom_fields` inside the [documents](https://developers.hellosign.com/api/reference/operation/templateGet/#!c=200&path=template/documents&t=response) array instead.
     *
     * @return self
     * @deprecated
     */
    public function setCustomFields(?array $custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets named_form_fields
     *
     * @return TemplateResponseDocumentFormFieldBase[]|null
     * @deprecated
     */
    public function getNamedFormFields()
    {
        return $this->container['named_form_fields'];
    }

    /**
     * Sets named_form_fields
     *
     * @param TemplateResponseDocumentFormFieldBase[]|null $named_form_fields Deprecated. Use `form_fields` inside the [documents](https://developers.hellosign.com/api/reference/operation/templateGet/#!c=200&path=template/documents&t=response) array instead.
     *
     * @return self
     * @deprecated
     */
    public function setNamedFormFields(?array $named_form_fields)
    {
        $this->container['named_form_fields'] = $named_form_fields;

        return $this;
    }

    /**
     * Gets accounts
     *
     * @return TemplateResponseAccount[]|null
     */
    public function getAccounts()
    {
        return $this->container['accounts'];
    }

    /**
     * Sets accounts
     *
     * @param TemplateResponseAccount[]|null $accounts an array of the Accounts that can use this Template
     *
     * @return self
     */
    public function setAccounts(?array $accounts)
    {
        $this->container['accounts'] = $accounts;

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
