# Yoast\MyYoastApiClient\SiteApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSitesCurrentGet**](SiteApi.md#apiSitesCurrentGet) | **GET** /api/Sites/current | Get the current connected site for an access token.
[**apiSitesGet**](SiteApi.md#apiSitesGet) | **GET** /api/Sites | Get sites
[**apiSitesIdDelete**](SiteApi.md#apiSitesIdDelete) | **DELETE** /api/Sites/{id} | 
[**apiSitesIdGet**](SiteApi.md#apiSitesIdGet) | **GET** /api/Sites/{id} | Get a site
[**apiSitesIdPatch**](SiteApi.md#apiSitesIdPatch) | **PATCH** /api/Sites/{id} | 
[**apiSitesIdSubscriptionsPut**](SiteApi.md#apiSitesIdSubscriptionsPut) | **PUT** /api/Sites/{id}/subscriptions | Adds a subscription to a site
[**apiSitesIdSubscriptionsSubscriptionIdDelete**](SiteApi.md#apiSitesIdSubscriptionsSubscriptionIdDelete) | **DELETE** /api/Sites/{id}/subscriptions/{subscriptionId} | Removes a subscription from a site
[**apiSitesIndexPost**](SiteApi.md#apiSitesIndexPost) | **POST** /api/Sites/index | 
[**apiSitesInfoGet**](SiteApi.md#apiSitesInfoGet) | **GET** /api/Sites/info | Get the current connected site for an access token.
[**apiSitesSwitchSubscriptionNumberOfTimesPost**](SiteApi.md#apiSitesSwitchSubscriptionNumberOfTimesPost) | **POST** /api/Sites/switchSubscriptionNumberOfTimes | Switches the subscription for a number of times.
[**apiSitesSwitchSubscriptionPost**](SiteApi.md#apiSitesSwitchSubscriptionPost) | **POST** /api/Sites/switchSubscription | Switches the subscription for a number of times.
[**apiSitesTransferPost**](SiteApi.md#apiSitesTransferPost) | **POST** /api/Sites/transfer | Transfer sites.


# **apiSitesCurrentGet**
> object apiSitesCurrentGet($token, $url)

Get the current connected site for an access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->apiSitesCurrentGet($token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesCurrentGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **url** | **string**|  | [optional]

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesGet**
> \Yoast\MyYoastApiClient\Model\Site[] apiSitesGet($filter)

Get sites

Get and filter sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiSitesGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesIdDelete**
> apiSitesIdDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->apiSitesIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesIdDelete: ', $e->getMessage(), PHP_EOL;
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

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesIdGet**
> \Yoast\MyYoastApiClient\Model\Site apiSitesIdGet($id, $filter)

Get a site

Get a single site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiSitesIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesIdPatch**
> apiSitesIdPatch($updateSiteDto, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$updateSiteDto = new \Yoast\MyYoastApiClient\Model\UpdateSiteDto(); // \Yoast\MyYoastApiClient\Model\UpdateSiteDto | 
$id = "id_example"; // string | 

try {
    $apiInstance->apiSitesIdPatch($updateSiteDto, $id);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesIdPatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **updateSiteDto** | [**\Yoast\MyYoastApiClient\Model\UpdateSiteDto**](../Model/UpdateSiteDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesIdSubscriptionsPut**
> \Yoast\MyYoastApiClient\Model\Site apiSitesIdSubscriptionsPut($addSubscriptionDto, $id)

Adds a subscription to a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$addSubscriptionDto = new \Yoast\MyYoastApiClient\Model\AddSubscriptionDto(); // \Yoast\MyYoastApiClient\Model\AddSubscriptionDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiSitesIdSubscriptionsPut($addSubscriptionDto, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesIdSubscriptionsPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **addSubscriptionDto** | [**\Yoast\MyYoastApiClient\Model\AddSubscriptionDto**](../Model/AddSubscriptionDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesIdSubscriptionsSubscriptionIdDelete**
> \Yoast\MyYoastApiClient\Model\Site apiSitesIdSubscriptionsSubscriptionIdDelete($id, $subscriptionId)

Removes a subscription from a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$subscriptionId = "subscriptionId_example"; // string | 

try {
    $result = $apiInstance->apiSitesIdSubscriptionsSubscriptionIdDelete($id, $subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesIdSubscriptionsSubscriptionIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **subscriptionId** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesIndexPost**
> object apiSitesIndexPost($token, $url, $method)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | 
$url = "url_example"; // string | 
$method = "method_example"; // string | 

try {
    $result = $apiInstance->apiSitesIndexPost($token, $url, $method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesIndexPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  |
 **url** | **string**|  |
 **method** | **string**|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesInfoGet**
> object apiSitesInfoGet($token, $url)

Get the current connected site for an access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$token = "token_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->apiSitesInfoGet($token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesInfoGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **url** | **string**|  | [optional]

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesSwitchSubscriptionNumberOfTimesPost**
> object apiSitesSwitchSubscriptionNumberOfTimesPost($switchSubscriptionNumberOfTimesDto)

Switches the subscription for a number of times.

Switches the subscription for a number of times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$switchSubscriptionNumberOfTimesDto = new \Yoast\MyYoastApiClient\Model\SwitchSubscriptionNumberOfTimesDto(); // \Yoast\MyYoastApiClient\Model\SwitchSubscriptionNumberOfTimesDto | 

try {
    $result = $apiInstance->apiSitesSwitchSubscriptionNumberOfTimesPost($switchSubscriptionNumberOfTimesDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesSwitchSubscriptionNumberOfTimesPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **switchSubscriptionNumberOfTimesDto** | [**\Yoast\MyYoastApiClient\Model\SwitchSubscriptionNumberOfTimesDto**](../Model/SwitchSubscriptionNumberOfTimesDto.md)|  |

### Return type

**object**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesSwitchSubscriptionPost**
> float apiSitesSwitchSubscriptionPost($transferSiteDto)

Switches the subscription for a number of times.

Switches the subscription for a number of times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferSiteDto = new \Yoast\MyYoastApiClient\Model\TransferSiteDto(); // \Yoast\MyYoastApiClient\Model\TransferSiteDto | 

try {
    $result = $apiInstance->apiSitesSwitchSubscriptionPost($transferSiteDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesSwitchSubscriptionPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transferSiteDto** | [**\Yoast\MyYoastApiClient\Model\TransferSiteDto**](../Model/TransferSiteDto.md)|  |

### Return type

**float**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSitesTransferPost**
> \Yoast\MyYoastApiClient\Model\Site[] apiSitesTransferPost($transferSiteDto)

Transfer sites.

Transfers the sites from one customer to another customer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferSiteDto = new \Yoast\MyYoastApiClient\Model\TransferSiteDto(); // \Yoast\MyYoastApiClient\Model\TransferSiteDto | 

try {
    $result = $apiInstance->apiSitesTransferPost($transferSiteDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->apiSitesTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transferSiteDto** | [**\Yoast\MyYoastApiClient\Model\TransferSiteDto**](../Model/TransferSiteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

