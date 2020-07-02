# Yoast\MyYoastApiClient\ProductApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiProductsGet**](ProductApi.md#apiProductsGet) | **GET** /api/Products | Get products
[**apiProductsIdGet**](ProductApi.md#apiProductsIdGet) | **GET** /api/Products/{id} | Get a product
[**apiProductsProductIdDelete**](ProductApi.md#apiProductsProductIdDelete) | **DELETE** /api/Products/{productId} | 
[**apiProductsWordpressPluginVersionDetailsGet**](ProductApi.md#apiProductsWordpressPluginVersionDetailsGet) | **GET** /api/Products/wordpressPluginVersionDetails | 


# **apiProductsGet**
> \Yoast\MyYoastApiClient\Model\Product[] apiProductsGet($filter)

Get products

Get and filter products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiProductsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product[]**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProductsIdGet**
> \Yoast\MyYoastApiClient\Model\Product apiProductsIdGet($id, $filter)

Get a product

Get a single product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 
$filter = array('key' => "filter_example"); // map[string,string] | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiProductsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**map[string,string]**](../Model/string.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Product**](../Model/Product.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProductsProductIdDelete**
> apiProductsProductIdDelete($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "id_example"; // string | 

try {
    $apiInstance->apiProductsProductIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsProductIdDelete: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiProductsWordpressPluginVersionDetailsGet**
> apiProductsWordpressPluginVersionDetailsGet($password)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$password = "password_example"; // string | 

try {
    $apiInstance->apiProductsWordpressPluginVersionDetailsGet($password);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->apiProductsWordpressPluginVersionDetailsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

