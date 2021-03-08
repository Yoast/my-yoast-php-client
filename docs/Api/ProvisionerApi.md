# Yoast\MyYoastApiClient\ProvisionerApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**provisionerDataControllerGetMany**](ProvisionerApi.md#provisionerdatacontrollergetmany) | **GET** /api/ProvisionerData | Get provisioner data
[**provisionerDataControllerGetOne**](ProvisionerApi.md#provisionerdatacontrollergetone) | **GET** /api/ProvisionerData/{id} | Get provisioner data

# **provisionerDataControllerGetMany**
> \Yoast\MyYoastApiClient\Model\ProvisionerData[] provisionerDataControllerGetMany()

Get provisioner data

Get and filter provisioner data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\ProvisionerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->provisionerDataControllerGetMany();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisionerApi->provisionerDataControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yoast\MyYoastApiClient\Model\ProvisionerData[]**](../Model/ProvisionerData.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisionerDataControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Subscription provisionerDataControllerGetOne($id)

Get provisioner data

Get provisioner data

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\ProvisionerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->provisionerDataControllerGetOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisionerApi->provisionerDataControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

