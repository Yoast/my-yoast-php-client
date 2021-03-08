# Yoast\MyYoastApiClient\RefundApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**refundControllerExport**](RefundApi.md#refundcontrollerexport) | **GET** /api/Refunds/export | Get refunds
[**refundControllerGetMany**](RefundApi.md#refundcontrollergetmany) | **GET** /api/Refunds | Get refunds
[**refundControllerGetOne**](RefundApi.md#refundcontrollergetone) | **GET** /api/Refunds/{id} | Get a refund

# **refundControllerExport**
> \Yoast\MyYoastApiClient\Model\Refund[] refundControllerExport($startDate, $endDate)

Get refunds

A large export of refunds between dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$startDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$endDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->refundControllerExport($startDate, $endDate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundControllerExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **startDate** | **\DateTime**|  |
 **endDate** | **\DateTime**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Refund[] refundControllerGetMany($filter)

Get refunds

Get and filter refunds

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->refundControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund[]**](../Model/Refund.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **refundControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Refund refundControllerGetOne($id, $filter)

Get a refund

Get a single refund

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\RefundApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->refundControllerGetOne($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundApi->refundControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Refund**](../Model/Refund.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

