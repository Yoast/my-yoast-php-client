# Yoast\MyYoastApiClient\CourseApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courseControllerFromAcademy**](CourseApi.md#coursecontrollerfromacademy) | **PUT** /api/Courses/fromAcademy | Upserts a course
[**courseControllerGetMany**](CourseApi.md#coursecontrollergetmany) | **GET** /api/Courses | Get courses
[**courseControllerGetOne**](CourseApi.md#coursecontrollergetone) | **GET** /api/Courses/{id} | 

# **courseControllerFromAcademy**
> \Yoast\MyYoastApiClient\Model\Course courseControllerFromAcademy($body)

Upserts a course

Updates a course, or creates it if it doesn't exist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\FromAcademyDto(); // \Yoast\MyYoastApiClient\Model\FromAcademyDto | 

try {
    $result = $apiInstance->courseControllerFromAcademy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseControllerFromAcademy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\FromAcademyDto**](../Model/FromAcademyDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Course**](../Model/Course.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Course[] courseControllerGetMany($filter)

Get courses

Get and filter courses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->courseControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Course[]**](../Model/Course.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **courseControllerGetOne**
> courseControllerGetOne($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->courseControllerGetOne($id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->courseControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

