# Yoast\MyYoastApiClient\ProvisioningAccountApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**setSiteForSubscription**](ProvisioningAccountApi.md#setsiteforsubscription) | **POST** /api/provisioning/account/regenerate-token | Generate a new auth token

# **setSiteForSubscription**
> \Yoast\MyYoastApiClient\Model\RegenerateTokenResponseDto setSiteForSubscription()

Generate a new auth token

This route generate a new password for the Basic Auth that is used by provisioner accounts to authenticate with.After this route is called, the old password will NO LONGER be valid. Please store the response of this request somewhere safe!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProvisioningAccountApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->setSiteForSubscription();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningAccountApi->setSiteForSubscription: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Yoast\MyYoastApiClient\Model\RegenerateTokenResponseDto**](../Model/RegenerateTokenResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

