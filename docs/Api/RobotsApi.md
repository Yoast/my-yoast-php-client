# Yoast\MyYoastApiClient\RobotsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**robotsControllerServeRobots**](RobotsApi.md#robotscontrollerserverobots) | **GET** /robots.txt | 

# **robotsControllerServeRobots**
> string robotsControllerServeRobots()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\RobotsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->robotsControllerServeRobots();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RobotsApi->robotsControllerServeRobots: ', $e->getMessage(), PHP_EOL;
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

