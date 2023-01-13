<?php
/**
 * UnclaimedDraftCreateRequest
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
use SplFileObject;

/**
 * UnclaimedDraftCreateRequest Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class UnclaimedDraftCreateRequest implements ModelInterface, ArrayAccess, JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     *
     * @var string
     */
    protected static $openAPIModelName = 'UnclaimedDraftCreateRequest';

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $openAPITypes = [
        'type' => 'string',
        'files' => '\SplFileObject[]',
        'file_urls' => 'string[]',
        'allow_decline' => 'bool',
        'attachments' => '\HelloSign\Model\SubAttachment[]',
        'cc_email_addresses' => 'string[]',
        'client_id' => 'string',
        'custom_fields' => '\HelloSign\Model\SubCustomField[]',
        'field_options' => '\HelloSign\Model\SubFieldOptions',
        'form_field_groups' => '\HelloSign\Model\SubFormFieldGroup[]',
        'form_field_rules' => '\HelloSign\Model\SubFormFieldRule[]',
        'form_fields_per_document' => '\HelloSign\Model\SubFormFieldsPerDocumentBase[]',
        'hide_text_tags' => 'bool',
        'message' => 'string',
        'metadata' => 'array<string,mixed>',
        'show_progress_stepper' => 'bool',
        'signers' => '\HelloSign\Model\SubUnclaimedDraftSigner[]',
        'signing_options' => '\HelloSign\Model\SubSigningOptions',
        'signing_redirect_url' => 'string',
        'subject' => 'string',
        'test_mode' => 'bool',
        'use_preexisting_fields' => 'bool',
        'use_text_tags' => 'bool',
        'expires_at' => 'int',
    ];

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     * @phpstan-var array<string, string|null>
     * @psalm-var array<string, string|null>
     */
    protected static $openAPIFormats = [
        'type' => null,
        'files' => 'binary',
        'file_urls' => null,
        'allow_decline' => null,
        'attachments' => null,
        'cc_email_addresses' => 'email',
        'client_id' => null,
        'custom_fields' => null,
        'field_options' => null,
        'form_field_groups' => null,
        'form_field_rules' => null,
        'form_fields_per_document' => null,
        'hide_text_tags' => null,
        'message' => null,
        'metadata' => null,
        'show_progress_stepper' => null,
        'signers' => null,
        'signing_options' => null,
        'signing_redirect_url' => null,
        'subject' => null,
        'test_mode' => null,
        'use_preexisting_fields' => null,
        'use_text_tags' => null,
        'expires_at' => null,
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
        'type' => 'type',
        'files' => 'files',
        'file_urls' => 'file_urls',
        'allow_decline' => 'allow_decline',
        'attachments' => 'attachments',
        'cc_email_addresses' => 'cc_email_addresses',
        'client_id' => 'client_id',
        'custom_fields' => 'custom_fields',
        'field_options' => 'field_options',
        'form_field_groups' => 'form_field_groups',
        'form_field_rules' => 'form_field_rules',
        'form_fields_per_document' => 'form_fields_per_document',
        'hide_text_tags' => 'hide_text_tags',
        'message' => 'message',
        'metadata' => 'metadata',
        'show_progress_stepper' => 'show_progress_stepper',
        'signers' => 'signers',
        'signing_options' => 'signing_options',
        'signing_redirect_url' => 'signing_redirect_url',
        'subject' => 'subject',
        'test_mode' => 'test_mode',
        'use_preexisting_fields' => 'use_preexisting_fields',
        'use_text_tags' => 'use_text_tags',
        'expires_at' => 'expires_at',
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'files' => 'setFiles',
        'file_urls' => 'setFileUrls',
        'allow_decline' => 'setAllowDecline',
        'attachments' => 'setAttachments',
        'cc_email_addresses' => 'setCcEmailAddresses',
        'client_id' => 'setClientId',
        'custom_fields' => 'setCustomFields',
        'field_options' => 'setFieldOptions',
        'form_field_groups' => 'setFormFieldGroups',
        'form_field_rules' => 'setFormFieldRules',
        'form_fields_per_document' => 'setFormFieldsPerDocument',
        'hide_text_tags' => 'setHideTextTags',
        'message' => 'setMessage',
        'metadata' => 'setMetadata',
        'show_progress_stepper' => 'setShowProgressStepper',
        'signers' => 'setSigners',
        'signing_options' => 'setSigningOptions',
        'signing_redirect_url' => 'setSigningRedirectUrl',
        'subject' => 'setSubject',
        'test_mode' => 'setTestMode',
        'use_preexisting_fields' => 'setUsePreexistingFields',
        'use_text_tags' => 'setUseTextTags',
        'expires_at' => 'setExpiresAt',
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'files' => 'getFiles',
        'file_urls' => 'getFileUrls',
        'allow_decline' => 'getAllowDecline',
        'attachments' => 'getAttachments',
        'cc_email_addresses' => 'getCcEmailAddresses',
        'client_id' => 'getClientId',
        'custom_fields' => 'getCustomFields',
        'field_options' => 'getFieldOptions',
        'form_field_groups' => 'getFormFieldGroups',
        'form_field_rules' => 'getFormFieldRules',
        'form_fields_per_document' => 'getFormFieldsPerDocument',
        'hide_text_tags' => 'getHideTextTags',
        'message' => 'getMessage',
        'metadata' => 'getMetadata',
        'show_progress_stepper' => 'getShowProgressStepper',
        'signers' => 'getSigners',
        'signing_options' => 'getSigningOptions',
        'signing_redirect_url' => 'getSigningRedirectUrl',
        'subject' => 'getSubject',
        'test_mode' => 'getTestMode',
        'use_preexisting_fields' => 'getUsePreexistingFields',
        'use_text_tags' => 'getUseTextTags',
        'expires_at' => 'getExpiresAt',
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

    public const TYPE_SEND_DOCUMENT = 'send_document';
    public const TYPE_REQUEST_SIGNATURE = 'request_signature';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SEND_DOCUMENT,
            self::TYPE_REQUEST_SIGNATURE,
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
        $this->container['type'] = $data['type'] ?? null;
        $this->container['files'] = $data['files'] ?? null;
        $this->container['file_urls'] = $data['file_urls'] ?? null;
        $this->container['allow_decline'] = $data['allow_decline'] ?? false;
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['cc_email_addresses'] = $data['cc_email_addresses'] ?? null;
        $this->container['client_id'] = $data['client_id'] ?? null;
        $this->container['custom_fields'] = $data['custom_fields'] ?? null;
        $this->container['field_options'] = $data['field_options'] ?? null;
        $this->container['form_field_groups'] = $data['form_field_groups'] ?? null;
        $this->container['form_field_rules'] = $data['form_field_rules'] ?? null;
        $this->container['form_fields_per_document'] = $data['form_fields_per_document'] ?? null;
        $this->container['hide_text_tags'] = $data['hide_text_tags'] ?? false;
        $this->container['message'] = $data['message'] ?? null;
        $this->container['metadata'] = $data['metadata'] ?? null;
        $this->container['show_progress_stepper'] = $data['show_progress_stepper'] ?? true;
        $this->container['signers'] = $data['signers'] ?? null;
        $this->container['signing_options'] = $data['signing_options'] ?? null;
        $this->container['signing_redirect_url'] = $data['signing_redirect_url'] ?? null;
        $this->container['subject'] = $data['subject'] ?? null;
        $this->container['test_mode'] = $data['test_mode'] ?? false;
        $this->container['use_preexisting_fields'] = $data['use_preexisting_fields'] ?? false;
        $this->container['use_text_tags'] = $data['use_text_tags'] ?? false;
        $this->container['expires_at'] = $data['expires_at'] ?? null;
    }

    public static function fromArray(array $data): UnclaimedDraftCreateRequest
    {
        /** @var UnclaimedDraftCreateRequest $obj */
        $obj = ObjectSerializer::deserialize(
            $data,
            UnclaimedDraftCreateRequest::class,
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

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'type', must be one of '%s'",
                $this->container['type'],
                implode("', '", $allowedValues)
            );
        }

        if (!is_null($this->container['message']) && (mb_strlen($this->container['message']) > 5000)) {
            $invalidProperties[] = "invalid value for 'message', the character length must be smaller than or equal to 5000.";
        }

        if (!is_null($this->container['subject']) && (mb_strlen($this->container['subject']) > 200)) {
            $invalidProperties[] = "invalid value for 'subject', the character length must be smaller than or equal to 200.";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The type of unclaimed draft to create. Use `send_document` to create a claimable file, and `request_signature` for a claimable signature request. If the type is `request_signature` then signers name and email_address are not optional.
     *
     * @return self
     */
    public function setType(string $type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'type', must be one of '%s'",
                    $type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets files
     *
     * @return SplFileObject[]|null
     */
    public function getFiles()
    {
        return $this->container['files'];
    }

    /**
     * Sets files
     *
     * @param SplFileObject[]|null $files Use `files[]` to indicate the uploaded file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.
     *
     * @return self
     */
    public function setFiles(?array $files)
    {
        $this->container['files'] = $files;

        return $this;
    }

    /**
     * Gets file_urls
     *
     * @return string[]|null
     */
    public function getFileUrls()
    {
        return $this->container['file_urls'];
    }

    /**
     * Sets file_urls
     *
     * @param string[]|null $file_urls Use `file_urls[]` to have Dropbox Sign download the file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.
     *
     * @return self
     */
    public function setFileUrls(?array $file_urls)
    {
        $this->container['file_urls'] = $file_urls;

        return $this;
    }

    /**
     * Gets allow_decline
     *
     * @return bool|null
     */
    public function getAllowDecline()
    {
        return $this->container['allow_decline'];
    }

    /**
     * Sets allow_decline
     *
     * @param bool|null $allow_decline Allows signers to decline to sign a document if `true`. Defaults to `false`.
     *
     * @return self
     */
    public function setAllowDecline(?bool $allow_decline)
    {
        $this->container['allow_decline'] = $allow_decline;

        return $this;
    }

    /**
     * Gets attachments
     *
     * @return SubAttachment[]|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param SubAttachment[]|null $attachments A list describing the attachments
     *
     * @return self
     */
    public function setAttachments(?array $attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets cc_email_addresses
     *
     * @return string[]|null
     */
    public function getCcEmailAddresses()
    {
        return $this->container['cc_email_addresses'];
    }

    /**
     * Sets cc_email_addresses
     *
     * @param string[]|null $cc_email_addresses the email addresses that should be CCed
     *
     * @return self
     */
    public function setCcEmailAddresses(?array $cc_email_addresses)
    {
        $this->container['cc_email_addresses'] = $cc_email_addresses;

        return $this;
    }

    /**
     * Gets client_id
     *
     * @return string|null
     */
    public function getClientId()
    {
        return $this->container['client_id'];
    }

    /**
     * Sets client_id
     *
     * @param string|null $client_id Client id of the app used to create the draft. Used to apply the branding and callback url defined for the app.
     *
     * @return self
     */
    public function setClientId(?string $client_id)
    {
        $this->container['client_id'] = $client_id;

        return $this;
    }

    /**
     * Gets custom_fields
     *
     * @return SubCustomField[]|null
     */
    public function getCustomFields()
    {
        return $this->container['custom_fields'];
    }

    /**
     * Sets custom_fields
     *
     * @param SubCustomField[]|null $custom_fields When used together with merge fields, `custom_fields` allows users to add pre-filled data to their signature requests.  Pre-filled data can be used with \"send-once\" signature requests by adding merge fields with `form_fields_per_document` or [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) while passing values back with `custom_fields` together in one API call.  For using pre-filled on repeatable signature requests, merge fields are added to templates in the Dropbox Sign UI or by calling [/template/create_embedded_draft](/api/reference/operation/templateCreateEmbeddedDraft) and then passing `custom_fields` on subsequent signature requests referencing that template.
     *
     * @return self
     */
    public function setCustomFields(?array $custom_fields)
    {
        $this->container['custom_fields'] = $custom_fields;

        return $this;
    }

    /**
     * Gets field_options
     *
     * @return SubFieldOptions|null
     */
    public function getFieldOptions()
    {
        return $this->container['field_options'];
    }

    /**
     * Sets field_options
     *
     * @param SubFieldOptions|null $field_options field_options
     *
     * @return self
     */
    public function setFieldOptions(?SubFieldOptions $field_options)
    {
        $this->container['field_options'] = $field_options;

        return $this;
    }

    /**
     * Gets form_field_groups
     *
     * @return SubFormFieldGroup[]|null
     */
    public function getFormFieldGroups()
    {
        return $this->container['form_field_groups'];
    }

    /**
     * Sets form_field_groups
     *
     * @param SubFormFieldGroup[]|null $form_field_groups Group information for fields defined in `form_fields_per_document`. String-indexed JSON array with `group_label` and `requirement` keys. `form_fields_per_document` must contain fields referencing a group defined in `form_field_groups`.
     *
     * @return self
     */
    public function setFormFieldGroups(?array $form_field_groups)
    {
        $this->container['form_field_groups'] = $form_field_groups;

        return $this;
    }

    /**
     * Gets form_field_rules
     *
     * @return SubFormFieldRule[]|null
     */
    public function getFormFieldRules()
    {
        return $this->container['form_field_rules'];
    }

    /**
     * Sets form_field_rules
     *
     * @param SubFormFieldRule[]|null $form_field_rules conditional Logic rules for fields defined in `form_fields_per_document`
     *
     * @return self
     */
    public function setFormFieldRules(?array $form_field_rules)
    {
        $this->container['form_field_rules'] = $form_field_rules;

        return $this;
    }

    /**
     * Gets form_fields_per_document
     *
     * @return SubFormFieldsPerDocumentBase[]|null
     */
    public function getFormFieldsPerDocument()
    {
        return $this->container['form_fields_per_document'];
    }

    /**
     * Sets form_fields_per_document
     *
     * @param SubFormFieldsPerDocumentBase[]|null $form_fields_per_document The fields that should appear on the document, expressed as an array of objects. (We're currently fixing a bug where this property only accepts a two-dimensional array. You can read about it here: <a href=\"/docs/openapi/form-fields-per-document\" target=\"_blank\">Using Form Fields per Document</a>.)  **NOTE**: Fields like **text**, **dropdown**, **checkbox**, **radio**, and **hyperlink** have additional required and optional parameters. Check out the list of [additional parameters](/api/reference/constants/#form-fields-per-document) for these field types.  * Text Field use `SubFormFieldsPerDocumentText` * Dropdown Field use `SubFormFieldsPerDocumentDropdown` * Hyperlink Field use `SubFormFieldsPerDocumentHyperlink` * Checkbox Field use `SubFormFieldsPerDocumentCheckbox` * Radio Field use `SubFormFieldsPerDocumentRadio` * Signature Field use `SubFormFieldsPerDocumentSignature` * Date Signed Field use `SubFormFieldsPerDocumentDateSigned` * Initials Field use `SubFormFieldsPerDocumentInitials` * Text Merge Field use `SubFormFieldsPerDocumentTextMerge` * Checkbox Merge Field use `SubFormFieldsPerDocumentCheckboxMerge`
     *
     * @return self
     */
    public function setFormFieldsPerDocument(?array $form_fields_per_document)
    {
        $this->container['form_fields_per_document'] = $form_fields_per_document;

        return $this;
    }

    /**
     * Gets hide_text_tags
     *
     * @return bool|null
     */
    public function getHideTextTags()
    {
        return $this->container['hide_text_tags'];
    }

    /**
     * Sets hide_text_tags
     *
     * @param bool|null $hide_text_tags Send with a value of `true` if you wish to enable automatic Text Tag removal. Defaults to `false`. When using Text Tags it is preferred that you set this to `false` and hide your tags with white text or something similar because the automatic removal system can cause unwanted clipping. See the [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) walkthrough for more details.
     *
     * @return self
     */
    public function setHideTextTags(?bool $hide_text_tags)
    {
        $this->container['hide_text_tags'] = $hide_text_tags;

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
     * @param string|null $message the custom message in the email that will be sent to the signers
     *
     * @return self
     */
    public function setMessage(?string $message)
    {
        if (!is_null($message) && (mb_strlen($message) > 5000)) {
            throw new InvalidArgumentException('invalid length for $message when calling UnclaimedDraftCreateRequest., must be smaller than or equal to 5000.');
        }

        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return array<string,mixed>|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param array<string,mixed>|null $metadata Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer's order number for look up when receiving events for the signature request.  Each request can include up to 10 metadata keys (or 50 nested metadata keys), with key names up to 40 characters long and values up to 1000 characters long.
     *
     * @return self
     */
    public function setMetadata(?array $metadata)
    {
        $this->container['metadata'] = $metadata;

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
     * Gets signers
     *
     * @return SubUnclaimedDraftSigner[]|null
     */
    public function getSigners()
    {
        return $this->container['signers'];
    }

    /**
     * Sets signers
     *
     * @param SubUnclaimedDraftSigner[]|null $signers add Signers to your Unclaimed Draft Signature Request
     *
     * @return self
     */
    public function setSigners(?array $signers)
    {
        $this->container['signers'] = $signers;

        return $this;
    }

    /**
     * Gets signing_options
     *
     * @return SubSigningOptions|null
     */
    public function getSigningOptions()
    {
        return $this->container['signing_options'];
    }

    /**
     * Sets signing_options
     *
     * @param SubSigningOptions|null $signing_options signing_options
     *
     * @return self
     */
    public function setSigningOptions(?SubSigningOptions $signing_options)
    {
        $this->container['signing_options'] = $signing_options;

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
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject the subject in the email that will be sent to the signers
     *
     * @return self
     */
    public function setSubject(?string $subject)
    {
        if (!is_null($subject) && (mb_strlen($subject) > 200)) {
            throw new InvalidArgumentException('invalid length for $subject when calling UnclaimedDraftCreateRequest., must be smaller than or equal to 200.');
        }

        $this->container['subject'] = $subject;

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
     * Gets use_preexisting_fields
     *
     * @return bool|null
     */
    public function getUsePreexistingFields()
    {
        return $this->container['use_preexisting_fields'];
    }

    /**
     * Sets use_preexisting_fields
     *
     * @param bool|null $use_preexisting_fields Set `use_text_tags` to `true` to enable [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) parsing in your document (defaults to disabled, or `false`). Alternatively, if your PDF contains pre-defined fields, enable the detection of these fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`). Currently we only support use of either `use_text_tags` or `use_preexisting_fields` parameter, not both.
     *
     * @return self
     */
    public function setUsePreexistingFields(?bool $use_preexisting_fields)
    {
        $this->container['use_preexisting_fields'] = $use_preexisting_fields;

        return $this;
    }

    /**
     * Gets use_text_tags
     *
     * @return bool|null
     */
    public function getUseTextTags()
    {
        return $this->container['use_text_tags'];
    }

    /**
     * Sets use_text_tags
     *
     * @param bool|null $use_text_tags Set `use_text_tags` to `true` to enable [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) parsing in your document (defaults to disabled, or `false`). Alternatively, if your PDF contains pre-defined fields, enable the detection of these fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`). Currently we only support use of either `use_text_tags` or `use_preexisting_fields` parameter, not both.
     *
     * @return self
     */
    public function setUseTextTags(?bool $use_text_tags)
    {
        $this->container['use_text_tags'] = $use_text_tags;

        return $this;
    }

    /**
     * Gets expires_at
     *
     * @return int|null
     */
    public function getExpiresAt()
    {
        return $this->container['expires_at'];
    }

    /**
     * Sets expires_at
     *
     * @param int|null $expires_at When the signature request will expire. Unsigned signatures will be moved to the expired status, and no longer signable. See [Signature Request Expiration Date](https://developers.hellosign.com/docs/signature-request/expiration/) for details.  **Note**: This does not correspond to the **expires_at** returned in the response.
     *
     * @return self
     */
    public function setExpiresAt(?int $expires_at)
    {
        $this->container['expires_at'] = $expires_at;

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
