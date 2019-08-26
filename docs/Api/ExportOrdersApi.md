# Yoast\MyYoastApiClient\ExportOrdersApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**exportOrdersYearMonthTypeGet**](ExportOrdersApi.md#exportOrdersYearMonthTypeGet) | **GET** /export-orders/{year}/{month}/{type} | 


# **exportOrdersYearMonthTypeGet**
> \SplFileObject exportOrdersYearMonthTypeGet($year, $month, $type)



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

try {
    $result = $apiInstance->exportOrdersYearMonthTypeGet($year, $month, $type);
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

### Return type

[**\SplFileObject**](../Model/\SplFileObject.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

