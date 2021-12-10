# Yoast\MyYoastApiClient\EmailApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiEmailsBulkSendPost**](EmailApi.md#apiemailsbulksendpost) | **POST** /api/Emails/bulk-send | 

# **apiEmailsBulkSendPost**
> int apiEmailsBulkSendPost($body)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\EmailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\BulkSendEmailDto(); // \Yoast\MyYoastApiClient\Model\BulkSendEmailDto | 

try {
    $result = $apiInstance->apiEmailsBulkSendPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EmailApi->apiEmailsBulkSendPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\BulkSendEmailDto**](../Model/BulkSendEmailDto.md)|  |

### Return type

**int**

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

