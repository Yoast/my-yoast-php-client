# Yoast\MyYoastApiClient\GDPRApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteCustomer**](GDPRApi.md#deletecustomer) | **DELETE** /api/Customers/{id}/gdpr-delete | Performs a \&quot;GDPR forget me\&quot; request.

# **deleteCustomer**
> \Yoast\MyYoastApiClient\Model\ deleteCustomer($id)

Performs a \"GDPR forget me\" request.

Deletes and/or obfuscates all data related to a customer, except order data that we legally need to generate invoices.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\GDPRApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->deleteCustomer($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GDPRApi->deleteCustomer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\**](../Model/.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

