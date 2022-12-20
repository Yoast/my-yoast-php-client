# Yoast\MyYoastApiClient\HelpscoutApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**helpscout**](HelpscoutApi.md#helpscout) | **POST** /helpscout | Get information about a customer

# **helpscout**
> \Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto helpscout($body, $xHelpScoutSignature)

Get information about a customer

Get order and contact information about a customer in html format

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\HelpscoutApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\HelpScoutDto(); // \Yoast\MyYoastApiClient\Model\HelpScoutDto | 
$xHelpScoutSignature = "xHelpScoutSignature_example"; // string | The Helpscout signature

try {
    $result = $apiInstance->helpscout($body, $xHelpScoutSignature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HelpscoutApi->helpscout: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\HelpScoutDto**](../Model/HelpScoutDto.md)|  |
 **xHelpScoutSignature** | **string**| The Helpscout signature |

### Return type

[**\Yoast\MyYoastApiClient\Model\UnspecifiedResponseDto**](../Model/UnspecifiedResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

