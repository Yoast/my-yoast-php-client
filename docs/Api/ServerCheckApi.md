# Yoast\MyYoastApiClient\ServerCheckApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**checkHealth**](ServerCheckApi.md#checkhealth) | **GET** /server-check | Server health check

# **checkHealth**
> string checkHealth()

Server health check

Checks if a simple user query can be performed. If so, we're up and running. If not, something's up

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ServerCheckApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->checkHealth();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ServerCheckApi->checkHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

