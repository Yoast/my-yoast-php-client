# Yoast\MyYoastApiClient\SiteApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addSubscription**](SiteApi.md#addsubscription) | **PUT** /api/Sites/{id}/subscriptions | Adds a subscription to a site
[**current**](SiteApi.md#current) | **GET** /api/Sites/current | Get the current connected site for an access token.
[**currentClone**](SiteApi.md#currentclone) | **GET** /api/Sites/info | Get the current connected site for an access token.
[**deleteOne**](SiteApi.md#deleteone) | **DELETE** /api/Sites/{id} | 
[**getMany**](SiteApi.md#getmany) | **GET** /api/Sites | Get sites
[**getManyPaged**](SiteApi.md#getmanypaged) | **GET** /api/Sites/paged | Get sites
[**getOne**](SiteApi.md#getone) | **GET** /api/Sites/{id} | Get a site
[**getSiteStatus**](SiteApi.md#getsitestatus) | **GET** /api/Sites/getSiteStatus | Get a url&#x27;s HTTP status
[**index**](SiteApi.md#index) | **POST** /api/Sites/index | 
[**removeSubscription**](SiteApi.md#removesubscription) | **DELETE** /api/Sites/{id}/subscriptions/{subscriptionId} | Removes a subscription from a site
[**switchSubscription**](SiteApi.md#switchsubscription) | **POST** /api/Sites/switchSubscription | Switches the subscription for a number of times.
[**switchSubscriptionNumberOfTimes**](SiteApi.md#switchsubscriptionnumberoftimes) | **POST** /api/Sites/switchSubscriptionNumberOfTimes | Switches the subscription for a number of times.
[**updateOne**](SiteApi.md#updateone) | **PATCH** /api/Sites/{id} | 
[**updateSiteUrl**](SiteApi.md#updatesiteurl) | **PATCH** /api/Sites/{id}/url | 

# **addSubscription**
> \Yoast\MyYoastApiClient\Model\Site addSubscription($body, $id)

Adds a subscription to a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\AddSubscriptionDto(); // \Yoast\MyYoastApiClient\Model\AddSubscriptionDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->addSubscription($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->addSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\AddSubscriptionDto**](../Model/AddSubscriptionDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **current**
> \Yoast\MyYoastApiClient\Model\ current($token, $url)

Get the current connected site for an access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->current($token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->current: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **url** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **currentClone**
> \Yoast\MyYoastApiClient\Model\ currentClone($token, $url)

Get the current connected site for an access token.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | 
$url = "url_example"; // string | 

try {
    $result = $apiInstance->currentClone($token, $url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->currentClone: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **token** | **string**|  | [optional]
 **url** | **string**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOne**
> deleteOne($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->deleteOne($id);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->deleteOne: ', $e->getMessage(), PHP_EOL;
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

# **getMany**
> \Yoast\MyYoastApiClient\Model\Site[] getMany($filter)

Get sites

Get and filter sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site[]**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManyPaged**
> getManyPaged($filter)

Get sites

Get and filter sites

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->getManyPaged($filter);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getManyPaged: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Yoast\MyYoastApiClient\Model\Site getOne($id, $filter)

Get a site

Get a single site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getOne($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSiteStatus**
> int getSiteStatus($url)

Get a url's HTTP status

Gets a http status code by a given URL

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$url = "url_example"; // string | 

try {
    $result = $apiInstance->getSiteStatus($url);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->getSiteStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **url** | **string**|  |

### Return type

**int**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **index**
> \Yoast\MyYoastApiClient\Model\ index($token, $url, $method)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$token = "token_example"; // string | 
$url = "url_example"; // string | 
$method = "method_example"; // string | 

try {
    $result = $apiInstance->index($token, $url, $method);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->index: ', $e->getMessage(), PHP_EOL;
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

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeSubscription**
> \Yoast\MyYoastApiClient\Model\Site removeSubscription($id, $subscriptionId)

Removes a subscription from a site

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$subscriptionId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->removeSubscription($id, $subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->removeSubscription: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **switchSubscription**
> \Yoast\MyYoastApiClient\Model\ switchSubscription($body)

Switches the subscription for a number of times.

Switches the subscription for a number of times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\TransferSiteDto(); // \Yoast\MyYoastApiClient\Model\TransferSiteDto | 

try {
    $result = $apiInstance->switchSubscription($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->switchSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TransferSiteDto**](../Model/TransferSiteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **switchSubscriptionNumberOfTimes**
> \Yoast\MyYoastApiClient\Model\ switchSubscriptionNumberOfTimes($body)

Switches the subscription for a number of times.

Switches the subscription for a number of times.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\SwitchSubscriptionNumberOfTimesDto(); // \Yoast\MyYoastApiClient\Model\SwitchSubscriptionNumberOfTimesDto | 

try {
    $result = $apiInstance->switchSubscriptionNumberOfTimes($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->switchSubscriptionNumberOfTimes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SwitchSubscriptionNumberOfTimesDto**](../Model/SwitchSubscriptionNumberOfTimesDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateOne**
> updateOne($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateSiteDto(); // \Yoast\MyYoastApiClient\Model\UpdateSiteDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->updateOne($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->updateOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateSiteDto**](../Model/UpdateSiteDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSiteUrl**
> updateSiteUrl($body, $id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\SiteApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateSiteUrlDto(); // \Yoast\MyYoastApiClient\Model\UpdateSiteUrlDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->updateSiteUrl($body, $id);
} catch (Exception $e) {
    echo 'Exception when calling SiteApi->updateSiteUrl: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateSiteUrlDto**](../Model/UpdateSiteUrlDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

