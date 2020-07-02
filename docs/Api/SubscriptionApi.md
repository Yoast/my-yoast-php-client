# Yoast\MyYoastApiClient\SubscriptionApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiSubscriptionsExpiringGet**](SubscriptionApi.md#apiSubscriptionsExpiringGet) | **GET** /api/Subscriptions/expiring | 
[**apiSubscriptionsGet**](SubscriptionApi.md#apiSubscriptionsGet) | **GET** /api/Subscriptions | Get subscriptions
[**apiSubscriptionsIdDelete**](SubscriptionApi.md#apiSubscriptionsIdDelete) | **DELETE** /api/Subscriptions/{id} | Delete a subscription
[**apiSubscriptionsIdGet**](SubscriptionApi.md#apiSubscriptionsIdGet) | **GET** /api/Subscriptions/{id} | Get a subscription
[**apiSubscriptionsIdRecalculateSubscriptionCountPost**](SubscriptionApi.md#apiSubscriptionsIdRecalculateSubscriptionCountPost) | **POST** /api/Subscriptions/{id}/recalculateSubscriptionCount | Recalculate SubscriptionCount.
[**apiSubscriptionsRenewSubscriptionNumberSecretKeyGet**](SubscriptionApi.md#apiSubscriptionsRenewSubscriptionNumberSecretKeyGet) | **GET** /api/Subscriptions/renew/{subscriptionNumber}/{secretKey} | Renew subscriptions
[**apiSubscriptionsTransferPost**](SubscriptionApi.md#apiSubscriptionsTransferPost) | **POST** /api/Subscriptions/transfer | Transfer subscription ownership


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

 - **Content-Type**: application/json
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
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

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
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
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
$id = "id_example"; // string | 

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

 - **Content-Type**: application/json
 - **Accept**: application/json

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
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

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
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
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

 - **Content-Type**: application/json
 - **Accept**: application/json

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsTransferPost**
> \Yoast\MyYoastApiClient\Model\Subscription[] apiSubscriptionsTransferPost($transferOwnershipDto)

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
$transferOwnershipDto = new \Yoast\MyYoastApiClient\Model\TransferOwnershipDto(); // \Yoast\MyYoastApiClient\Model\TransferOwnershipDto | 

try {
    $result = $apiInstance->apiSubscriptionsTransferPost($transferOwnershipDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionApi->apiSubscriptionsTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transferOwnershipDto** | [**\Yoast\MyYoastApiClient\Model\TransferOwnershipDto**](../Model/TransferOwnershipDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

