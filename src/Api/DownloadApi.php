<?php
/**
 * DownloadApi
 * PHP version 5
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * MyYoast
 *
 * The MyYoast Api
 *
 * OpenAPI spec version: 1.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.68
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
 * DownloadApi Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DownloadApi
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
     * Operation downloadFile
     *
     * Route to download a file
     *
     * @param  string $name name (required)
     * @param  string $version version (required)
     * @param  string $pluginVersion pluginVersion (required)
     * @param  string $site site (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function downloadFile($name, $version, $pluginVersion, $site)
    {
        $this->downloadFileWithHttpInfo($name, $version, $pluginVersion, $site);
    }

    /**
     * Operation downloadFileWithHttpInfo
     *
     * Route to download a file
     *
     * @param  string $name (required)
     * @param  string $version (required)
     * @param  string $pluginVersion (required)
     * @param  string $site (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function downloadFileWithHttpInfo($name, $version, $pluginVersion, $site)
    {
        $returnType = '';
        $request = $this->downloadFileRequest($name, $version, $pluginVersion, $site);

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
     * Operation downloadFileAsync
     *
     * Route to download a file
     *
     * @param  string $name (required)
     * @param  string $version (required)
     * @param  string $pluginVersion (required)
     * @param  string $site (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsync($name, $version, $pluginVersion, $site)
    {
        return $this->downloadFileAsyncWithHttpInfo($name, $version, $pluginVersion, $site)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation downloadFileAsyncWithHttpInfo
     *
     * Route to download a file
     *
     * @param  string $name (required)
     * @param  string $version (required)
     * @param  string $pluginVersion (required)
     * @param  string $site (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function downloadFileAsyncWithHttpInfo($name, $version, $pluginVersion, $site)
    {
        $returnType = '';
        $request = $this->downloadFileRequest($name, $version, $pluginVersion, $site);

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
     * Create request for operation 'downloadFile'
     *
     * @param  string $name (required)
     * @param  string $version (required)
     * @param  string $pluginVersion (required)
     * @param  string $site (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function downloadFileRequest($name, $version, $pluginVersion, $site)
    {
        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling downloadFile'
            );
        }
        // verify the required parameter 'version' is set
        if ($version === null || (is_array($version) && count($version) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $version when calling downloadFile'
            );
        }
        // verify the required parameter 'pluginVersion' is set
        if ($pluginVersion === null || (is_array($pluginVersion) && count($pluginVersion) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $pluginVersion when calling downloadFile'
            );
        }
        // verify the required parameter 'site' is set
        if ($site === null || (is_array($site) && count($site) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $site when calling downloadFile'
            );
        }

        $resourcePath = '/api/downloads/file/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($version !== null) {
            $queryParams['version'] = ObjectSerializer::toQueryValue($version, null);
        }
        // query params
        if ($pluginVersion !== null) {
            $queryParams['plugin_version'] = ObjectSerializer::toQueryValue($pluginVersion, null);
        }
        // query params
        if ($site !== null) {
            $queryParams['site'] = ObjectSerializer::toQueryValue($site, null);
        }

        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation uploadFile
     *
     * Route to update a file.
     *
     * @param  \Yoast\MyYoastApiClient\Model\UpdateFileDto $body body (required)
     * @param  string $name name (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto
     */
    public function uploadFile($body, $name)
    {
        list($response) = $this->uploadFileWithHttpInfo($body, $name);
        return $response;
    }

    /**
     * Operation uploadFileWithHttpInfo
     *
     * Route to update a file.
     *
     * @param  \Yoast\MyYoastApiClient\Model\UpdateFileDto $body (required)
     * @param  string $name (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function uploadFileWithHttpInfo($body, $name)
    {
        $returnType = '\Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto';
        $request = $this->uploadFileRequest($body, $name);

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
                        '\Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation uploadFileAsync
     *
     * Route to update a file.
     *
     * @param  \Yoast\MyYoastApiClient\Model\UpdateFileDto $body (required)
     * @param  string $name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsync($body, $name)
    {
        return $this->uploadFileAsyncWithHttpInfo($body, $name)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation uploadFileAsyncWithHttpInfo
     *
     * Route to update a file.
     *
     * @param  \Yoast\MyYoastApiClient\Model\UpdateFileDto $body (required)
     * @param  string $name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function uploadFileAsyncWithHttpInfo($body, $name)
    {
        $returnType = '\Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto';
        $request = $this->uploadFileRequest($body, $name);

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
     * Create request for operation 'uploadFile'
     *
     * @param  \Yoast\MyYoastApiClient\Model\UpdateFileDto $body (required)
     * @param  string $name (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function uploadFileRequest($body, $name)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling uploadFile'
            );
        }
        // verify the required parameter 'name' is set
        if ($name === null || (is_array($name) && count($name) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $name when calling uploadFile'
            );
        }

        $resourcePath = '/api/downloads/file/{name}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($name !== null) {
            $resourcePath = str_replace(
                '{' . 'name' . '}',
                ObjectSerializer::toPathValue($name),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
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
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
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

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'POST',
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
