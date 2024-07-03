# Yoast\MyYoastApiClient\ExportOrdersApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportOrders**](ExportOrdersApi.md#exportorders) | **GET** /export-orders/{year}/{month}/{type} | Creates an export for orders
[**exportOrdersV2**](ExportOrdersApi.md#exportordersv2) | **GET** /export-orders/v2/{from}/{to}/{type} | Creates an export for orders

# **exportOrders**
> exportOrders($year, $month, $type, $password)

Creates an export for orders

Exports orders in a given time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ExportOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$year = "year_example"; // string | 
$month = "month_example"; // string | 
$type = "type_example"; // string | 
$password = "password_example"; // string | 

try {
    $apiInstance->exportOrders($year, $month, $type, $password);
} catch (Exception $e) {
    echo 'Exception when calling ExportOrdersApi->exportOrders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **year** | **string**|  |
 **month** | **string**|  |
 **type** | **string**|  |
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportOrdersV2**
> exportOrdersV2($from, $to, $type, $password)

Creates an export for orders

Exports orders in a given time period.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ExportOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = "from_example"; // string | 
$to = "to_example"; // string | 
$type = "type_example"; // string | 
$password = "password_example"; // string | 

try {
    $apiInstance->exportOrdersV2($from, $to, $type, $password);
} catch (Exception $e) {
    echo 'Exception when calling ExportOrdersApi->exportOrdersV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **string**|  |
 **to** | **string**|  |
 **type** | **string**|  |
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

