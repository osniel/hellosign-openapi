"""
    Dropbox Sign API

    Dropbox Sign v3 API  # noqa: E501

    The version of the OpenAPI document: 3.0.0
    Contact: apisupport@hellosign.com
    Generated by: https://openapi-generator.tech
"""


import json  # noqa: F401
import re  # noqa: F401
import sys  # noqa: F401

from hellosign_sdk import ApiClient
from hellosign_sdk.model_utils import (  # noqa: F401
    ApiTypeError,
    ModelComposed,
    ModelNormal,
    ModelSimple,
    cached_property,
    change_keys_js_to_python,
    convert_js_args_to_python_args,
    date,
    datetime,
    file_type,
    none_type,
    validate_get_composed_info,
    OpenApiModel
)
from hellosign_sdk.exceptions import ApiAttributeError


def lazy_import():
    from hellosign_sdk.model.sub_attachment import SubAttachment
    from hellosign_sdk.model.sub_custom_field import SubCustomField
    from hellosign_sdk.model.sub_editor_options import SubEditorOptions
    from hellosign_sdk.model.sub_field_options import SubFieldOptions
    from hellosign_sdk.model.sub_form_field_group import SubFormFieldGroup
    from hellosign_sdk.model.sub_form_field_rule import SubFormFieldRule
    from hellosign_sdk.model.sub_form_fields_per_document_base import SubFormFieldsPerDocumentBase
    from hellosign_sdk.model.sub_signing_options import SubSigningOptions
    from hellosign_sdk.model.sub_unclaimed_draft_signer import SubUnclaimedDraftSigner
    globals()['SubAttachment'] = SubAttachment
    globals()['SubCustomField'] = SubCustomField
    globals()['SubEditorOptions'] = SubEditorOptions
    globals()['SubFieldOptions'] = SubFieldOptions
    globals()['SubFormFieldGroup'] = SubFormFieldGroup
    globals()['SubFormFieldRule'] = SubFormFieldRule
    globals()['SubFormFieldsPerDocumentBase'] = SubFormFieldsPerDocumentBase
    globals()['SubSigningOptions'] = SubSigningOptions
    globals()['SubUnclaimedDraftSigner'] = SubUnclaimedDraftSigner


class UnclaimedDraftCreateEmbeddedRequest(ModelNormal):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.

    Attributes:
      allowed_values (dict): The key is the tuple path to the attribute
          and the for var_name this is (var_name,). The value is a dict
          with a capitalized key describing the allowed value and an allowed
          value. These dicts store the allowed enum values.
      attribute_map (dict): The key is attribute name
          and the value is json key in definition.
      discriminator_value_class_map (dict): A dict to go from the discriminator
          variable value to the discriminator class name.
      validations (dict): The key is the tuple path to the attribute
          and the for var_name this is (var_name,). The value is a dict
          that stores validations for max_length, min_length, max_items,
          min_items, exclusive_maximum, inclusive_maximum, exclusive_minimum,
          inclusive_minimum, and regex.
      additional_properties_type (tuple): A tuple of classes accepted
          as additional properties values.
    """

    allowed_values = {
        ('type',): {
            'SEND_DOCUMENT': "send_document",
            'REQUEST_SIGNATURE': "request_signature",
        },
    }

    validations = {
        ('message',): {
            'max_length': 5000,
        },
        ('metadata',): {
        },
        ('subject',): {
            'max_length': 200,
        },
    }

    @cached_property
    def additional_properties_type():
        """
        This must be a method because a model may have properties that are
        of type self, this must run after the class is loaded
        """
        lazy_import()
        return (bool, date, datetime, dict, float, int, list, str, none_type,)  # noqa: E501

    _nullable = False

    @cached_property
    def openapi_types():
        """
        This must be a method because a model may have properties that are
        of type self, this must run after the class is loaded

        Returns
            openapi_types (dict): The key is attribute name
                and the value is attribute type.
        """
        lazy_import()
        return {
            'client_id': (str,),  # noqa: E501
            'requester_email_address': (str,),  # noqa: E501
            'files': ([file_type],),  # noqa: E501
            'file_urls': ([str],),  # noqa: E501
            'allow_ccs': (bool,),  # noqa: E501
            'allow_decline': (bool,),  # noqa: E501
            'allow_reassign': (bool,),  # noqa: E501
            'attachments': ([SubAttachment],),  # noqa: E501
            'cc_email_addresses': ([str],),  # noqa: E501
            'custom_fields': ([SubCustomField],),  # noqa: E501
            'editor_options': (SubEditorOptions,),  # noqa: E501
            'field_options': (SubFieldOptions,),  # noqa: E501
            'force_signer_page': (bool,),  # noqa: E501
            'force_subject_message': (bool,),  # noqa: E501
            'form_field_groups': ([SubFormFieldGroup],),  # noqa: E501
            'form_field_rules': ([SubFormFieldRule],),  # noqa: E501
            'form_fields_per_document': ([SubFormFieldsPerDocumentBase],),  # noqa: E501
            'hide_text_tags': (bool,),  # noqa: E501
            'hold_request': (bool,),  # noqa: E501
            'is_for_embedded_signing': (bool,),  # noqa: E501
            'message': (str,),  # noqa: E501
            'metadata': ({str: (bool, date, datetime, dict, float, int, list, str, none_type)},),  # noqa: E501
            'requesting_redirect_url': (str,),  # noqa: E501
            'show_preview': (bool,),  # noqa: E501
            'show_progress_stepper': (bool,),  # noqa: E501
            'signers': ([SubUnclaimedDraftSigner],),  # noqa: E501
            'signing_options': (SubSigningOptions,),  # noqa: E501
            'signing_redirect_url': (str,),  # noqa: E501
            'skip_me_now': (bool,),  # noqa: E501
            'subject': (str,),  # noqa: E501
            'test_mode': (bool,),  # noqa: E501
            'type': (str,),  # noqa: E501
            'use_preexisting_fields': (bool,),  # noqa: E501
            'use_text_tags': (bool,),  # noqa: E501
            'populate_auto_fill_fields': (bool,),  # noqa: E501
            'expires_at': (int, none_type,),  # noqa: E501
        }

    @cached_property
    def discriminator():
        return None

    @staticmethod
    def init(data: any) -> "UnclaimedDraftCreateEmbeddedRequest":
        """
        Attempt to instantiate and hydrate a new instance of this class
        """
        return ApiClient().deserialize(
            response=type('obj_dict', (object,), {'data': json.dumps(data)}),
            response_type=[UnclaimedDraftCreateEmbeddedRequest],
            _check_type=True,
        )


    attribute_map = {
        'client_id': 'client_id',  # noqa: E501
        'requester_email_address': 'requester_email_address',  # noqa: E501
        'files': 'files',  # noqa: E501
        'file_urls': 'file_urls',  # noqa: E501
        'allow_ccs': 'allow_ccs',  # noqa: E501
        'allow_decline': 'allow_decline',  # noqa: E501
        'allow_reassign': 'allow_reassign',  # noqa: E501
        'attachments': 'attachments',  # noqa: E501
        'cc_email_addresses': 'cc_email_addresses',  # noqa: E501
        'custom_fields': 'custom_fields',  # noqa: E501
        'editor_options': 'editor_options',  # noqa: E501
        'field_options': 'field_options',  # noqa: E501
        'force_signer_page': 'force_signer_page',  # noqa: E501
        'force_subject_message': 'force_subject_message',  # noqa: E501
        'form_field_groups': 'form_field_groups',  # noqa: E501
        'form_field_rules': 'form_field_rules',  # noqa: E501
        'form_fields_per_document': 'form_fields_per_document',  # noqa: E501
        'hide_text_tags': 'hide_text_tags',  # noqa: E501
        'hold_request': 'hold_request',  # noqa: E501
        'is_for_embedded_signing': 'is_for_embedded_signing',  # noqa: E501
        'message': 'message',  # noqa: E501
        'metadata': 'metadata',  # noqa: E501
        'requesting_redirect_url': 'requesting_redirect_url',  # noqa: E501
        'show_preview': 'show_preview',  # noqa: E501
        'show_progress_stepper': 'show_progress_stepper',  # noqa: E501
        'signers': 'signers',  # noqa: E501
        'signing_options': 'signing_options',  # noqa: E501
        'signing_redirect_url': 'signing_redirect_url',  # noqa: E501
        'skip_me_now': 'skip_me_now',  # noqa: E501
        'subject': 'subject',  # noqa: E501
        'test_mode': 'test_mode',  # noqa: E501
        'type': 'type',  # noqa: E501
        'use_preexisting_fields': 'use_preexisting_fields',  # noqa: E501
        'use_text_tags': 'use_text_tags',  # noqa: E501
        'populate_auto_fill_fields': 'populate_auto_fill_fields',  # noqa: E501
        'expires_at': 'expires_at',  # noqa: E501
    }

    read_only_vars = {
    }

    _composed_schemas = {}

    @classmethod
    @convert_js_args_to_python_args
    def _from_openapi_data(cls, client_id, requester_email_address, *args, **kwargs):  # noqa: E501
        """UnclaimedDraftCreateEmbeddedRequest - a model defined in OpenAPI

        Args:
            client_id (str): Client id of the app used to create the draft. Used to apply the branding and callback url defined for the app.
            requester_email_address (str): The email address of the user that should be designated as the requester of this draft, if the draft type is `request_signature`.

        Keyword Args:
            _check_type (bool): if True, values for parameters in openapi_types
                                will be type checked and a TypeError will be
                                raised if the wrong type is input.
                                Defaults to True
            _path_to_item (tuple/list): This is a list of keys or values to
                                drill down to the model in received_data
                                when deserializing a response
            _spec_property_naming (bool): True if the variable names in the input data
                                are serialized names, as specified in the OpenAPI document.
                                False if the variable names in the input data
                                are pythonic names, e.g. snake case (default)
            _configuration (Configuration): the instance to use when
                                deserializing a file_type parameter.
                                If passed, type conversion is attempted
                                If omitted no type conversion is done.
            _visited_composed_classes (tuple): This stores a tuple of
                                classes that we have traveled through so that
                                if we see that class again we will not use its
                                discriminator again.
                                When traveling through a discriminator, the
                                composed schema that is
                                is traveled through is added to this set.
                                For example if Animal has a discriminator
                                petType and we pass in "Dog", and the class Dog
                                includes Animal, we move through Animal
                                once using the discriminator, and pick Dog.
                                Then in Dog, we will make an instance of the
                                Animal class but this time we won't travel
                                through its discriminator because we passed in
                                _visited_composed_classes = (Animal,)
            files ([file_type]): Use `files[]` to indicate the uploaded file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.. [optional]  # noqa: E501
            file_urls ([str]): Use `file_urls[]` to have Dropbox Sign download the file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.. [optional]  # noqa: E501
            allow_ccs (bool): This allows the requester to specify whether the user is allowed to provide email addresses to CC when claiming the draft.. [optional] if omitted the server will use the default value of True  # noqa: E501
            allow_decline (bool): Allows signers to decline to sign a document if `true`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            allow_reassign (bool): Allows signers to reassign their signature requests to other signers if set to `true`. Defaults to `false`.  **Note**: Only available for Premium plan and higher.. [optional] if omitted the server will use the default value of False  # noqa: E501
            attachments ([SubAttachment]): A list describing the attachments. [optional]  # noqa: E501
            cc_email_addresses ([str]): The email addresses that should be CCed.. [optional]  # noqa: E501
            custom_fields ([SubCustomField]): When used together with merge fields, `custom_fields` allows users to add pre-filled data to their signature requests.  Pre-filled data can be used with \"send-once\" signature requests by adding merge fields with `form_fields_per_document` or [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) while passing values back with `custom_fields` together in one API call.  For using pre-filled on repeatable signature requests, merge fields are added to templates in the Dropbox Sign UI or by calling [/template/create_embedded_draft](/api/reference/operation/templateCreateEmbeddedDraft) and then passing `custom_fields` on subsequent signature requests referencing that template.. [optional]  # noqa: E501
            editor_options (SubEditorOptions): [optional]  # noqa: E501
            field_options (SubFieldOptions): [optional]  # noqa: E501
            force_signer_page (bool): Provide users the ability to review/edit the signers.. [optional] if omitted the server will use the default value of False  # noqa: E501
            force_subject_message (bool): Provide users the ability to review/edit the subject and message.. [optional] if omitted the server will use the default value of False  # noqa: E501
            form_field_groups ([SubFormFieldGroup]): Group information for fields defined in `form_fields_per_document`. String-indexed JSON array with `group_label` and `requirement` keys. `form_fields_per_document` must contain fields referencing a group defined in `form_field_groups`.. [optional]  # noqa: E501
            form_field_rules ([SubFormFieldRule]): Conditional Logic rules for fields defined in `form_fields_per_document`.. [optional]  # noqa: E501
            form_fields_per_document ([SubFormFieldsPerDocumentBase]): The fields that should appear on the document, expressed as an array of objects. (We're currently fixing a bug where this property only accepts a two-dimensional array. You can read about it here: <a href=\"/docs/openapi/form-fields-per-document\" target=\"_blank\">Using Form Fields per Document</a>.)  **NOTE**: Fields like **text**, **dropdown**, **checkbox**, **radio**, and **hyperlink** have additional required and optional parameters. Check out the list of [additional parameters](/api/reference/constants/#form-fields-per-document) for these field types.  * Text Field use `SubFormFieldsPerDocumentText` * Dropdown Field use `SubFormFieldsPerDocumentDropdown` * Hyperlink Field use `SubFormFieldsPerDocumentHyperlink` * Checkbox Field use `SubFormFieldsPerDocumentCheckbox` * Radio Field use `SubFormFieldsPerDocumentRadio` * Signature Field use `SubFormFieldsPerDocumentSignature` * Date Signed Field use `SubFormFieldsPerDocumentDateSigned` * Initials Field use `SubFormFieldsPerDocumentInitials` * Text Merge Field use `SubFormFieldsPerDocumentTextMerge` * Checkbox Merge Field use `SubFormFieldsPerDocumentCheckboxMerge`. [optional]  # noqa: E501
            hide_text_tags (bool): Send with a value of `true` if you wish to enable automatic Text Tag removal. Defaults to `false`. When using Text Tags it is preferred that you set this to `false` and hide your tags with white text or something similar because the automatic removal system can cause unwanted clipping. See the [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) walkthrough for more details.. [optional] if omitted the server will use the default value of False  # noqa: E501
            hold_request (bool): The request from this draft will not automatically send to signers post-claim if set to `true`. Requester must [release](/api/reference/operation/signatureRequestReleaseHold/) the request from hold when ready to send. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            is_for_embedded_signing (bool): The request created from this draft will also be signable in embedded mode if set to `true`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            message (str): The custom message in the email that will be sent to the signers.. [optional]  # noqa: E501
            metadata ({str: (bool, date, datetime, dict, float, int, list, str, none_type)}): Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer's order number for look up when receiving events for the signature request.  Each request can include up to 10 metadata keys (or 50 nested metadata keys), with key names up to 40 characters long and values up to 1000 characters long.. [optional]  # noqa: E501
            requesting_redirect_url (str): The URL you want signers redirected to after they successfully request a signature.. [optional]  # noqa: E501
            show_preview (bool): This allows the requester to enable the editor/preview experience.  - `show_preview=true`: Allows requesters to enable the editor/preview experience. - `show_preview=false`: Allows requesters to disable the editor/preview experience.. [optional]  # noqa: E501
            show_progress_stepper (bool): When only one step remains in the signature request process and this parameter is set to `false` then the progress stepper will be hidden.. [optional] if omitted the server will use the default value of True  # noqa: E501
            signers ([SubUnclaimedDraftSigner]): Add Signers to your Unclaimed Draft Signature Request.. [optional]  # noqa: E501
            signing_options (SubSigningOptions): [optional]  # noqa: E501
            signing_redirect_url (str): The URL you want signers redirected to after they successfully sign.. [optional]  # noqa: E501
            skip_me_now (bool): Disables the \"Me (Now)\" option for the person preparing the document. Does not work with type `send_document`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            subject (str): The subject in the email that will be sent to the signers.. [optional]  # noqa: E501
            test_mode (bool): Whether this is a test, the signature request created from this draft will not be legally binding if set to `true`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            type (str): The type of the draft. By default this is `request_signature`, but you can set it to `send_document` if you want to self sign a document and download it.. [optional] if omitted the server will use the default value of "request_signature"  # noqa: E501
            use_preexisting_fields (bool): Set `use_text_tags` to `true` to enable [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) parsing in your document (defaults to disabled, or `false`). Alternatively, if your PDF contains pre-defined fields, enable the detection of these fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`). Currently we only support use of either `use_text_tags` or `use_preexisting_fields` parameter, not both.. [optional] if omitted the server will use the default value of False  # noqa: E501
            use_text_tags (bool): Set `use_text_tags` to `true` to enable [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) parsing in your document (defaults to disabled, or `false`). Alternatively, if your PDF contains pre-defined fields, enable the detection of these fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`). Currently we only support use of either `use_text_tags` or `use_preexisting_fields` parameter, not both.. [optional] if omitted the server will use the default value of False  # noqa: E501
            populate_auto_fill_fields (bool): Controls whether [auto fill fields](https://faq.hellosign.com/hc/en-us/articles/360051467511-Auto-Fill-Fields) can automatically populate a signer's information during signing.  ⚠️ **Note** ⚠️: Keep your signer's information safe by ensuring that the _signer on your signature request is the intended party_ before using this feature.. [optional] if omitted the server will use the default value of False  # noqa: E501
            expires_at (int, none_type): When the signature request will expire. Unsigned signatures will be moved to the expired status, and no longer signable. See [Signature Request Expiration Date](https://developers.hellosign.com/docs/signature-request/expiration/) for details.  **Note**: This does not correspond to the **expires_at** returned in the response.. [optional]  # noqa: E501
        """

        _check_type = kwargs.pop('_check_type', True)
        _spec_property_naming = kwargs.pop('_spec_property_naming', False)
        _path_to_item = kwargs.pop('_path_to_item', ())
        _configuration = kwargs.pop('_configuration', None)
        _visited_composed_classes = kwargs.pop('_visited_composed_classes', ())

        self = super(OpenApiModel, cls).__new__(cls)

        if args:
            raise ApiTypeError(
                "Invalid positional arguments=%s passed to %s. Remove those invalid positional arguments." % (
                    args,
                    self.__class__.__name__,
                ),
                path_to_item=_path_to_item,
                valid_classes=(self.__class__,),
            )

        self._data_store = {}
        self._check_type = _check_type
        self._spec_property_naming = _spec_property_naming
        self._path_to_item = _path_to_item
        self._configuration = _configuration
        self._visited_composed_classes = _visited_composed_classes + (self.__class__,)

        self.client_id = client_id
        self.requester_email_address = requester_email_address
        for var_name, var_value in kwargs.items():
            if var_name not in self.attribute_map and \
                        self._configuration is not None and \
                        self._configuration.discard_unknown_keys and \
                        self.additional_properties_type is None:
                # discard variable.
                continue
            setattr(self, var_name, var_value)
        return self

    required_properties = set([
        '_data_store',
        '_check_type',
        '_spec_property_naming',
        '_path_to_item',
        '_configuration',
        '_visited_composed_classes',
    ])

    @convert_js_args_to_python_args
    def __init__(self, client_id, requester_email_address, *args, **kwargs):  # noqa: E501
        """UnclaimedDraftCreateEmbeddedRequest - a model defined in OpenAPI

        Args:
            client_id (str): Client id of the app used to create the draft. Used to apply the branding and callback url defined for the app.
            requester_email_address (str): The email address of the user that should be designated as the requester of this draft, if the draft type is `request_signature`.

        Keyword Args:
            _check_type (bool): if True, values for parameters in openapi_types
                                will be type checked and a TypeError will be
                                raised if the wrong type is input.
                                Defaults to True
            _path_to_item (tuple/list): This is a list of keys or values to
                                drill down to the model in received_data
                                when deserializing a response
            _spec_property_naming (bool): True if the variable names in the input data
                                are serialized names, as specified in the OpenAPI document.
                                False if the variable names in the input data
                                are pythonic names, e.g. snake case (default)
            _configuration (Configuration): the instance to use when
                                deserializing a file_type parameter.
                                If passed, type conversion is attempted
                                If omitted no type conversion is done.
            _visited_composed_classes (tuple): This stores a tuple of
                                classes that we have traveled through so that
                                if we see that class again we will not use its
                                discriminator again.
                                When traveling through a discriminator, the
                                composed schema that is
                                is traveled through is added to this set.
                                For example if Animal has a discriminator
                                petType and we pass in "Dog", and the class Dog
                                includes Animal, we move through Animal
                                once using the discriminator, and pick Dog.
                                Then in Dog, we will make an instance of the
                                Animal class but this time we won't travel
                                through its discriminator because we passed in
                                _visited_composed_classes = (Animal,)
            files ([file_type]): Use `files[]` to indicate the uploaded file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.. [optional]  # noqa: E501
            file_urls ([str]): Use `file_urls[]` to have Dropbox Sign download the file(s) to send for signature.  This endpoint requires either **files** or **file_urls[]**, but not both.. [optional]  # noqa: E501
            allow_ccs (bool): This allows the requester to specify whether the user is allowed to provide email addresses to CC when claiming the draft.. [optional] if omitted the server will use the default value of True  # noqa: E501
            allow_decline (bool): Allows signers to decline to sign a document if `true`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            allow_reassign (bool): Allows signers to reassign their signature requests to other signers if set to `true`. Defaults to `false`.  **Note**: Only available for Premium plan and higher.. [optional] if omitted the server will use the default value of False  # noqa: E501
            attachments ([SubAttachment]): A list describing the attachments. [optional]  # noqa: E501
            cc_email_addresses ([str]): The email addresses that should be CCed.. [optional]  # noqa: E501
            custom_fields ([SubCustomField]): When used together with merge fields, `custom_fields` allows users to add pre-filled data to their signature requests.  Pre-filled data can be used with \"send-once\" signature requests by adding merge fields with `form_fields_per_document` or [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) while passing values back with `custom_fields` together in one API call.  For using pre-filled on repeatable signature requests, merge fields are added to templates in the Dropbox Sign UI or by calling [/template/create_embedded_draft](/api/reference/operation/templateCreateEmbeddedDraft) and then passing `custom_fields` on subsequent signature requests referencing that template.. [optional]  # noqa: E501
            editor_options (SubEditorOptions): [optional]  # noqa: E501
            field_options (SubFieldOptions): [optional]  # noqa: E501
            force_signer_page (bool): Provide users the ability to review/edit the signers.. [optional] if omitted the server will use the default value of False  # noqa: E501
            force_subject_message (bool): Provide users the ability to review/edit the subject and message.. [optional] if omitted the server will use the default value of False  # noqa: E501
            form_field_groups ([SubFormFieldGroup]): Group information for fields defined in `form_fields_per_document`. String-indexed JSON array with `group_label` and `requirement` keys. `form_fields_per_document` must contain fields referencing a group defined in `form_field_groups`.. [optional]  # noqa: E501
            form_field_rules ([SubFormFieldRule]): Conditional Logic rules for fields defined in `form_fields_per_document`.. [optional]  # noqa: E501
            form_fields_per_document ([SubFormFieldsPerDocumentBase]): The fields that should appear on the document, expressed as an array of objects. (We're currently fixing a bug where this property only accepts a two-dimensional array. You can read about it here: <a href=\"/docs/openapi/form-fields-per-document\" target=\"_blank\">Using Form Fields per Document</a>.)  **NOTE**: Fields like **text**, **dropdown**, **checkbox**, **radio**, and **hyperlink** have additional required and optional parameters. Check out the list of [additional parameters](/api/reference/constants/#form-fields-per-document) for these field types.  * Text Field use `SubFormFieldsPerDocumentText` * Dropdown Field use `SubFormFieldsPerDocumentDropdown` * Hyperlink Field use `SubFormFieldsPerDocumentHyperlink` * Checkbox Field use `SubFormFieldsPerDocumentCheckbox` * Radio Field use `SubFormFieldsPerDocumentRadio` * Signature Field use `SubFormFieldsPerDocumentSignature` * Date Signed Field use `SubFormFieldsPerDocumentDateSigned` * Initials Field use `SubFormFieldsPerDocumentInitials` * Text Merge Field use `SubFormFieldsPerDocumentTextMerge` * Checkbox Merge Field use `SubFormFieldsPerDocumentCheckboxMerge`. [optional]  # noqa: E501
            hide_text_tags (bool): Send with a value of `true` if you wish to enable automatic Text Tag removal. Defaults to `false`. When using Text Tags it is preferred that you set this to `false` and hide your tags with white text or something similar because the automatic removal system can cause unwanted clipping. See the [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) walkthrough for more details.. [optional] if omitted the server will use the default value of False  # noqa: E501
            hold_request (bool): The request from this draft will not automatically send to signers post-claim if set to `true`. Requester must [release](/api/reference/operation/signatureRequestReleaseHold/) the request from hold when ready to send. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            is_for_embedded_signing (bool): The request created from this draft will also be signable in embedded mode if set to `true`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            message (str): The custom message in the email that will be sent to the signers.. [optional]  # noqa: E501
            metadata ({str: (bool, date, datetime, dict, float, int, list, str, none_type)}): Key-value data that should be attached to the signature request. This metadata is included in all API responses and events involving the signature request. For example, use the metadata field to store a signer's order number for look up when receiving events for the signature request.  Each request can include up to 10 metadata keys (or 50 nested metadata keys), with key names up to 40 characters long and values up to 1000 characters long.. [optional]  # noqa: E501
            requesting_redirect_url (str): The URL you want signers redirected to after they successfully request a signature.. [optional]  # noqa: E501
            show_preview (bool): This allows the requester to enable the editor/preview experience.  - `show_preview=true`: Allows requesters to enable the editor/preview experience. - `show_preview=false`: Allows requesters to disable the editor/preview experience.. [optional]  # noqa: E501
            show_progress_stepper (bool): When only one step remains in the signature request process and this parameter is set to `false` then the progress stepper will be hidden.. [optional] if omitted the server will use the default value of True  # noqa: E501
            signers ([SubUnclaimedDraftSigner]): Add Signers to your Unclaimed Draft Signature Request.. [optional]  # noqa: E501
            signing_options (SubSigningOptions): [optional]  # noqa: E501
            signing_redirect_url (str): The URL you want signers redirected to after they successfully sign.. [optional]  # noqa: E501
            skip_me_now (bool): Disables the \"Me (Now)\" option for the person preparing the document. Does not work with type `send_document`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            subject (str): The subject in the email that will be sent to the signers.. [optional]  # noqa: E501
            test_mode (bool): Whether this is a test, the signature request created from this draft will not be legally binding if set to `true`. Defaults to `false`.. [optional] if omitted the server will use the default value of False  # noqa: E501
            type (str): The type of the draft. By default this is `request_signature`, but you can set it to `send_document` if you want to self sign a document and download it.. [optional] if omitted the server will use the default value of "request_signature"  # noqa: E501
            use_preexisting_fields (bool): Set `use_text_tags` to `true` to enable [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) parsing in your document (defaults to disabled, or `false`). Alternatively, if your PDF contains pre-defined fields, enable the detection of these fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`). Currently we only support use of either `use_text_tags` or `use_preexisting_fields` parameter, not both.. [optional] if omitted the server will use the default value of False  # noqa: E501
            use_text_tags (bool): Set `use_text_tags` to `true` to enable [Text Tags](https://app.hellosign.com/api/textTagsWalkthrough#TextTagIntro) parsing in your document (defaults to disabled, or `false`). Alternatively, if your PDF contains pre-defined fields, enable the detection of these fields by setting the `use_preexisting_fields` to `true` (defaults to disabled, or `false`). Currently we only support use of either `use_text_tags` or `use_preexisting_fields` parameter, not both.. [optional] if omitted the server will use the default value of False  # noqa: E501
            populate_auto_fill_fields (bool): Controls whether [auto fill fields](https://faq.hellosign.com/hc/en-us/articles/360051467511-Auto-Fill-Fields) can automatically populate a signer's information during signing.  ⚠️ **Note** ⚠️: Keep your signer's information safe by ensuring that the _signer on your signature request is the intended party_ before using this feature.. [optional] if omitted the server will use the default value of False  # noqa: E501
            expires_at (int, none_type): When the signature request will expire. Unsigned signatures will be moved to the expired status, and no longer signable. See [Signature Request Expiration Date](https://developers.hellosign.com/docs/signature-request/expiration/) for details.  **Note**: This does not correspond to the **expires_at** returned in the response.. [optional]  # noqa: E501
        """

        _check_type = kwargs.pop('_check_type', True)
        _spec_property_naming = kwargs.pop('_spec_property_naming', False)
        _path_to_item = kwargs.pop('_path_to_item', ())
        _configuration = kwargs.pop('_configuration', None)
        _visited_composed_classes = kwargs.pop('_visited_composed_classes', ())

        if args:
            raise ApiTypeError(
                "Invalid positional arguments=%s passed to %s. Remove those invalid positional arguments." % (
                    args,
                    self.__class__.__name__,
                ),
                path_to_item=_path_to_item,
                valid_classes=(self.__class__,),
            )

        self._data_store = {}
        self._check_type = _check_type
        self._spec_property_naming = _spec_property_naming
        self._path_to_item = _path_to_item
        self._configuration = _configuration
        self._visited_composed_classes = _visited_composed_classes + (self.__class__,)

        self.client_id = client_id
        self.requester_email_address = requester_email_address
        for var_name, var_value in kwargs.items():
            if var_name not in self.attribute_map and \
                        self._configuration is not None and \
                        self._configuration.discard_unknown_keys and \
                        self.additional_properties_type is None:
                # discard variable.
                continue
            setattr(self, var_name, var_value)
            if var_name in self.read_only_vars:
                raise ApiAttributeError(f"`{var_name}` is a read-only attribute. Use `from_openapi_data` to instantiate "
                                     f"class with read only attributes.")
