# Yoast\MyYoastApiClient\AdmissionApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**admissionControllerChangeStudent**](AdmissionApi.md#admissioncontrollerchangestudent) | **PUT** /api/Admissions/{id} | Update an admission
[**admissionControllerGetMany**](AdmissionApi.md#admissioncontrollergetmany) | **GET** /api/Admissions | Get admissions
[**admissionControllerGetManyPaged**](AdmissionApi.md#admissioncontrollergetmanypaged) | **GET** /api/Admissions/paged | Get admissions
[**admissionControllerGetOne**](AdmissionApi.md#admissioncontrollergetone) | **GET** /api/Admissions/{id} | Get an admission
[**admissionControllerInvite**](AdmissionApi.md#admissioncontrollerinvite) | **POST** /api/Admissions | Invite a customer
[**admissionControllerTransferAdmissions**](AdmissionApi.md#admissioncontrollertransferadmissions) | **POST** /api/Admissions/transfer | Transfer admissions between customers

# **admissionControllerChangeStudent**
> \Yoast\MyYoastApiClient\Model\Admission admissionControllerChangeStudent($body, $id)

Update an admission

Changes the student for a certain admission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\UpdateDto(); // \Yoast\MyYoastApiClient\Model\UpdateDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->admissionControllerChangeStudent($body, $id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->admissionControllerChangeStudent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\UpdateDto**](../Model/UpdateDto.md)|  |
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Admission**](../Model/Admission.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **admissionControllerGetMany**
> \Yoast\MyYoastApiClient\Model\Admission[] admissionControllerGetMany($filter)

Get admissions

Get and filter admissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $result = $apiInstance->admissionControllerGetMany($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->admissionControllerGetMany: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**object**](../Model/.md)| Used for filtering/joining the results. | [optional]

### Return type

[**\Yoast\MyYoastApiClient\Model\Admission[]**](../Model/Admission.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **admissionControllerGetManyPaged**
> admissionControllerGetManyPaged($filter)

Get admissions

Get and filter admissions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \stdClass; // object | Used for filtering/joining the results.

try {
    $apiInstance->admissionControllerGetManyPaged($filter);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->admissionControllerGetManyPaged: ', $e->getMessage(), PHP_EOL;
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

# **admissionControllerGetOne**
> \Yoast\MyYoastApiClient\Model\Admission admissionControllerGetOne($id)

Get an admission

Get a single admission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->admissionControllerGetOne($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->admissionControllerGetOne: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Admission**](../Model/Admission.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **admissionControllerInvite**
> \Yoast\MyYoastApiClient\Model\Admission admissionControllerInvite($body)

Invite a customer

Invites another customer by email to use this admission

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\CreateDto(); // \Yoast\MyYoastApiClient\Model\CreateDto | 

try {
    $result = $apiInstance->admissionControllerInvite($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->admissionControllerInvite: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\CreateDto**](../Model/CreateDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Admission**](../Model/Admission.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **admissionControllerTransferAdmissions**
> \Yoast\MyYoastApiClient\Model\Admission[] admissionControllerTransferAdmissions($body)

Transfer admissions between customers

Transfers all admission from one customer to another

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\AdmissionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yoast\MyYoastApiClient\Model\TransferAdmissionDto(); // \Yoast\MyYoastApiClient\Model\TransferAdmissionDto | 

try {
    $result = $apiInstance->admissionControllerTransferAdmissions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AdmissionApi->admissionControllerTransferAdmissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\TransferAdmissionDto**](../Model/TransferAdmissionDto.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\Admission[]**](../Model/Admission.md)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

