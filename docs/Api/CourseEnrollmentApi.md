# Yoast\MyYoastApiClient\CourseEnrollmentApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**apiCourseEnrollmentsBulkInvitePost**](CourseEnrollmentApi.md#apiCourseEnrollmentsBulkInvitePost) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
[**apiCourseEnrollmentsFromAcademyPut**](CourseEnrollmentApi.md#apiCourseEnrollmentsFromAcademyPut) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
[**apiCourseEnrollmentsGet**](CourseEnrollmentApi.md#apiCourseEnrollmentsGet) | **GET** /api/CourseEnrollments | 
[**apiCourseEnrollmentsGetLegacyExpiringGet**](CourseEnrollmentApi.md#apiCourseEnrollmentsGetLegacyExpiringGet) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
[**apiCourseEnrollmentsIdGet**](CourseEnrollmentApi.md#apiCourseEnrollmentsIdGet) | **GET** /api/CourseEnrollments/{id} | 
[**apiCourseEnrollmentsIdInvitePost**](CourseEnrollmentApi.md#apiCourseEnrollmentsIdInvitePost) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
[**apiCourseEnrollmentsTransferPost**](CourseEnrollmentApi.md#apiCourseEnrollmentsTransferPost) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments


# **apiCourseEnrollmentsBulkInvitePost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsBulkInvitePost($bulkInviteDto)

Bulk invite for Course Enrollment.

Bulk invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkInviteDto = new \Yoast\MyYoastApiClient\Model\BulkInviteDto(); // \Yoast\MyYoastApiClient\Model\BulkInviteDto | 

try {
    $result = $apiInstance->apiCourseEnrollmentsBulkInvitePost($bulkInviteDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsBulkInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bulkInviteDto** | [**\Yoast\MyYoastApiClient\Model\BulkInviteDto**](../Model/BulkInviteDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsFromAcademyPut**
> apiCourseEnrollmentsFromAcademyPut($courseEnrollmentFromAcademyDto)

Update a CourseEnrollment

Updates the progress for a certain course and student with data from academy.yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$courseEnrollmentFromAcademyDto = new \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto(); // \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto | 

try {
    $apiInstance->apiCourseEnrollmentsFromAcademyPut($courseEnrollmentFromAcademyDto);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsFromAcademyPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **courseEnrollmentFromAcademyDto** | [**\Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto**](../Model/CourseEnrollmentFromAcademyDto.md)|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsGet**
> apiCourseEnrollmentsGet()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->apiCourseEnrollmentsGet();
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
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
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdGet**
> apiCourseEnrollmentsIdGet($id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "id_example"; // string | 

try {
    $apiInstance->apiCourseEnrollmentsIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdGet: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsIdInvitePost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment apiCourseEnrollmentsIdInvitePost($inviteDto, $id)

Invite a customer

Invites another Customer by email to use this Course Enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$inviteDto = new \Yoast\MyYoastApiClient\Model\InviteDto(); // \Yoast\MyYoastApiClient\Model\InviteDto | 
$id = "id_example"; // string | 

try {
    $result = $apiInstance->apiCourseEnrollmentsIdInvitePost($inviteDto, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsIdInvitePost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **inviteDto** | [**\Yoast\MyYoastApiClient\Model\InviteDto**](../Model/InviteDto.md)|  |
 **id** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **apiCourseEnrollmentsTransferPost**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] apiCourseEnrollmentsTransferPost($transferDto)

Transfer course enrollments

Transfers all Course Enrollments from one Customer to another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer
$config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKey('access_token', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('access_token', 'Bearer');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transferDto = new \Yoast\MyYoastApiClient\Model\TransferDto(); // \Yoast\MyYoastApiClient\Model\TransferDto | 

try {
    $result = $apiInstance->apiCourseEnrollmentsTransferPost($transferDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->apiCourseEnrollmentsTransferPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **transferDto** | [**\Yoast\MyYoastApiClient\Model\TransferDto**](../Model/TransferDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\CourseEnrollment[]**](../Model/CourseEnrollment.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

