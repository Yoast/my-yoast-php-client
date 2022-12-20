# Yoast\MyYoastApiClient\ProvisioningDownloadsApi

All URIs are relative to *http://my.yoast.test:3000/*

Method | HTTP request | Description
------------- | ------------- | -------------
[**provisioningDownloadsControllerCurrentVersion**](ProvisioningDownloadsApi.md#provisioningdownloadscontrollercurrentversion) | **GET** /api/provisioning/downloads/currentVersion | Retrieve the current version for the productCode for the provisioner.
[**provisioningDownloadsControllerCurrentZip**](ProvisioningDownloadsApi.md#provisioningdownloadscontrollercurrentzip) | **GET** /api/provisioning/downloads/currentZip | Redirect to the current zip for the productCode.

# **provisioningDownloadsControllerCurrentVersion**
> string provisioningDownloadsControllerCurrentVersion($productCode)

Retrieve the current version for the productCode for the provisioner.

This route returns the latest version of the product that is offered to the customer when using the passed productCode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $result = $apiInstance->provisioningDownloadsControllerCurrentVersion($productCode);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->provisioningDownloadsControllerCurrentVersion: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| The code used to create the product. |

### Return type

**string**

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provisioningDownloadsControllerCurrentZip**
> provisioningDownloadsControllerCurrentZip($productCode)

Redirect to the current zip for the productCode.

If a new version is available, you can use this route to redirect to the zip of that new version of the product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Yoast\MyYoastApiClient\Api\ProvisioningDownloadsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$productCode = "productCode_example"; // string | The code used to create the product.

try {
    $apiInstance->provisioningDownloadsControllerCurrentZip($productCode);
} catch (Exception $e) {
    echo 'Exception when calling ProvisioningDownloadsApi->provisioningDownloadsControllerCurrentZip: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productCode** | **string**| The code used to create the product. |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

