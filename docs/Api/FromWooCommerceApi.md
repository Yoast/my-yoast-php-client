# Yoast\MyYoastApiClient\FromWooCommerceApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCustomersFromWooCommercePut**](FromWooCommerceApi.md#apicustomersfromwoocommerceput) | **PUT** /api/Customers/fromWooCommerce | Update or create a customer
[**apiOrdersFromWooCommercePut**](FromWooCommerceApi.md#apiordersfromwoocommerceput) | **PUT** /api/Orders/fromWooCommerce | Sync orders to MyYoast.
[**apiProductGroupsFromWooCommercePut**](FromWooCommerceApi.md#apiproductgroupsfromwoocommerceput) | **PUT** /api/ProductGroups/fromWooCommerce | Sync products to MyYoast.
[**apiProductsFromWooCommercePut**](FromWooCommerceApi.md#apiproductsfromwoocommerceput) | **PUT** /api/Products/fromWooCommerce | Sync products to MyYoast.
[**apiSubscriptionsFromWooCommercePut**](FromWooCommerceApi.md#apisubscriptionsfromwoocommerceput) | **PUT** /api/Subscriptions/fromWooCommerce | Sync subscriptions to MyYoast.

# **apiCustomersFromWooCommercePut**
> \Yoast\MyYoastApiClient\Model\Customer apiCustomersFromWooCommercePut($body)

Update or create a customer

This endpoint can be used by WooCommerce to update or create a customer in the MyYoast database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CustomerFromWooDto(); // \Yoast\MyYoastApiClient\Model\CustomerFromWooDto | 

try {
    $result = $apiInstance->apiCustomersFromWooCommercePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->apiCustomersFromWooCommercePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CustomerFromWooDto**](../Model/CustomerFromWooDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiOrdersFromWooCommercePut**
> \Yoast\MyYoastApiClient\Model\Order apiOrdersFromWooCommercePut($body)

Sync orders to MyYoast.

This route allows WooCommerce to sync order data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\OrderFromWooDto(); // \Yoast\MyYoastApiClient\Model\OrderFromWooDto | 

try {
    $result = $apiInstance->apiOrdersFromWooCommercePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->apiOrdersFromWooCommercePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\OrderFromWooDto**](../Model/OrderFromWooDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Order**](../Model/Order.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProductGroupsFromWooCommercePut**
> \Yoast\MyYoastApiClient\Model\ProductGroup apiProductGroupsFromWooCommercePut($body)

Sync products to MyYoast.

This route allows WooCommerce to sync product data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto(); // \Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto | 

try {
    $result = $apiInstance->apiProductGroupsFromWooCommercePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->apiProductGroupsFromWooCommercePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto**](../Model/ProductGroupFromWooDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup**](../Model/ProductGroup.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProductsFromWooCommercePut**
> \Yoast\MyYoastApiClient\Model\Product apiProductsFromWooCommercePut($body)

Sync products to MyYoast.

This route allows WooCommerce to sync product data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\ProductFromWooDto(); // \Yoast\MyYoastApiClient\Model\ProductFromWooDto | 

try {
    $result = $apiInstance->apiProductsFromWooCommercePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->apiProductsFromWooCommercePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\ProductFromWooDto**](../Model/ProductFromWooDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiSubscriptionsFromWooCommercePut**
> \Yoast\MyYoastApiClient\Model\Subscription[] apiSubscriptionsFromWooCommercePut($body)

Sync subscriptions to MyYoast.

This route allows WooCommerce to sync data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\SubscriptionFromWooDto(); // \Yoast\MyYoastApiClient\Model\SubscriptionFromWooDto | 

try {
    $result = $apiInstance->apiSubscriptionsFromWooCommercePut($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->apiSubscriptionsFromWooCommercePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\SubscriptionFromWooDto**](../Model/SubscriptionFromWooDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription[]**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

