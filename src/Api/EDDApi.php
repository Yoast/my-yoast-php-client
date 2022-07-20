<?php
/**
 * EDDApi
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
 * EDDApi Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class EDDApi
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
     * Operation eddSlApiGet
     *
     * Activate or deactivate a site license
     *
     * @param  string $eddAction eddAction (required)
     * @param  string $url url (required)
     * @param  string $itemName itemName (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function eddSlApiGet($eddAction, $url, $itemName)
    {
        $this->eddSlApiGetWithHttpInfo($eddAction, $url, $itemName);
    }

    /**
     * Operation eddSlApiGetWithHttpInfo
     *
     * Activate or deactivate a site license
     *
     * @param  string $eddAction (required)
     * @param  string $url (required)
     * @param  string $itemName (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function eddSlApiGetWithHttpInfo($eddAction, $url, $itemName)
    {
        $returnType = '';
        $request = $this->eddSlApiGetRequest($eddAction, $url, $itemName);

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
     * Operation eddSlApiGetAsync
     *
     * Activate or deactivate a site license
     *
     * @param  string $eddAction (required)
     * @param  string $url (required)
     * @param  string $itemName (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eddSlApiGetAsync($eddAction, $url, $itemName)
    {
        return $this->eddSlApiGetAsyncWithHttpInfo($eddAction, $url, $itemName)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation eddSlApiGetAsyncWithHttpInfo
     *
     * Activate or deactivate a site license
     *
     * @param  string $eddAction (required)
     * @param  string $url (required)
     * @param  string $itemName (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eddSlApiGetAsyncWithHttpInfo($eddAction, $url, $itemName)
    {
        $returnType = '';
        $request = $this->eddSlApiGetRequest($eddAction, $url, $itemName);

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
     * Create request for operation 'eddSlApiGet'
     *
     * @param  string $eddAction (required)
     * @param  string $url (required)
     * @param  string $itemName (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function eddSlApiGetRequest($eddAction, $url, $itemName)
    {
        // verify the required parameter 'eddAction' is set
        if ($eddAction === null || (is_array($eddAction) && count($eddAction) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $eddAction when calling eddSlApiGet'
            );
        }
        // verify the required parameter 'url' is set
        if ($url === null || (is_array($url) && count($url) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $url when calling eddSlApiGet'
            );
        }
        // verify the required parameter 'itemName' is set
        if ($itemName === null || (is_array($itemName) && count($itemName) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $itemName when calling eddSlApiGet'
            );
        }

        $resourcePath = '/edd-sl-api';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($eddAction !== null) {
            $queryParams['edd_action'] = ObjectSerializer::toQueryValue($eddAction, null);
        }
        // query params
        if ($url !== null) {
            $queryParams['url'] = ObjectSerializer::toQueryValue($url, null);
        }
        // query params
        if ($itemName !== null) {
            $queryParams['item_name'] = ObjectSerializer::toQueryValue($itemName, null);
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
     * Operation eddSlApiPost
     *
     * @param  \Yoast\MyYoastApiClient\Model\EddDTO $body body (required)
     * @param  string $eddAction eddAction (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function eddSlApiPost($body, $eddAction)
    {
        $this->eddSlApiPostWithHttpInfo($body, $eddAction);
    }

    /**
     * Operation eddSlApiPostWithHttpInfo
     *
     * @param  \Yoast\MyYoastApiClient\Model\EddDTO $body (required)
     * @param  string $eddAction (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function eddSlApiPostWithHttpInfo($body, $eddAction)
    {
        $returnType = '';
        $request = $this->eddSlApiPostRequest($body, $eddAction);

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
     * Operation eddSlApiPostAsync
     *
     * 
     *
     * @param  \Yoast\MyYoastApiClient\Model\EddDTO $body (required)
     * @param  string $eddAction (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eddSlApiPostAsync($body, $eddAction)
    {
        return $this->eddSlApiPostAsyncWithHttpInfo($body, $eddAction)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation eddSlApiPostAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yoast\MyYoastApiClient\Model\EddDTO $body (required)
     * @param  string $eddAction (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function eddSlApiPostAsyncWithHttpInfo($body, $eddAction)
    {
        $returnType = '';
        $request = $this->eddSlApiPostRequest($body, $eddAction);

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
     * Create request for operation 'eddSlApiPost'
     *
     * @param  \Yoast\MyYoastApiClient\Model\EddDTO $body (required)
     * @param  string $eddAction (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function eddSlApiPostRequest($body, $eddAction)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling eddSlApiPost'
            );
        }
        // verify the required parameter 'eddAction' is set
        if ($eddAction === null || (is_array($eddAction) && count($eddAction) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $eddAction when calling eddSlApiPost'
            );
        }

        $resourcePath = '/edd-sl-api';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($eddAction !== null) {
            $queryParams['edd_action'] = ObjectSerializer::toQueryValue($eddAction, null);
        }


        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
