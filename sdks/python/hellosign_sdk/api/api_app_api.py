"""
    Dropbox Sign API

    Dropbox Sign v3 API  # noqa: E501

    The version of the OpenAPI document: 3.0.0
    Contact: apisupport@hellosign.com
    Generated by: https://openapi-generator.tech
"""


import re  # noqa: F401
import sys  # noqa: F401

from hellosign_sdk.api_client import ApiClient, ApiException, Endpoint as _Endpoint
from hellosign_sdk.model_utils import (  # noqa: F401
    check_allowed_values,
    check_validations,
    date,
    datetime,
    file_type,
    none_type,
    validate_and_convert_types
)
from hellosign_sdk.model.api_app_create_request import ApiAppCreateRequest
from hellosign_sdk.model.api_app_get_response import ApiAppGetResponse
from hellosign_sdk.model.api_app_list_response import ApiAppListResponse
from hellosign_sdk.model.api_app_update_request import ApiAppUpdateRequest
from hellosign_sdk.model.error_response import ErrorResponse


class ApiAppApi(object):
    """NOTE: This class is auto generated by OpenAPI Generator
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """

    def __init__(self, api_client=None):
        if api_client is None:
            api_client = ApiClient()
        self.api_client = api_client
        self.api_app_create_endpoint = _Endpoint(
            settings={
                'response_type': (ApiAppGetResponse,),
                'auth': [
                    'api_key',
                    'oauth2'
                ],
                'endpoint_path': '/api_app',
                'operation_id': 'api_app_create',
                'http_method': 'POST',
                'servers': None,
            },
            params_map={
                'all': [
                    'api_app_create_request',
                ],
                'required': [
                    'api_app_create_request',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'api_app_create_request':
                        (ApiAppCreateRequest,),
                },
                'attribute_map': {
                },
                'location_map': {
                    'api_app_create_request': 'body',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [
                    'application/json',
                    'multipart/form-data'
                ]
            },
            api_client=api_client
        )
        self.api_app_delete_endpoint = _Endpoint(
            settings={
                'response_type': None,
                'auth': [
                    'api_key',
                    'oauth2'
                ],
                'endpoint_path': '/api_app/{client_id}',
                'operation_id': 'api_app_delete',
                'http_method': 'DELETE',
                'servers': None,
            },
            params_map={
                'all': [
                    'client_id',
                ],
                'required': [
                    'client_id',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'client_id':
                        (str,),
                },
                'attribute_map': {
                    'client_id': 'client_id',
                },
                'location_map': {
                    'client_id': 'path',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [],
            },
            api_client=api_client
        )
        self.api_app_get_endpoint = _Endpoint(
            settings={
                'response_type': (ApiAppGetResponse,),
                'auth': [
                    'api_key',
                    'oauth2'
                ],
                'endpoint_path': '/api_app/{client_id}',
                'operation_id': 'api_app_get',
                'http_method': 'GET',
                'servers': None,
            },
            params_map={
                'all': [
                    'client_id',
                ],
                'required': [
                    'client_id',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'client_id':
                        (str,),
                },
                'attribute_map': {
                    'client_id': 'client_id',
                },
                'location_map': {
                    'client_id': 'path',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [],
            },
            api_client=api_client
        )
        self.api_app_list_endpoint = _Endpoint(
            settings={
                'response_type': (ApiAppListResponse,),
                'auth': [
                    'api_key',
                    'oauth2'
                ],
                'endpoint_path': '/api_app/list',
                'operation_id': 'api_app_list',
                'http_method': 'GET',
                'servers': None,
            },
            params_map={
                'all': [
                    'page',
                    'page_size',
                ],
                'required': [],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'page':
                        (int,),
                    'page_size':
                        (int,),
                },
                'attribute_map': {
                    'page': 'page',
                    'page_size': 'page_size',
                },
                'location_map': {
                    'page': 'query',
                    'page_size': 'query',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [],
            },
            api_client=api_client
        )
        self.api_app_update_endpoint = _Endpoint(
            settings={
                'response_type': (ApiAppGetResponse,),
                'auth': [
                    'api_key',
                    'oauth2'
                ],
                'endpoint_path': '/api_app/{client_id}',
                'operation_id': 'api_app_update',
                'http_method': 'PUT',
                'servers': None,
            },
            params_map={
                'all': [
                    'client_id',
                    'api_app_update_request',
                ],
                'required': [
                    'client_id',
                    'api_app_update_request',
                ],
                'nullable': [
                ],
                'enum': [
                ],
                'validation': [
                ]
            },
            root_map={
                'validations': {
                },
                'allowed_values': {
                },
                'openapi_types': {
                    'client_id':
                        (str,),
                    'api_app_update_request':
                        (ApiAppUpdateRequest,),
                },
                'attribute_map': {
                    'client_id': 'client_id',
                },
                'location_map': {
                    'client_id': 'path',
                    'api_app_update_request': 'body',
                },
                'collection_format_map': {
                }
            },
            headers_map={
                'accept': [
                    'application/json'
                ],
                'content_type': [
                    'application/json',
                    'multipart/form-data'
                ]
            },
            api_client=api_client
        )

    def api_app_create(
        self,
        api_app_create_request,
        **kwargs
    ) -> "ApiAppGetResponse":
        """Create API App  # noqa: E501

        Creates a new API App.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.api_app_create(api_app_create_request, async_req=True)
        >>> result = thread.get()

        Args:
            api_app_create_request (ApiAppCreateRequest):

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            async_req (bool): execute request asynchronously

        Returns:
            ApiAppGetResponse
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['api_app_create_request'] = \
            api_app_create_request
        try:
            return self.api_app_create_endpoint.call_with_http_info(**kwargs)
        except ApiException as e:
            if e.status == 200:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ApiAppGetResponse],
                    _check_type=True,
                )

                raise e
            range_code = "4XX"[0]
            range_code_left = int(f"{range_code}00")
            range_code_right = int(f"{range_code}99")

            if range_code_left <= e.status <= range_code_right:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ErrorResponse],
                    _check_type=True,
                )

                raise e

    def api_app_delete(
        self,
        client_id,
        **kwargs
    ) -> None:
        """Delete API App  # noqa: E501

        Deletes an API App. Can only be invoked for apps you own.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.api_app_delete(client_id, async_req=True)
        >>> result = thread.get()

        Args:
            client_id (str): The client id of the API App to delete.

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            async_req (bool): execute request asynchronously

        Returns:
            None
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['client_id'] = \
            client_id
        return self.api_app_delete_endpoint.call_with_http_info(**kwargs)

    def api_app_get(
        self,
        client_id,
        **kwargs
    ) -> "ApiAppGetResponse":
        """Get API App  # noqa: E501

        Returns an object with information about an API App.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.api_app_get(client_id, async_req=True)
        >>> result = thread.get()

        Args:
            client_id (str): The client id of the API App to retrieve.

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            async_req (bool): execute request asynchronously

        Returns:
            ApiAppGetResponse
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['client_id'] = \
            client_id
        try:
            return self.api_app_get_endpoint.call_with_http_info(**kwargs)
        except ApiException as e:
            if e.status == 200:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ApiAppGetResponse],
                    _check_type=True,
                )

                raise e
            range_code = "4XX"[0]
            range_code_left = int(f"{range_code}00")
            range_code_right = int(f"{range_code}99")

            if range_code_left <= e.status <= range_code_right:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ErrorResponse],
                    _check_type=True,
                )

                raise e

    def api_app_list(
        self,
        **kwargs
    ) -> "ApiAppListResponse":
        """List API Apps  # noqa: E501

        Returns a list of API Apps that are accessible by you. If you are on a team with an Admin or Developer role, this list will include apps owned by teammates.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.api_app_list(async_req=True)
        >>> result = thread.get()


        Keyword Args:
            page (int): Which page number of the API App List to return. Defaults to `1`.. [optional] if omitted the server will use the default value of 1
            page_size (int): Number of objects to be returned per page. Must be between `1` and `100`. Default is `20`.. [optional] if omitted the server will use the default value of 20
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            async_req (bool): execute request asynchronously

        Returns:
            ApiAppListResponse
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        try:
            return self.api_app_list_endpoint.call_with_http_info(**kwargs)
        except ApiException as e:
            if e.status == 200:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ApiAppListResponse],
                    _check_type=True,
                )

                raise e
            range_code = "4XX"[0]
            range_code_left = int(f"{range_code}00")
            range_code_right = int(f"{range_code}99")

            if range_code_left <= e.status <= range_code_right:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ErrorResponse],
                    _check_type=True,
                )

                raise e

    def api_app_update(
        self,
        client_id,
        api_app_update_request,
        **kwargs
    ) -> "ApiAppGetResponse":
        """Update API App  # noqa: E501

        Updates an existing API App. Can only be invoked for apps you own. Only the fields you provide will be updated. If you wish to clear an existing optional field, provide an empty string.  # noqa: E501
        This method makes a synchronous HTTP request by default. To make an
        asynchronous HTTP request, please pass async_req=True

        >>> thread = api.api_app_update(client_id, api_app_update_request, async_req=True)
        >>> result = thread.get()

        Args:
            client_id (str): The client id of the API App to update.
            api_app_update_request (ApiAppUpdateRequest):

        Keyword Args:
            _return_http_data_only (bool): response data without head status
                code and headers. Default is True.
            _preload_content (bool): if False, the urllib3.HTTPResponse object
                will be returned without reading/decoding response data.
                Default is True.
            _request_timeout (int/float/tuple): timeout setting for this request. If
                one number provided, it will be total request timeout. It can also
                be a pair (tuple) of (connection, read) timeouts.
                Default is None.
            _check_input_type (bool): specifies if type checking
                should be done one the data sent to the server.
                Default is True.
            _check_return_type (bool): specifies if type checking
                should be done one the data received from the server.
                Default is True.
            _spec_property_naming (bool): True if the variable names in the input data
                are serialized names, as specified in the OpenAPI document.
                False if the variable names in the input data
                are pythonic names, e.g. snake case (default)
            _content_type (str/None): force body content-type.
                Default is None and content-type will be predicted by allowed
                content-types and body.
            _host_index (int/None): specifies the index of the server
                that we want to use.
                Default is read from the configuration.
            async_req (bool): execute request asynchronously

        Returns:
            ApiAppGetResponse
                If the method is called asynchronously, returns the request
                thread.
        """
        kwargs['async_req'] = kwargs.get(
            'async_req', False
        )
        kwargs['_return_http_data_only'] = kwargs.get(
            '_return_http_data_only', True
        )
        kwargs['_preload_content'] = kwargs.get(
            '_preload_content', True
        )
        kwargs['_request_timeout'] = kwargs.get(
            '_request_timeout', None
        )
        kwargs['_check_input_type'] = kwargs.get(
            '_check_input_type', True
        )
        kwargs['_check_return_type'] = kwargs.get(
            '_check_return_type', True
        )
        kwargs['_spec_property_naming'] = kwargs.get(
            '_spec_property_naming', False
        )
        kwargs['_content_type'] = kwargs.get(
            '_content_type')
        kwargs['_host_index'] = kwargs.get('_host_index')
        kwargs['client_id'] = \
            client_id
        kwargs['api_app_update_request'] = \
            api_app_update_request
        try:
            return self.api_app_update_endpoint.call_with_http_info(**kwargs)
        except ApiException as e:
            if e.status == 200:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ApiAppGetResponse],
                    _check_type=True,
                )

                raise e
            range_code = "4XX"[0]
            range_code_left = int(f"{range_code}00")
            range_code_right = int(f"{range_code}99")

            if range_code_left <= e.status <= range_code_right:
                e.body = self.api_client.deserialize(
                    response=type('obj_dict', (object,), {'data': e.body}),
                    response_type=[ErrorResponse],
                    _check_type=True,
                )

                raise e

