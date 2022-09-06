# Yoast\MyYoastApiClient\CourseEnrollmentApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCourseEnrollmentsBulkInvitePost**](CourseEnrollmentApi.md#apicourseenrollmentsbulkinvitepost) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
[**apiCourseEnrollmentsFromAcademyPut**](CourseEnrollmentApi.md#apicourseenrollmentsfromacademyput) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
[**apiCourseEnrollmentsGet**](CourseEnrollmentApi.md#apicourseenrollmentsget) | **GET** /api/CourseEnrollments | Get course enrollments
[**apiCourseEnrollmentsGetLegacyExpiringGet**](CourseEnrollmentApi.md#apicourseenrollmentsgetlegacyexpiringget) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
[**apiCourseEnrollmentsIdGet**](CourseEnrollmentApi.md#apicourseenrollmentsidget) | **GET** /api/CourseEnrollments/{id} | Get a course enrollment
[**apiCourseEnrollmentsIdInvitePost**](CourseEnrollmentApi.md#apicourseenrollmentsidinvitepost) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
[**apiCourseEnrollmentsPagedGet**](CourseEnrollmentApi.md#apicourseenrollmentspagedget) | **GET** /api/CourseEnrollments/paged | Get customers
[**apiCourseEnrollmentsTransferPost**](CourseEnrollmentApi.md#apicourseenrollmentstransferpost) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments

# **apiCourseEnrollmentsBulkInvitePost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsBulkInvitePost($body)

Bulk invite for Course Enrollment.

Bulk invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\BulkInviteDto(); // \Yoast\MyYoastApiClient\Model\BulkInviteDto | 

try {
    $result = $apiInstance->apiCourseEnrollmentsBulkInvitePost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsBulkInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\BulkInviteDto**](../Model/BulkInviteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsFromAcademyPut**
> apiCourseEnrollmentsFromAcademyPut($body)

Update a CourseEnrollment

Updates the progress for a certain course and student with data from academy.yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto(); // \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto | 

try {
    $apiInstance->apiCourseEnrollmentsFromAcademyPut($body);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsFromAcademyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto**](../Model/CourseEnrollmentFromAcademyDto.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsGet($filter)

Get course enrollments

Get and filter course enrollments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCourseEnrollmentsGet($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsGetLegacyExpiringGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsGetLegacyExpiringGet($from, $until)

Get legacy course enrollments that expire between two given dates

Gets a list of legacy course enrollments that expire between two dates. A legacy enrollment is a course enrollment that does not belong to a subscription, but is instead created as a direct result of placing an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->apiCourseEnrollmentsGetLegacyExpiringGet($from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsGetLegacyExpiringGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | **\DateTime**|  |
 **until** | **\DateTime**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdGet**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdGet($id, $filter)

Get a course enrollment

Get a single course enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->apiCourseEnrollmentsIdGet($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdInvitePost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdInvitePost($body, $id)

Invite a customer

Invites another Customer by email to use this Course Enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\InviteDto(); // \Yoast\MyYoastApiClient\Model\InviteDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->apiCourseEnrollmentsIdInvitePost($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\InviteDto**](../Model/InviteDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsPagedGet**
> apiCourseEnrollmentsPagedGet($filter)

Get customers

Get and filter customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->apiCourseEnrollmentsPagedGet($filter);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsPagedGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsTransferPost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsTransferPost($body)

Transfer course enrollments

Transfers all Course Enrollments from one Customer to another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\TransferDto(); // \Yoast\MyYoastApiClient\Model\TransferDto | 

try {
    $result = $apiInstance->apiCourseEnrollmentsTransferPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TransferDto**](../Model/TransferDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

