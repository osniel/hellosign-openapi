<?php
/**
 * BulkSendJobApi
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

namespace Dropbox\Sign\Api;

use Dropbox\Sign\ApiException;
use Dropbox\Sign\Configuration;
use Dropbox\Sign\HeaderSelector;
use Dropbox\Sign\Model;
use Dropbox\Sign\ObjectSerializer;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Promise;
use GuzzleHttp\Psr7;
use GuzzleHttp\RequestOptions;
use GuzzleHttp\Utils;
use InvalidArgumentException;
use RuntimeException;

/**
 * BulkSendJobApi Class Doc Comment
 *
 * @category Class
 * @author   OpenAPI Generator team
 * @see     https://openapi-generator.tech
 */
class BulkSendJobApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param int $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        Configuration $config = null,
        ClientInterface $client = null,
        HeaderSelector $selector = null,
        int $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex(int $hostIndex): void
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation bulkSendJobGet
     *
     * Get Bulk Send Job
     *
     * @param string $bulk_send_job_id The id of the BulkSendJob to retrieve. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\BulkSendJobGetResponse
     */
    public function bulkSendJobGet(string $bulk_send_job_id)
    {
        list($response) = $this->bulkSendJobGetWithHttpInfo($bulk_send_job_id);

        return $response;
    }

    /**
     * Operation bulkSendJobGetWithHttpInfo
     *
     * Get Bulk Send Job
     *
     * @param string $bulk_send_job_id The id of the BulkSendJob to retrieve. (required)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of Model\BulkSendJobGetResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkSendJobGetWithHttpInfo(string $bulk_send_job_id)
    {
        $request = $this->bulkSendJobGetRequest($bulk_send_job_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode === 200) {
                if ('\Dropbox\Sign\Model\BulkSendJobGetResponse' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                }

                return [
                    ObjectSerializer::deserialize($content, '\Dropbox\Sign\Model\BulkSendJobGetResponse', []),
                    $response->getStatusCode(),
                    $response->getHeaders(),
                ];
            }

            $rangeCodeLeft = (int) (substr('4XX', 0, 1) . '00');
            $rangeCodeRight = (int) (substr('4XX', 0, 1) . '99');
            if ($statusCode >= $rangeCodeLeft && $statusCode <= $rangeCodeRight) {
                if ('\Dropbox\Sign\Model\ErrorResponse' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                }

                return [
                    ObjectSerializer::deserialize($content, '\Dropbox\Sign\Model\ErrorResponse', []),
                    $response->getStatusCode(),
                    $response->getHeaders(),
                ];
            }

            $returnType = '\Dropbox\Sign\Model\BulkSendJobGetResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            $statusCode = $e->getCode();

            if ($statusCode === 200) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Dropbox\Sign\Model\BulkSendJobGetResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }

            $rangeCodeLeft = (int) (substr('4XX', 0, 1) . '00');
            $rangeCodeRight = (int) (substr('4XX', 0, 1) . '99');
            if ($statusCode >= $rangeCodeLeft && $statusCode <= $rangeCodeRight) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Dropbox\Sign\Model\ErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }

            throw $e;
        }
    }

    /**
     * Operation bulkSendJobGetAsync
     *
     * Get Bulk Send Job
     *
     * @param string $bulk_send_job_id The id of the BulkSendJob to retrieve. (required)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function bulkSendJobGetAsync(string $bulk_send_job_id)
    {
        return $this->bulkSendJobGetAsyncWithHttpInfo($bulk_send_job_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkSendJobGetAsyncWithHttpInfo
     *
     * Get Bulk Send Job
     *
     * @param string $bulk_send_job_id The id of the BulkSendJob to retrieve. (required)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function bulkSendJobGetAsyncWithHttpInfo(string $bulk_send_job_id)
    {
        $returnType = '\Dropbox\Sign\Model\BulkSendJobGetResponse';
        $request = $this->bulkSendJobGetRequest($bulk_send_job_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bulkSendJobGet'
     *
     * @param string $bulk_send_job_id The id of the BulkSendJob to retrieve. (required)
     *
     * @throws InvalidArgumentException
     * @return Psr7\Request
     */
    public function bulkSendJobGetRequest(string $bulk_send_job_id)
    {
        // verify the required parameter 'bulk_send_job_id' is set
        if ($bulk_send_job_id === null || (is_array($bulk_send_job_id) && count($bulk_send_job_id) === 0)) {
            throw new InvalidArgumentException(
                'Missing the required parameter $bulk_send_job_id when calling bulkSendJobGet'
            );
        }

        $resourcePath = '/bulk_send_job/{bulk_send_job_id}';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $formParams = [];
        $multipart = false;

        // path params
        if ($bulk_send_job_id !== null) {
            $resourcePath = str_replace(
                '{' . 'bulk_send_job_id' . '}',
                ObjectSerializer::toPathValue($bulk_send_job_id),
                $resourcePath
            );
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                if (!empty($body)) {
                    $multipartContents[] = [
                        'name' => 'body',
                        'contents' => $body,
                        'headers' => ['Content-Type' => 'application/json'],
                    ];
                }

                $httpBody = new Psr7\MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }
        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Psr7\Query::build($queryParams);

        return new Psr7\Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bulkSendJobList
     *
     * List Bulk Send Jobs
     *
     * @param int $page Which page number of the BulkSendJob List to return. Defaults to &#x60;1&#x60;. (optional, default to 1)
     * @param int $page_size Number of objects to be returned per page. Must be between &#x60;1&#x60; and &#x60;100&#x60;. Default is 20. (optional, default to 20)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return Model\BulkSendJobListResponse
     */
    public function bulkSendJobList(int $page = 1, int $page_size = 20)
    {
        list($response) = $this->bulkSendJobListWithHttpInfo($page, $page_size);

        return $response;
    }

    /**
     * Operation bulkSendJobListWithHttpInfo
     *
     * List Bulk Send Jobs
     *
     * @param int $page Which page number of the BulkSendJob List to return. Defaults to &#x60;1&#x60;. (optional, default to 1)
     * @param int $page_size Number of objects to be returned per page. Must be between &#x60;1&#x60; and &#x60;100&#x60;. Default is 20. (optional, default to 20)
     *
     * @throws ApiException on non-2xx response
     * @throws InvalidArgumentException
     * @return array of Model\BulkSendJobListResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function bulkSendJobListWithHttpInfo(int $page = 1, int $page_size = 20)
    {
        $request = $this->bulkSendJobListRequest($page, $page_size);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode === 200) {
                if ('\Dropbox\Sign\Model\BulkSendJobListResponse' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                }

                return [
                    ObjectSerializer::deserialize($content, '\Dropbox\Sign\Model\BulkSendJobListResponse', []),
                    $response->getStatusCode(),
                    $response->getHeaders(),
                ];
            }

            $rangeCodeLeft = (int) (substr('4XX', 0, 1) . '00');
            $rangeCodeRight = (int) (substr('4XX', 0, 1) . '99');
            if ($statusCode >= $rangeCodeLeft && $statusCode <= $rangeCodeRight) {
                if ('\Dropbox\Sign\Model\ErrorResponse' === '\SplFileObject') {
                    $content = $response->getBody(); //stream goes to serializer
                } else {
                    $content = (string) $response->getBody();
                }

                return [
                    ObjectSerializer::deserialize($content, '\Dropbox\Sign\Model\ErrorResponse', []),
                    $response->getStatusCode(),
                    $response->getHeaders(),
                ];
            }

            $returnType = '\Dropbox\Sign\Model\BulkSendJobListResponse';
            if ($returnType === '\SplFileObject') {
                $content = $response->getBody(); //stream goes to serializer
            } else {
                $content = (string) $response->getBody();
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders(),
            ];
        } catch (ApiException $e) {
            $statusCode = $e->getCode();

            if ($statusCode === 200) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Dropbox\Sign\Model\BulkSendJobListResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }

            $rangeCodeLeft = (int) (substr('4XX', 0, 1) . '00');
            $rangeCodeRight = (int) (substr('4XX', 0, 1) . '99');
            if ($statusCode >= $rangeCodeLeft && $statusCode <= $rangeCodeRight) {
                $data = ObjectSerializer::deserialize(
                    $e->getResponseBody(),
                    '\Dropbox\Sign\Model\ErrorResponse',
                    $e->getResponseHeaders()
                );
                $e->setResponseObject($data);
            }

            throw $e;
        }
    }

    /**
     * Operation bulkSendJobListAsync
     *
     * List Bulk Send Jobs
     *
     * @param int $page Which page number of the BulkSendJob List to return. Defaults to &#x60;1&#x60;. (optional, default to 1)
     * @param int $page_size Number of objects to be returned per page. Must be between &#x60;1&#x60; and &#x60;100&#x60;. Default is 20. (optional, default to 20)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function bulkSendJobListAsync(int $page = 1, int $page_size = 20)
    {
        return $this->bulkSendJobListAsyncWithHttpInfo($page, $page_size)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bulkSendJobListAsyncWithHttpInfo
     *
     * List Bulk Send Jobs
     *
     * @param int $page Which page number of the BulkSendJob List to return. Defaults to &#x60;1&#x60;. (optional, default to 1)
     * @param int $page_size Number of objects to be returned per page. Must be between &#x60;1&#x60; and &#x60;100&#x60;. Default is 20. (optional, default to 20)
     *
     * @throws InvalidArgumentException
     * @return Promise\PromiseInterface
     */
    public function bulkSendJobListAsyncWithHttpInfo(int $page = 1, int $page_size = 20)
    {
        $returnType = '\Dropbox\Sign\Model\BulkSendJobListResponse';
        $request = $this->bulkSendJobListRequest($page, $page_size);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    if ($returnType === '\SplFileObject') {
                        $content = $response->getBody(); //stream goes to serializer
                    } else {
                        $content = (string) $response->getBody();
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders(),
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bulkSendJobList'
     *
     * @param int $page Which page number of the BulkSendJob List to return. Defaults to &#x60;1&#x60;. (optional, default to 1)
     * @param int $page_size Number of objects to be returned per page. Must be between &#x60;1&#x60; and &#x60;100&#x60;. Default is 20. (optional, default to 20)
     *
     * @throws InvalidArgumentException
     * @return Psr7\Request
     */
    public function bulkSendJobListRequest(int $page = 1, int $page_size = 20)
    {
        $resourcePath = '/bulk_send_job/list';
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';

        $formParams = [];
        $multipart = false;

        // query params
        if ($page !== null) {
            if ('form' === 'form' && is_array($page)) {
                foreach ($page as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['page'] = $page;
            }
        }
        // query params
        if ($page_size !== null) {
            if ('form' === 'form' && is_array($page_size)) {
                foreach ($page_size as $key => $value) {
                    $queryParams[$key] = $value;
                }
            } else {
                $queryParams['page_size'] = $page_size;
            }
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['multipart/form-data']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem,
                        ];
                    }
                }
                // for HTTP post (form)
                if (!empty($body)) {
                    $multipartContents[] = [
                        'name' => 'body',
                        'contents' => $body,
                        'headers' => ['Content-Type' => 'application/json'],
                    ];
                }

                $httpBody = new Psr7\MultipartStream($multipartContents);
            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = Utils::jsonEncode($formParams);
            } else {
                // for HTTP post (form)
                $httpBody = Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ':' . $this->config->getPassword());
        }
        // this endpoint requires Bearer (JWT) authentication (access token)
        if (!empty($this->config->getAccessToken())) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = Psr7\Query::build($queryParams);

        return new Psr7\Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = $this->config->getOptions();
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
