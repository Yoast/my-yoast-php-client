# Yoast\MyYoastApiClient\FromWooCommerceApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fromWooCommerceControllerCustomerFromWooCommerce**](FromWooCommerceApi.md#fromwoocommercecontrollercustomerfromwoocommerce) | **PUT** /api/Customers/fromWooCommerce | Update or create a customer
[**fromWooCommerceControllerOrderFromWooCommerce**](FromWooCommerceApi.md#fromwoocommercecontrollerorderfromwoocommerce) | **PUT** /api/Orders/fromWooCommerce | Sync orders to MyYoast.
[**fromWooCommerceControllerProductFromWooCommerce**](FromWooCommerceApi.md#fromwoocommercecontrollerproductfromwoocommerce) | **PUT** /api/Products/fromWooCommerce | Sync products to MyYoast.
[**fromWooCommerceControllerProductGroupFromWooCommerce**](FromWooCommerceApi.md#fromwoocommercecontrollerproductgroupfromwoocommerce) | **PUT** /api/ProductGroups/fromWooCommerce | Sync products to MyYoast.

# **fromWooCommerceControllerCustomerFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Customer fromWooCommerceControllerCustomerFromWooCommerce($body)

Update or create a customer

This endpoint can be used by WooCommerce to update or create a customer in the MyYoast database.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CustomerFromWooDto(); // \Yoast\MyYoastApiClient\Model\CustomerFromWooDto | 

try {
    $result = $apiInstance->fromWooCommerceControllerCustomerFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->fromWooCommerceControllerCustomerFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

# **fromWooCommerceControllerOrderFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Order fromWooCommerceControllerOrderFromWooCommerce($body)

Sync orders to MyYoast.

This route allows WooCommerce to sync order data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\OrderFromWooDto(); // \Yoast\MyYoastApiClient\Model\OrderFromWooDto | 

try {
    $result = $apiInstance->fromWooCommerceControllerOrderFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->fromWooCommerceControllerOrderFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

# **fromWooCommerceControllerProductFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\Product fromWooCommerceControllerProductFromWooCommerce($body)

Sync products to MyYoast.

This route allows WooCommerce to sync product data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\ProductFromWooDto(); // \Yoast\MyYoastApiClient\Model\ProductFromWooDto | 

try {
    $result = $apiInstance->fromWooCommerceControllerProductFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->fromWooCommerceControllerProductFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

# **fromWooCommerceControllerProductGroupFromWooCommerce**
> \Yoast\MyYoastApiClient\Model\ProductGroup fromWooCommerceControllerProductGroupFromWooCommerce($body)

Sync products to MyYoast.

This route allows WooCommerce to sync product data to MyYoast.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\FromWooCommerceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto(); // \Yoast\MyYoastApiClient\Model\ProductGroupFromWooDto | 

try {
    $result = $apiInstance->fromWooCommerceControllerProductGroupFromWooCommerce($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FromWooCommerceApi->fromWooCommerceControllerProductGroupFromWooCommerce: ', $e->getMessage(), PHP_EOL;
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

