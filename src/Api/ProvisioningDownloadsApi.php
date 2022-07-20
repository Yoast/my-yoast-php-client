<?php
/**
 * ProvisioningDownloadsApi
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Yoast.com provisioning API
 *
 * The Yoast provisioning API
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.34
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yoast\MyYoastApiClient\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Yoast\MyYoastApiClient\ApiException;
use Yoast\MyYoastApiClient\Configuration;
use Yoast\MyYoastApiClient\HeaderSelector;
use Yoast\MyYoastApiClient\ObjectSerializer;

/**
 * ProvisioningDownloadsApi Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ProvisioningDownloadsApi
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
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation apiProvisioningDownloadsCurrentVersionGet
     *
     * Retrieve the current version for the productCode for the provisioner.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return string
     */
    public function apiProvisioningDownloadsCurrentVersionGet($productCode)
    {
        list($response) = $this->apiProvisioningDownloadsCurrentVersionGetWithHttpInfo($productCode);
        return $response;
    }

    /**
     * Operation apiProvisioningDownloadsCurrentVersionGetWithHttpInfo
     *
     * Retrieve the current version for the productCode for the provisioner.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of string, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiProvisioningDownloadsCurrentVersionGetWithHttpInfo($productCode)
    {
        $returnType = 'string';
        $request = $this->apiProvisioningDownloadsCurrentVersionGetRequest($productCode);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        'string',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation apiProvisioningDownloadsCurrentVersionGetAsync
     *
     * Retrieve the current version for the productCode for the provisioner.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiProvisioningDownloadsCurrentVersionGetAsync($productCode)
    {
        return $this->apiProvisioningDownloadsCurrentVersionGetAsyncWithHttpInfo($productCode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiProvisioningDownloadsCurrentVersionGetAsyncWithHttpInfo
     *
     * Retrieve the current version for the productCode for the provisioner.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiProvisioningDownloadsCurrentVersionGetAsyncWithHttpInfo($productCode)
    {
        $returnType = 'string';
        $request = $this->apiProvisioningDownloadsCurrentVersionGetRequest($productCode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiProvisioningDownloadsCurrentVersionGet'
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiProvisioningDownloadsCurrentVersionGetRequest($productCode)
    {
        // verify the required parameter 'productCode' is set
        if ($productCode === null || (is_array($productCode) && count($productCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productCode when calling apiProvisioningDownloadsCurrentVersionGet'
            );
        }

        $resourcePath = '/api/provisioning/downloads/currentVersion';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($productCode !== null) {
            $queryParams['productCode'] = ObjectSerializer::toQueryValue($productCode, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation apiProvisioningDownloadsCurrentZipGet
     *
     * Redirect to the current zip for the productCode.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function apiProvisioningDownloadsCurrentZipGet($productCode)
    {
        $this->apiProvisioningDownloadsCurrentZipGetWithHttpInfo($productCode);
    }

    /**
     * Operation apiProvisioningDownloadsCurrentZipGetWithHttpInfo
     *
     * Redirect to the current zip for the productCode.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function apiProvisioningDownloadsCurrentZipGetWithHttpInfo($productCode)
    {
        $returnType = '';
        $request = $this->apiProvisioningDownloadsCurrentZipGetRequest($productCode);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation apiProvisioningDownloadsCurrentZipGetAsync
     *
     * Redirect to the current zip for the productCode.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiProvisioningDownloadsCurrentZipGetAsync($productCode)
    {
        return $this->apiProvisioningDownloadsCurrentZipGetAsyncWithHttpInfo($productCode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation apiProvisioningDownloadsCurrentZipGetAsyncWithHttpInfo
     *
     * Redirect to the current zip for the productCode.
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function apiProvisioningDownloadsCurrentZipGetAsyncWithHttpInfo($productCode)
    {
        $returnType = '';
        $request = $this->apiProvisioningDownloadsCurrentZipGetRequest($productCode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'apiProvisioningDownloadsCurrentZipGet'
     *
     * @param  string $productCode The code used to create the product. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function apiProvisioningDownloadsCurrentZipGetRequest($productCode)
    {
        // verify the required parameter 'productCode' is set
        if ($productCode === null || (is_array($productCode) && count($productCode) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $productCode when calling apiProvisioningDownloadsCurrentZipGet'
            );
        }

        $resourcePath = '/api/provisioning/downloads/currentZip';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($productCode !== null) {
            $queryParams['productCode'] = ObjectSerializer::toQueryValue($productCode, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
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

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
