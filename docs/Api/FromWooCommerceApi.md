# Yoast\MyYoastApiClient\FromWooCommerceApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customerFromWooCommerce**](FromWooCommerceApi.md#customerfromwoocommerce) | **PUT** /api/Customers/fromWooCommerce | Update or create a customer
[**orderFromWooCommerce**](FromWooCommerceApi.md#orderfromwoocommerce) | **PUT** /api/Orders/fromWooCommerce | Sync orders to MyYoast.
[**productFromWooCommerce**](FromWooCommerceApi.md#productfromwoocommerce) | **PUT** /api/Products/fromWooCommerce | Sync products to MyYoast.
[**productGroupFromWooCommerce**](FromWooCommerceApi.md#productgroupfromwoocommerce) | **PUT** /api/ProductGroups/fromWooCommerce | Sync products to MyYoast.

# **customerFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Customer customerFromWooCommerce($body)

Update or create a customer

This endpoint can be used by WooCommerce to update or create a customer in the MyYoast database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CustomerFromWooDto(); // \Yoast\MyYoastApiClient\Model\CustomerFromWooDto | 

try {
    $result = $apiInstance->customerFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->customerFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Order orderFromWooCommerce($body)

Sync orders to MyYoast.

This route allows WooCommerce to sync order data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\OrderFromWooDto(); // \Yoast\MyYoastApiClient\Model\OrderFromWooDto | 

try {
    $result = $apiInstance->orderFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->orderFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Product productFromWooCommerce($body)

Sync products to MyYoast.

This route allows WooCommerce to sync product data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\ProductFromWooDto(); // \Yoast\MyYoastApiClient\Model\ProductFromWooDto | 

try {
    $result = $apiInstance->productFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->productFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGroupFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\ProductGroup productGroupFromWooCommerce($body)

Sync products to MyYoast.

This route allows WooCommerce to sync product data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto(); // \Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto | 

try {
    $result = $apiInstance->productGroupFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->productGroupFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

