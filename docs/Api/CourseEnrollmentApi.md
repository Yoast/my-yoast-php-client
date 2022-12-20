# Yoast\MyYoastApiClient\CourseEnrollmentApi

All URIs are relative to *http://my.yoast.test:3000*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bulkInvite**](CourseEnrollmentApi.md#bulkinvite) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
[**fromAcademy**](CourseEnrollmentApi.md#fromacademy) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
[**getLegacyExpiring**](CourseEnrollmentApi.md#getlegacyexpiring) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
[**getMany**](CourseEnrollmentApi.md#getmany) | **GET** /api/CourseEnrollments | Get course enrollments
[**getManyPaged**](CourseEnrollmentApi.md#getmanypaged) | **GET** /api/CourseEnrollments/paged | Get customers
[**getOne**](CourseEnrollmentApi.md#getone) | **GET** /api/CourseEnrollments/{id} | Get a course enrollment
[**invite**](CourseEnrollmentApi.md#invite) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
[**transfer**](CourseEnrollmentApi.md#transfer) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments

# **bulkInvite**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] bulkInvite($body)

Bulk invite for Course Enrollment.

Bulk invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\BulkInviteDto(); // \Yoast\MyYoastApiClient\Model\BulkInviteDto | 

try {
    $result = $apiInstance->bulkInvite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->bulkInvite: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **fromAcademy**
> fromAcademy($body)

Update a CourseEnrollment

Updates the progress for a certain course and student with data from academy.yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto(); // \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto | 

try {
    $apiInstance->fromAcademy($body);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->fromAcademy: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLegacyExpiring**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] getLegacyExpiring($from, $until)

Get legacy course enrollments that expire between two given dates

Gets a list of legacy course enrollments that expire between two dates. A legacy enrollment is a course enrollment that does not belong to a subscription, but is instead created as a direct result of placing an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->getLegacyExpiring($from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->getLegacyExpiring: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getMany**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] getMany($filter)

Get course enrollments

Get and filter course enrollments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->getMany: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getManyPaged**
> getManyPaged($filter)

Get customers

Get and filter customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->getManyPaged($filter);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->getManyPaged: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOne**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment getOne($id, $filter)

Get a course enrollment

Get a single course enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->getOne($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->getOne: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **invite**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment invite($body, $id)

Invite a customer

Invites another Customer by email to use this Course Enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\InviteDto(); // \Yoast\MyYoastApiClient\Model\InviteDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->invite($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->invite: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **transfer**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] transfer($body)

Transfer course enrollments

Transfers all Course Enrollments from one Customer to another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\TransferDto(); // \Yoast\MyYoastApiClient\Model\TransferDto | 

try {
    $result = $apiInstance->transfer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->transfer: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

