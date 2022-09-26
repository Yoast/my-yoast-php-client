# Yoast\MyYoastApiClient\DefaultApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiAccountsIdTOTPTwoFactorConfigPost**](DefaultApi.md#apiaccountsidtotptwofactorconfigpost) | **POST** /api/accounts/{id}/TOTPTwoFactorConfig | 
[**apiSiteReviewAgencyAddOwnerPost**](DefaultApi.md#apisitereviewagencyaddownerpost) | **POST** /api/SiteReview/Agency/add-owner | 
[**apiSiteReviewAgencyAllGet**](DefaultApi.md#apisitereviewagencyallget) | **GET** /api/SiteReview/Agency/all | 
[**apiSiteReviewAgencyDisconnectOwnerPost**](DefaultApi.md#apisitereviewagencydisconnectownerpost) | **POST** /api/SiteReview/Agency/disconnect-owner | 
[**apiSiteReviewAgencyGet**](DefaultApi.md#apisitereviewagencyget) | **GET** /api/SiteReview/Agency | 
[**apiSiteReviewAgencyIdGet**](DefaultApi.md#apisitereviewagencyidget) | **GET** /api/SiteReview/Agency/{id} | 
[**apiSiteReviewAgencyIdPut**](DefaultApi.md#apisitereviewagencyidput) | **PUT** /api/SiteReview/Agency/{id} | 
[**apiSiteReviewAgencyPost**](DefaultApi.md#apisitereviewagencypost) | **POST** /api/SiteReview/Agency | 
[**apiSiteReviewClientAgencyIdGet**](DefaultApi.md#apisitereviewclientagencyidget) | **GET** /api/SiteReview/Client/Agency/{id} | 
[**apiSiteReviewClientIdGet**](DefaultApi.md#apisitereviewclientidget) | **GET** /api/SiteReview/Client/{id} | 
[**apiSiteReviewClientIdPatch**](DefaultApi.md#apisitereviewclientidpatch) | **PATCH** /api/SiteReview/Client/{id} | 
[**apiSiteReviewClientPost**](DefaultApi.md#apisitereviewclientpost) | **POST** /api/SiteReview/Client | 
[**apiSiteReviewReviewAgencyIdGet**](DefaultApi.md#apisitereviewreviewagencyidget) | **GET** /api/SiteReview/Review/Agency/{id} | 
[**apiSiteReviewReviewPost**](DefaultApi.md#apisitereviewreviewpost) | **POST** /api/SiteReview/Review | 

# **apiAccountsIdTOTPTwoFactorConfigPost**
> apiAccountsIdTOTPTwoFactorConfigPost($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto(); // \Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiAccountsIdTOTPTwoFactorConfigPost($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiAccountsIdTOTPTwoFactorConfigPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TOTPTwoFactorConfigDto**](../Model/TOTPTwoFactorConfigDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyAddOwnerPost**
> apiSiteReviewAgencyAddOwnerPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\AddOwnerToAgencyDto(); // \Yoast\MyYoastApiClient\Model\AddOwnerToAgencyDto | 

try {
    $apiInstance->apiSiteReviewAgencyAddOwnerPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyAddOwnerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\AddOwnerToAgencyDto**](../Model/AddOwnerToAgencyDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyAllGet**
> apiSiteReviewAgencyAllGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiSiteReviewAgencyAllGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyAllGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyDisconnectOwnerPost**
> apiSiteReviewAgencyDisconnectOwnerPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\DisconnectOwnerFromAgencyDto(); // \Yoast\MyYoastApiClient\Model\DisconnectOwnerFromAgencyDto | 

try {
    $apiInstance->apiSiteReviewAgencyDisconnectOwnerPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyDisconnectOwnerPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\DisconnectOwnerFromAgencyDto**](../Model/DisconnectOwnerFromAgencyDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyGet**
> apiSiteReviewAgencyGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->apiSiteReviewAgencyGet();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyIdGet**
> apiSiteReviewAgencyIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSiteReviewAgencyIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyIdPut**
> apiSiteReviewAgencyIdPut($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateAgencyDto(); // \Yoast\MyYoastApiClient\Model\UpdateAgencyDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSiteReviewAgencyIdPut($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateAgencyDto**](../Model/UpdateAgencyDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewAgencyPost**
> apiSiteReviewAgencyPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\AddAgencyDto(); // \Yoast\MyYoastApiClient\Model\AddAgencyDto | 

try {
    $apiInstance->apiSiteReviewAgencyPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewAgencyPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\AddAgencyDto**](../Model/AddAgencyDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewClientAgencyIdGet**
> apiSiteReviewClientAgencyIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSiteReviewClientAgencyIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewClientAgencyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewClientIdGet**
> apiSiteReviewClientIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSiteReviewClientIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewClientIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewClientIdPatch**
> apiSiteReviewClientIdPatch($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateClientDto(); // \Yoast\MyYoastApiClient\Model\UpdateClientDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSiteReviewClientIdPatch($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewClientIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateClientDto**](../Model/UpdateClientDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewClientPost**
> apiSiteReviewClientPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CreateClientDto(); // \Yoast\MyYoastApiClient\Model\CreateClientDto | 

try {
    $apiInstance->apiSiteReviewClientPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewClientPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateClientDto**](../Model/CreateClientDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewReviewAgencyIdGet**
> apiSiteReviewReviewAgencyIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSiteReviewReviewAgencyIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewReviewAgencyIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSiteReviewReviewPost**
> apiSiteReviewReviewPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CreateReviewDto(); // \Yoast\MyYoastApiClient\Model\CreateReviewDto | 

try {
    $apiInstance->apiSiteReviewReviewPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->apiSiteReviewReviewPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateReviewDto**](../Model/CreateReviewDto.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

