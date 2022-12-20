# Yoast\MyYoastApiClient\CourseApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**fromAcademy**](CourseApi.md#fromacademy) | **PUT** /api/Courses/fromAcademy | Upserts a course
[**getMany**](CourseApi.md#getmany) | **GET** /api/Courses | Get courses
[**getOne**](CourseApi.md#getone) | **GET** /api/Courses/{id} | 

# **fromAcademy**
> \Yoast\MyYoastApiClient\Model\Course fromAcademy($body)

Upserts a course

Updates a course, or creates it if it doesn't exist

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\FromAcademyDto(); // \Yoast\MyYoastApiClient\Model\FromAcademyDto | 

try {
    $result = $apiInstance->fromAcademy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->fromAcademy: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMany**
> \Yoast\MyYoastApiClient\Model\Course[] getMany($filter)

Get courses

Get and filter courses

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getMany: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> getOne($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->getOne($id);
} catch (Exception $e) {
    echo 'Exception when calling CourseApi->getOne: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

