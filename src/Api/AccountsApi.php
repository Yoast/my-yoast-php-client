<?php
/**
 * AccountsApi
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
 * Swagger Codegen version: 3.0.57
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
 * AccountsApi Class Doc Comment
 *
 * @category Class
 * @package  Yoast\MyYoastApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AccountsApi
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
     * Operation checkUsername
     *
     * Username availability check
     *
     * @param  \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto $body body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto
     */
    public function checkUsername($body, $xAccountAppSharedSecret)
    {
        list($response) = $this->checkUsernameWithHttpInfo($body, $xAccountAppSharedSecret);
        return $response;
    }

    /**
     * Operation checkUsernameWithHttpInfo
     *
     * Username availability check
     *
     * @param  \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto, HTTP status code, HTTP response headers (array of strings)
     */
    public function checkUsernameWithHttpInfo($body, $xAccountAppSharedSecret)
    {
        $returnType = '\Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto';
        $request = $this->checkUsernameRequest($body, $xAccountAppSharedSecret);

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
                        '\Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation checkUsernameAsync
     *
     * Username availability check
     *
     * @param  \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkUsernameAsync($body, $xAccountAppSharedSecret)
    {
        return $this->checkUsernameAsyncWithHttpInfo($body, $xAccountAppSharedSecret)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation checkUsernameAsyncWithHttpInfo
     *
     * Username availability check
     *
     * @param  \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function checkUsernameAsyncWithHttpInfo($body, $xAccountAppSharedSecret)
    {
        $returnType = '\Yoast\MyYoastApiClient\Model\UsernameCheckResponseDto';
        $request = $this->checkUsernameRequest($body, $xAccountAppSharedSecret);

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
     * Create request for operation 'checkUsername'
     *
     * @param  \Yoast\MyYoastApiClient\Model\UsernameCheckRequestDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function checkUsernameRequest($body, $xAccountAppSharedSecret)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling checkUsername'
            );
        }
        // verify the required parameter 'xAccountAppSharedSecret' is set
        if ($xAccountAppSharedSecret === null || (is_array($xAccountAppSharedSecret) && count($xAccountAppSharedSecret) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xAccountAppSharedSecret when calling checkUsername'
            );
        }

        $resourcePath = '/api/accounts/checkUsername';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xAccountAppSharedSecret !== null) {
            $headerParams['X-Account-App-Shared-Secret'] = ObjectSerializer::toHeaderValue($xAccountAppSharedSecret);
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
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation setTOTPTwoFactorConfig
     *
     * @param  \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto $body body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     * @param  string $id id (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function setTOTPTwoFactorConfig($body, $xAccountAppSharedSecret, $id)
    {
        $this->setTOTPTwoFactorConfigWithHttpInfo($body, $xAccountAppSharedSecret, $id);
    }

    /**
     * Operation setTOTPTwoFactorConfigWithHttpInfo
     *
     * @param  \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     * @param  string $id (required)
     *
     * @throws \Yoast\MyYoastApiClient\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function setTOTPTwoFactorConfigWithHttpInfo($body, $xAccountAppSharedSecret, $id)
    {
        $returnType = '';
        $request = $this->setTOTPTwoFactorConfigRequest($body, $xAccountAppSharedSecret, $id);

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
     * Operation setTOTPTwoFactorConfigAsync
     *
     * 
     *
     * @param  \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setTOTPTwoFactorConfigAsync($body, $xAccountAppSharedSecret, $id)
    {
        return $this->setTOTPTwoFactorConfigAsyncWithHttpInfo($body, $xAccountAppSharedSecret, $id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation setTOTPTwoFactorConfigAsyncWithHttpInfo
     *
     * 
     *
     * @param  \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function setTOTPTwoFactorConfigAsyncWithHttpInfo($body, $xAccountAppSharedSecret, $id)
    {
        $returnType = '';
        $request = $this->setTOTPTwoFactorConfigRequest($body, $xAccountAppSharedSecret, $id);

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
     * Create request for operation 'setTOTPTwoFactorConfig'
     *
     * @param  \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto $body (required)
     * @param  string $xAccountAppSharedSecret The API shared secret (required)
     * @param  string $id (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function setTOTPTwoFactorConfigRequest($body, $xAccountAppSharedSecret, $id)
    {
        // verify the required parameter 'body' is set
        if ($body === null || (is_array($body) && count($body) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $body when calling setTOTPTwoFactorConfig'
            );
        }
        // verify the required parameter 'xAccountAppSharedSecret' is set
        if ($xAccountAppSharedSecret === null || (is_array($xAccountAppSharedSecret) && count($xAccountAppSharedSecret) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $xAccountAppSharedSecret when calling setTOTPTwoFactorConfig'
            );
        }
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling setTOTPTwoFactorConfig'
            );
        }

        $resourcePath = '/api/accounts/{id}/TOTPTwoFactorConfig';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($xAccountAppSharedSecret !== null) {
            $headerParams['X-Account-App-Shared-Secret'] = ObjectSerializer::toHeaderValue($xAccountAppSharedSecret);
        }

        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
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