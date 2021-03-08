# Yoast\MyYoastApiClient\ProductGroupApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productGroupControllerGetMany**](ProductGroupApi.md#productgroupcontrollergetmany) | **GET** /api/ProductGroups | Get productgroups

# **productGroupControllerGetMany**
> \Yoast\MyYoastApiClient\Model\ProductGroup[] productGroupControllerGetMany($filter)

Get productgroups

Get and filter productgroups

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\ProductGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->productGroupControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductGroupApi->productGroupControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\ProductGroup[]**](../Model/ProductGroup.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

