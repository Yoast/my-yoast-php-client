# Yoast\MyYoastApiClient\DefaultApi

All URIs are relative to *https://my.yoast.test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**acceptInvitation**](DefaultApi.md#acceptinvitation) | **POST** /api/v1/access/{subscriptionId}/invites/{id}/accept | 
[**checkHealth**](DefaultApi.md#checkhealth) | **POST** /api/tmp | 
[**deprecationsProvisioningDownloadsCurrentVersionV1**](DefaultApi.md#deprecationsprovisioningdownloadscurrentversionv1) | **GET** /api/docs/deprecations/provisioning-downloads-v1 | 
[**getLicenseStatus**](DefaultApi.md#getlicensestatus) | **GET** /api/v1/license-validation/{product_id} | 
[**getOptions**](DefaultApi.md#getoptions) | **GET** /api/v1/installation/options | 
[**getOptionsForOrder**](DefaultApi.md#getoptionsfororder) | **GET** /api/v1/installation/options/{invoiceNumber} | 
[**getSites**](DefaultApi.md#getsites) | **GET** /api/v1/installation/sites | 
[**getSitesForOrder**](DefaultApi.md#getsitesfororder) | **GET** /api/v1/installation/sites/{invoiceNumber} | 
[**inviteEmail**](DefaultApi.md#inviteemail) | **POST** /api/v1/access/{subscriptionId}/invites | 
[**revokeInvitation**](DefaultApi.md#revokeinvitation) | **DELETE** /api/v1/access/{subscriptionId}/invites/{id} | 

# **acceptInvitation**
> acceptInvitation($body, $id, $subscriptionId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\AcceptInvitationBodyDto(); // \Yoast\MyYoastApiClient\Model\AcceptInvitationBodyDto | 
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$subscriptionId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->acceptInvitation($body, $id, $subscriptionId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->acceptInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\AcceptInvitationBodyDto**](../Model/AcceptInvitationBodyDto.md)|  |
 **id** | [**string**](../Model/.md)|  |
 **subscriptionId** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **checkHealth**
> checkHealth()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->checkHealth();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->checkHealth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deprecationsProvisioningDownloadsCurrentVersionV1**
> deprecationsProvisioningDownloadsCurrentVersionV1()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $apiInstance->deprecationsProvisioningDownloadsCurrentVersionV1();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deprecationsProvisioningDownloadsCurrentVersionV1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getLicenseStatus**
> \Yoast\MyYoastApiClient\Model\LicenseValidationResult getLicenseStatus($productId, $email)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productId = "productId_example"; // string | 
$email = "email_example"; // string | 

try {
    $result = $apiInstance->getLicenseStatus($productId, $email);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getLicenseStatus: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productId** | **string**|  |
 **email** | **string**|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\LicenseValidationResult**](../Model/LicenseValidationResult.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptions**
> getOptions()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getOptions();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOptions: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOptionsForOrder**
> getOptionsForOrder($invoiceNumber)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceNumber = "invoiceNumber_example"; // string | 

try {
    $apiInstance->getOptionsForOrder($invoiceNumber);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getOptionsForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceNumber** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSites**
> getSites()



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->getSites();
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSites: ', $e->getMessage(), PHP_EOL;
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

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSitesForOrder**
> getSitesForOrder($invoiceNumber)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearer
    $config = Yoast\MyYoastApiClient\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoiceNumber = "invoiceNumber_example"; // string | 

try {
    $apiInstance->getSitesForOrder($invoiceNumber);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getSitesForOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **invoiceNumber** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearer](../../README.md#bearer)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **inviteEmail**
> \Yoast\MyYoastApiClient\Model\InviteResponseDto inviteEmail($body, $subscriptionId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Yoast\MyYoastApiClient\Model\InviteBodyDto(); // \Yoast\MyYoastApiClient\Model\InviteBodyDto | 
$subscriptionId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $result = $apiInstance->inviteEmail($body, $subscriptionId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->inviteEmail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yoast\MyYoastApiClient\Model\InviteBodyDto**](../Model/InviteBodyDto.md)|  |
 **subscriptionId** | [**string**](../Model/.md)|  |

### Return type

[**\Yoast\MyYoastApiClient\Model\InviteResponseDto**](../Model/InviteResponseDto.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeInvitation**
> revokeInvitation($id, $subscriptionId)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$subscriptionId = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 

try {
    $apiInstance->revokeInvitation($id, $subscriptionId);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->revokeInvitation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | [**string**](../Model/.md)|  |
 **subscriptionId** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

