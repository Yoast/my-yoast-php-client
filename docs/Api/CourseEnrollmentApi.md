# Yoast\MyYoastApiClient\CourseEnrollmentApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**courseEnrollmentControllerBulkInvite**](CourseEnrollmentApi.md#courseenrollmentcontrollerbulkinvite) | **POST** /api/CourseEnrollments/bulkInvite | Bulk invite for Course Enrollment.
[**courseEnrollmentControllerFromAcademy**](CourseEnrollmentApi.md#courseenrollmentcontrollerfromacademy) | **PUT** /api/CourseEnrollments/fromAcademy | Update a CourseEnrollment
[**courseEnrollmentControllerGetLegacyExpiring**](CourseEnrollmentApi.md#courseenrollmentcontrollergetlegacyexpiring) | **GET** /api/CourseEnrollments/getLegacyExpiring | Get legacy course enrollments that expire between two given dates
[**courseEnrollmentControllerGetMany**](CourseEnrollmentApi.md#courseenrollmentcontrollergetmany) | **GET** /api/CourseEnrollments | Get course enrollments
[**courseEnrollmentControllerGetManyPaged**](CourseEnrollmentApi.md#courseenrollmentcontrollergetmanypaged) | **GET** /api/CourseEnrollments/paged | Get customers
[**courseEnrollmentControllerGetOne**](CourseEnrollmentApi.md#courseenrollmentcontrollergetone) | **GET** /api/CourseEnrollments/{id} | Get a course enrollment
[**courseEnrollmentControllerInvite**](CourseEnrollmentApi.md#courseenrollmentcontrollerinvite) | **POST** /api/CourseEnrollments/{id}/invite | Invite a customer
[**courseEnrollmentControllerTransfer**](CourseEnrollmentApi.md#courseenrollmentcontrollertransfer) | **POST** /api/CourseEnrollments/transfer | Transfer course enrollments

# **courseEnrollmentControllerBulkInvite**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentControllerBulkInvite($body)

Bulk invite for Course Enrollment.

Bulk invites another Customer by email to use this Course Enrollment.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\BulkInviteDto(); // \Yoast\MyYoastApiClient\Model\BulkInviteDto | 

try {
    $result = $apiInstance->courseEnrollmentControllerBulkInvite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerBulkInvite: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerFromAcademy**
> courseEnrollmentControllerFromAcademy($body)

Update a CourseEnrollment

Updates the progress for a certain course and student with data from academy.yoast.com

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto(); // \Yoast\MyYoastApiClient\Model\CourseEnrollmentFromAcademyDto | 

try {
    $apiInstance->courseEnrollmentControllerFromAcademy($body);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerFromAcademy: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerGetLegacyExpiring**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentControllerGetLegacyExpiring($from, $until)

Get legacy course enrollments that expire between two given dates

Gets a list of legacy course enrollments that expire between two dates. A legacy enrollment is a course enrollment that does not belong to a subscription, but is instead created as a direct result of placing an order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$until = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 

try {
    $result = $apiInstance->courseEnrollmentControllerGetLegacyExpiring($from, $until);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerGetLegacyExpiring: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerGetMany**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentControllerGetMany($filter)

Get course enrollments

Get and filter course enrollments

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->courseEnrollmentControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerGetMany: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerGetManyPaged**
> courseEnrollmentControllerGetManyPaged($filter)

Get customers

Get and filter customer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->courseEnrollmentControllerGetManyPaged($filter);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerGetManyPaged: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerGetOne**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentControllerGetOne($id, $filter)

Get a course enrollment

Get a single course enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->courseEnrollmentControllerGetOne($id, $filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerGetOne: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerInvite**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment courseEnrollmentControllerInvite($body, $id)

Invite a customer

Invites another Customer by email to use this Course Enrollment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\InviteDto(); // \Yoast\MyYoastApiClient\Model\InviteDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->courseEnrollmentControllerInvite($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerInvite: ', $e->getMessage(), PHP_EOL;
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

# **courseEnrollmentControllerTransfer**
> \Yoast\MyYoastApiClient\Model\CourseEnrollment[] courseEnrollmentControllerTransfer($body)

Transfer course enrollments

Transfers all Course Enrollments from one Customer to another.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\CourseEnrollmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\TransferDto(); // \Yoast\MyYoastApiClient\Model\TransferDto | 

try {
    $result = $apiInstance->courseEnrollmentControllerTransfer($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CourseEnrollmentApi->courseEnrollmentControllerTransfer: ', $e->getMessage(), PHP_EOL;
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

