# Yoast\MyYoastApiClient\SubscriptionApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSubscriptionsCalculateExpansionPriceIdSubscriptionNumberGet**](SubscriptionApi.md#apisubscriptionscalculateexpansionpriceidsubscriptionnumberget) | **GET** /api/Subscriptions/calculateExpansionPrice/{id}/{subscriptionNumber} | Calculate expansion price
[**apiSubscriptionsExpandIdSubscriptionNumberGet**](SubscriptionApi.md#apisubscriptionsexpandidsubscriptionnumberget) | **GET** /api/Subscriptions/expand/{id}/{subscriptionNumber} | Expand subscriptions
[**apiSubscriptionsExpiringGet**](SubscriptionApi.md#apisubscriptionsexpiringget) | **GET** /api/Subscriptions/expiring | 
[**apiSubscriptionsGet**](SubscriptionApi.md#apisubscriptionsget) | **GET** /api/Subscriptions | Get subscriptions
[**apiSubscriptionsIdDelete**](SubscriptionApi.md#apisubscriptionsiddelete) | **DELETE** /api/Subscriptions/{id} | Delete a subscription
[**apiSubscriptionsIdForceCancelPost**](SubscriptionApi.md#apisubscriptionsidforcecancelpost) | **POST** /api/Subscriptions/{id}/force-cancel | Forcefully cancel a subscription
[**apiSubscriptionsIdGet**](SubscriptionApi.md#apisubscriptionsidget) | **GET** /api/Subscriptions/{id} | Get a subscription
[**apiSubscriptionsIdRecalculateSubscriptionCountPost**](SubscriptionApi.md#apisubscriptionsidrecalculatesubscriptioncountpost) | **POST** /api/Subscriptions/{id}/recalculateSubscriptionCount | Recalculate SubscriptionCount.
[**apiSubscriptionsLinkSitePost**](SubscriptionApi.md#apisubscriptionslinksitepost) | **POST** /api/Subscriptions/link-site | Link a subscription to provided site URL
[**apiSubscriptionsPagedGet**](SubscriptionApi.md#apisubscriptionspagedget) | **GET** /api/Subscriptions/paged | Get subscriptions
[**apiSubscriptionsRenewSubscriptionNumberSecretKeyGet**](SubscriptionApi.md#apisubscriptionsrenewsubscriptionnumbersecretkeyget) | **GET** /api/Subscriptions/renew/{subscriptionNumber}/{secretKey} | Renew subscriptions
[**apiSubscriptionsSetExpiryDatePost**](SubscriptionApi.md#apisubscriptionssetexpirydatepost) | **POST** /api/Subscriptions/setExpiryDate | Set Date.
[**apiSubscriptionsSwitchPaymentMethodIdSubscriptionNumberGet**](SubscriptionApi.md#apisubscriptionsswitchpaymentmethodidsubscriptionnumberget) | **GET** /api/Subscriptions/switchPaymentMethod/{id}/{subscriptionNumber} | 
[**apiSubscriptionsTransferPost**](SubscriptionApi.md#apisubscriptionstransferpost) | **POST** /api/Subscriptions/transfer | Transfer subscription ownership
[**apiSubscriptionsUpgradeSubscriptionNumberSecretKeyGet**](SubscriptionApi.md#apisubscriptionsupgradesubscriptionnumbersecretkeyget) | **GET** /api/Subscriptions/upgrade/{subscriptionNumber}/{secretKey} | Upgrade subscriptions

# **apiSubscriptionsCalculateExpansionPriceIdSubscriptionNumberGet**
> string apiSubscriptionsCalculateExpansionPriceIdSubscriptionNumberGet($id, $subscriptionNumber)

Calculate expansion price

Route for calculating the subscription expansion price.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$subscriptionNumber = "subscriptionNumber_example"; // string | 

try {
    $result = $apiInstance->apiSubscriptionsCalculateExpansionPriceIdSubscriptionNumberGet($id, $subscriptionNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsCalculateExpansionPriceIdSubscriptionNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **subscriptionNumber** | **string**|  |

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsExpandIdSubscriptionNumberGet**
> \Yoast\MyYoastApiClient\Model\Subscription apiSubscriptionsExpandIdSubscriptionNumberGet($id, $subscriptionNumber)

Expand subscriptions

Route for expanding subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$subscriptionNumber = "subscriptionNumber_example"; // string | 

try {
    $result = $apiInstance->apiSubscriptionsExpandIdSubscriptionNumberGet($id, $subscriptionNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsExpandIdSubscriptionNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **subscriptionNumber** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsExpiringGet**
> \Yoast\MyYoastApiClient\Model\Subscription[] apiSubscriptionsExpiringGet($from, $until, $requiresManualRenewal)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$requiresManualRenewal = true; // bool | 

try {
    $result = $apiInstance->apiSubscriptionsExpiringGet($from, $until, $requiresManualRenewal);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsExpiringGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**|  |
 **until** | **\DateTime**|  |
 **requiresManualRenewal** | **bool**|  | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsGet**
> \Yoast\MyYoastApiClient\Model\Subscription[] apiSubscriptionsGet($filter)

Get subscriptions

Get and filter subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiSubscriptionsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsIdDelete**
> string apiSubscriptionsIdDelete($id)

Delete a subscription

Deletes a single subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiSubscriptionsIdDelete($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsIdForceCancelPost**
> apiSubscriptionsIdForceCancelPost($id)

Forcefully cancel a subscription

This immediately cancels a subscription without notifying the customer. The customer will lose access instantly

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->apiSubscriptionsIdForceCancelPost($id);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsIdForceCancelPost: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsIdGet**
> \Yoast\MyYoastApiClient\Model\Subscription apiSubscriptionsIdGet($id, $filter)

Get a subscription

Get a single subscription

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiSubscriptionsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsIdRecalculateSubscriptionCountPost**
> \Yoast\MyYoastApiClient\Model\Subscription apiSubscriptionsIdRecalculateSubscriptionCountPost($id)

Recalculate SubscriptionCount.

Route to recalculate the Subscription Count for a given subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiSubscriptionsIdRecalculateSubscriptionCountPost($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsIdRecalculateSubscriptionCountPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsLinkSitePost**
> \Yoast\MyYoastApiClient\Model\Site apiSubscriptionsLinkSitePost($body)

Link a subscription to provided site URL

Links the provided site URL to a subscription after successfully checking out.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\LinkSiteDto(); // \Yoast\MyYoastApiClient\Model\LinkSiteDto | 

try {
    $result = $apiInstance->apiSubscriptionsLinkSitePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsLinkSitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\LinkSiteDto**](../Model/LinkSiteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Site**](../Model/Site.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsPagedGet**
> apiSubscriptionsPagedGet($filter)

Get subscriptions

Get and filter subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->apiSubscriptionsPagedGet($filter);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsPagedGet: ', $e->getMessage(), PHP_EOL;
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

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsRenewSubscriptionNumberSecretKeyGet**
> \Yoast\MyYoastApiClient\Model\Subscription apiSubscriptionsRenewSubscriptionNumberSecretKeyGet($subscriptionNumber, $secretKey)

Renew subscriptions

Route for renewing subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionNumber = "subscriptionNumber_example"; // string | 
$secretKey = "secretKey_example"; // string | 

try {
    $result = $apiInstance->apiSubscriptionsRenewSubscriptionNumberSecretKeyGet($subscriptionNumber, $secretKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsRenewSubscriptionNumberSecretKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionNumber** | **string**|  |
 **secretKey** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsSetExpiryDatePost**
> \Yoast\MyYoastApiClient\Model\Subscription apiSubscriptionsSetExpiryDatePost($body)

Set Date.

Sets either the end date or next payment date, based on which one the subscription already has.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\SetExpiryDateDto(); // \Yoast\MyYoastApiClient\Model\SetExpiryDateDto | 

try {
    $result = $apiInstance->apiSubscriptionsSetExpiryDatePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsSetExpiryDatePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SetExpiryDateDto**](../Model/SetExpiryDateDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsSwitchPaymentMethodIdSubscriptionNumberGet**
> apiSubscriptionsSwitchPaymentMethodIdSubscriptionNumberGet($id, $subscriptionNumber)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 
$subscriptionNumber = "subscriptionNumber_example"; // string | 

try {
    $apiInstance->apiSubscriptionsSwitchPaymentMethodIdSubscriptionNumberGet($id, $subscriptionNumber);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsSwitchPaymentMethodIdSubscriptionNumberGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **subscriptionNumber** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsTransferPost**
> \Yoast\MyYoastApiClient\Model\Subscription[] apiSubscriptionsTransferPost($body)

Transfer subscription ownership

Change the subscription owner from one customer to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\TransferOwnershipDto(); // \Yoast\MyYoastApiClient\Model\TransferOwnershipDto | 

try {
    $result = $apiInstance->apiSubscriptionsTransferPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TransferOwnershipDto**](../Model/TransferOwnershipDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsUpgradeSubscriptionNumberSecretKeyGet**
> \Yoast\MyYoastApiClient\Model\Subscription apiSubscriptionsUpgradeSubscriptionNumberSecretKeyGet($subscriptionNumber, $secretKey)

Upgrade subscriptions

Route for upgrading subscriptions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\SubscriptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscriptionNumber = "subscriptionNumber_example"; // string | 
$secretKey = "secretKey_example"; // string | 

try {
    $result = $apiInstance->apiSubscriptionsUpgradeSubscriptionNumberSecretKeyGet($subscriptionNumber, $secretKey);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsUpgradeSubscriptionNumberSecretKeyGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subscriptionNumber** | **string**|  |
 **secretKey** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

