# Yoast\MyYoastApiClient\ExportOrdersApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportOrdersV2FromToTypeGet**](ExportOrdersApi.md#exportOrdersV2FromToTypeGet) | **GET** /export-orders/v2/{from}/{to}/{type} | Creates an export for orders
[**exportOrdersYearMonthTypeGet**](ExportOrdersApi.md#exportOrdersYearMonthTypeGet) | **GET** /export-orders/{year}/{month}/{type} | Creates an export for orders


# **exportOrdersV2FromToTypeGet**
> \SplFileObject exportOrdersV2FromToTypeGet($from, $to, $type, $password)

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
    $result = $apiInstance->exportOrdersV2FromToTypeGet($from, $to, $type, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportOrdersApi->exportOrdersV2FromToTypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportOrdersYearMonthTypeGet**
> \SplFileObject exportOrdersYearMonthTypeGet($year, $month, $type, $password)

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
    $result = $apiInstance->exportOrdersYearMonthTypeGet($year, $month, $type, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ExportOrdersApi->exportOrdersYearMonthTypeGet: ', $e->getMessage(), PHP_EOL;
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

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

